<?php
include(ROOT_PATH ."/App/database/db.php");
include(ROOT_PATH ."/App/helpers/validatepost.php");
include(ROOT_PATH ."/App/helpers/validateupdate.php");


$table = 'post';

$post = selectAll('post');

$errors = array();
$id = "";
$title = "";
$body = "";
$published = "";

if(isset($_GET['id']))
{
   $post = selectOne($table,['id'=> $_GET['id']]);
   $id  = $post['id'];
   $title = $post['title'];
   $body =  $post['body'];
   $published =$post['published'];

}

if(isset($_GET['delete_id']))
{
   $count = delete($table, $_GET['delete_id']);
   $_SESSION['message'] = "post deleted successfully";
   $_SESSION['type'] = "success";
   header("location: " . BASE_URL . "/admin/post/index.php");
   exit();

}

if(isset($_GET['published']) && isset($_GET['p_id']) ) {
 
    $published = $_GET['published'];
    $P_id = $_GET['p_id'];
    $count = update($table, $P_id, ['published' => $published]);
    $_SESSION['message'] = "post publish status  successfully";
    $_SESSION['type'] = "success";
    header("location: " . BASE_URL . "/admin/post/index.php");
    exit();

}


if(isset($_POST['add-post'])){
    $errors= validatepost($_POST);

     if(!empty(($_FILES['image']['name'])))
     {
         $image_name = time().'_' . $_FILES['image']['name'];
         $destination = ROOT_PATH . "/img/" . $image_name;

         $result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);

         if ($result) {
                 $_POST['image'] = $image_name;
    
         } else {
            array_push($errors, "Failed to updoad image");
         }
         

     }else{
         array_push($errors, "post image required");
     }
      

       if(count($errors) === 0)
       {
        unset($_POST['add-post']);
        $_POST['user_id'] = 1;
        $_POST['published'] = isset($_POST['published']) ? 1 : 0;
        $_POST['body'] = htmlentities($_POST['body']);

        $post_id = create($table, $_POST);
        $_SESSION['message'] = "post created successfully";
        $_SESSION['type'] = "success";
        header("location: " . BASE_URL . "/admin/post/index.php");
        exit();
       }
       else{
           $title = $_POST['title'];
           $body = $_POST['body'];
           $published = isset($_POST['published']) ? 1 : 0 ;
       }   
}

if(isset($_POST['update-post'])){

    $errors= validateupdate($_POST);
    
    if(!empty(($_FILES['image']['name'])))
     {
        $image_name = time().'_' . $_FILES['image']['name'];
        $destination = ROOT_PATH . "/img/" . $image_name;

         $result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);
        
         if ($result) {
                 $_POST['image'] = $image_name;
    
         } else {
            array_push($errors, "Failed to updoad image");
         }
         

     }else{
         array_push($errors, "post image required");

     }
     if(count($errors) === 0)
     {

      $id = $_POST['id']; 
      unset($_POST['update-post'] , $_POST['id']);
      $_POST['user_id'] = 1;
      $_POST['published'] = isset($_POST['published']) ? 1 : 0;
      $_POST['body'] = htmlentities($_POST['body']);

      $post_id = update($table, $id, $_POST);
      $_SESSION['message'] = "post updated successfully";
      $_SESSION['type'] = "success";
      header("location: " . BASE_URL . "/admin/post/index.php");
      exit();
     }
     else{
         $title = $_POST['title'];
         $body = $_POST['body'];
         $published = isset($_POST['published']) ? 1 : 0 ;
     }   

}


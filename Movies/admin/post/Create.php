<?php include("../../path.php");?>
<?php include(ROOT_PATH . "/App/controllers/post.php");?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/admin.css" >
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Sen:wght@400;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <title>Addmin</title>
</head>

<body >
    <div class="navbar">
        <div class="navbar-container">
            <div class="logo-container">
                <h1 class="logo">Local Theater</h1>
            </div>

            <div class="profile-container">
                <img class="profile-picture" src="../../img/profile.jpg" alt="">
                <div class="profile-text-container">
                   <span class="profile-text"><?php echo $_SESSION['username'];?>
                    <a href="../../logout.php" class="sing-up" >logout</a>
                    <a href="../../index.php" class= "sing-up" >Public</a>
                    </span>
                </div>
            </div>
        </div>
    </div>
    
    <div class="admin-wrapper">

        <div class="Left-side-bar">
           <ul class="sidbar-item">
              <li><a href="index.php">Post</a></li>
              <li><a href="../coment/index.php">Commemt</a></li>
              <li><a href="../users/index.php">User</a></li>
           </ul>
        </div>

        <div class="addmin-contant">
            <div class="button-group">
                <a href="index.php" class="featured-button">manage-post</a>
            
       
        <div class="comtent" >
            <h2 class="page-title">Create Post</h2>
            
               <div class="msg_error"><?php include(ROOT_PATH . '/app/helpers/formErros.php');?></div>
             

            <form action="Create.php" method="post" enctype="multipart/form-data">
            
                <div>
                    <label>Title</label>
                    <input type="text" name="title" value= "<?php echo $title ?>"class="text-input"> 
                </div>
                <div>
                    <label>Body</label>
                    
                    <textarea cols="130" rows="20" name="body" id="body"><?php echo htmlspecialchars($body) ?></textarea>
                </div> 
                <div>
                    <label>Image</label>
                    <input type="file" name="image" class="text-input">
                    
                </div> 
            </div> 
            <div>
                <?php if(empty($published)):?>
                <label>
                    <input type="checkbox" name="published"> 
                     publish
                </label>
                <?php else: ?>
                 <label>
                    <input type="checkbox" name="published" checked> 
                     publish
                </label>  
                <?php endif;?>

                
            </div>
           <br>
            <div class="button-group">
            <button type="submit" name="add-post" class="featured-button"> add post</button>
            
            </div>
           </form>
         </div>            
     </div>
 
  <script src="https://cdn.ckeditor.com/ckeditor5/30.0.0/classic/ckeditor.js"></script>
  <script src="../../app.js"></script>
</body>

</html>
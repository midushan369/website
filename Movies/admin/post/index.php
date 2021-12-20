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
                <a href="Create.php" class="featured-button">Add-post</a>
            </div>
       
        <div class="comtent">
            <h2 class="page-title">Magange Post</h2>
              <h3 class ="msg_error">
                  <?php include(ROOT_PATH . "/app/include/messages.php"); ?>
              </h3>
               

            <table>
                 <thead>
                     <th>nomber</th>
                      <th>Title</th>
                     <th colspan="3">Action</th>
                 </thead>
                 <tbody>

                <?php foreach ($post as $key => $posts): ?>
                      <tr>
                         <td><?php echo $key + 1; ?></td>
                         <td><?php echo $posts['title']; ?></td>
                         <td><a href="edit.php?id=<?php echo $posts['id'];?>"class="Edit">Edit</a></td>
                         <td><a href="edit.php?delete_id=<?php echo $posts['id'];?>"class="Delete">Delete</a></td>
                         <?php if($posts['published']):?>
                          <td><a  href="edit.php?published=0&p_id=<?php echo $posts['id']; ?>"class="publish">unpublish</a></td>  
                         <?php else: ?>
                         <td><a href="edit.php?published=1&p_id=<?php echo $posts['id'] ?>"class="publish">publish</a></td>  
                         <?php endif; ?>
                     </tr>
                     <?php endforeach ;?>
                 </tbody>
             </table> 
         </div>
     </div>
  </div>
</body>
</html>
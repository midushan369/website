
<?php include("../../path.php");?>
<?php include(ROOT_PATH . "/App/controllers/comment.php");?>

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
              <li><a href="../post/index.php">Post</a></li>
              <li><a href="index.php">Commemt</a></li>
              <li><a href="../users/index.php">User</a></li>
           </ul>
        </div>

        <div class="addmin-contant">
            <div class="button-group">
                <a href="index.php" class="featured-button">Manage-Comment</a>
            </div>
       
        <div class="comtent">
            <h2 class="page-title">Magange Comment</h2>
            <table>
                 <thead>
                     <th>nomber</th>
                     <th>user_id</th>
                     <th>Name</th>
                     <th>Email</th>
                     <th>comment</th>
                     <th colspan="1">Action</th>
                 </thead>
                 <?php foreach ($comment as $key => $comments): ?>
                 <tbody>
                      <tr>
                      
                        <td><?php echo $key + 1; ?></td>
                        <td><?php echo $comments['userid']; ?></td>
                         <td><?php echo $comments['name']; ?></td>
                         <td><?php echo $comments['email']; ?></td>
                         <td><?php echo $comments['comment']; ?></td>
                         <td><a href="index.php?id=<?php echo $comments['id'];?>"class="Delete">Delete</a></td>
                       
                     </tr>
                 </tbody>
                 <?php endforeach ;?> 
             </table> 
                 
         </div>
     </div>
  </div>
</body>

</html>
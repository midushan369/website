<?php include("../../path.php");?>
<?php include(ROOT_PATH . "/App/controllers/user.php");?>

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
              <li><a href="../coment/index.php">Commemt</a></li>
              <li><a href="index.php">User</a></li>
           </ul>
        </div>

        <div class="addmin-contant">
            <div class="button-group">
                <a href="../../register.php" class="featured-button">Add-user</a>
                <a href="index.php" class="featured-button">Manage-user</a>
            
       
        <div class="comtent">
            <h2 class="page-title">user</h2>
            <table>
                 <thead>
                     <th>number</th>
                      <th>username</th>
                      <th>Email</th>
                     <th colspan="2">Action</th>
                 </thead>
                 <tbody>

                 <?php foreach ($user as $key => $users): ?>
                      <tr>
                         <td><?php echo $key + 1; ?></td>
                         <td><?php echo $users['username']; ?></td>
                         <td><?php echo $users['Email']; ?></td>
                         <td><a href="edit.php?id=<?php echo $users['id']; ?>"class="Delete">Delete</a></td>
                         <?php if($users['admin']):?>
                          <td><a  href="edit.php?admin=0&id=<?php echo $users['id']; ?>"class="unpublish">user</a></td>  
                         <?php else: ?>
                         <td><a href="edit.php?admin=1&id=<?php echo $users['id'] ?>"class="publish">admin-user</a></td>  
                         <?php endif; ?>
                     </tr>
                     <?php endforeach ;?>   
                 </tbody>
             </table>
          </div> 
        </div>
     </div>
  </div>
</body>

</html>
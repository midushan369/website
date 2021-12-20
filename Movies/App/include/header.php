<?php include("path.php");
include(ROOT_PATH . "/App/controllers/user.php");
?>

<!DOCTYPE html>

<html lang="en">
<div class="navbar">
        <div class="navbar-container">
            <div class="logo-container">
                <h1 class="logo">Local Theater</h1>
            </div>
            <div class="menu-container">
                <ul class="menu-list">
                    <li><a href="index.php" class="menu-list-item active">Home</a></li>
                    <li><a href="movies.php" class="menu-list-item">Movies</a></li>
                    <li><a href="Genres.php" class="menu-list-item">Genres</a></li>
                </ul>
            </div>
            <div class="profile-container">
                <img class="profile-picture" src="img/profile.jpg" alt="">
                <div class="profile-text-container">
                <?php if(isset($_SESSION['type'])):?>
                    <span class="profile-text"><?php echo $_SESSION['username'];?>
                    <?php endif; ?> 

                    <?php if(!isset($_SESSION['type'])):?>
                    <span class="profile-text">profile
                    <?php endif; ?>

                    <i class="fas fa-caret-down"></i>

                    <ul>
                    <?php if(isset($_SESSION['type'])) :?>
                        
                              <?php if($_SESSION['admin']):?>
                                 <li class="menu-list-item"><a href="admin/coment/index.php" class="menu-list-item">Dashboard</a></li>
                               <?php endif; ?>
                               <li><a href="logout.php" class="menu-list-item">logout</a></li>   
                      <?php endif; ?> 

                      <?php if(!isset($_SESSION['type'])):?>
                        <li class="menu-list-item"><a href="register.php" class="menu-list-item">singup</a></li>
                       <?php endif; ?>

                       <?php if(!isset($_SESSION['type'])):?>
                        <li class="menu-list-item" ><a href="login.php" class="menu-list-item">singin</a></li> 
                       <?php endif; ?> 

                    </ul>  
                </div>
                
            </div>

            

        </div>
    </div>
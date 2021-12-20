<?php  

if(isset($_COOKIE['message']))
{
    echo "<script>alert('wellcomeback.')</script>";

}
else
{
    $exp = time() + (60*60*60*60);
setcookie("message","hello", $exp);
echo "<script>alert('Cookie added successfully.')</script>";
}


?>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Sen:wght@400;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <title>Movie Design</title>
</head>

<body>
    <?php include("App/include/header.php");?>
    <div class="sidebar">
        <i class="left-menu-icon fas fa-search"></i>
        <i class="left-menu-icon fas fa-home"></i>
        <i class="left-menu-icon fas fa-users"></i>
        <i class="left-menu-icon fas fa-bookmark"></i>
        <i class="left-menu-icon fas fa-tv"></i>
        <i class="left-menu-icon fas fa-hourglass-start"></i>
        <i class="left-menu-icon fas fa-shopping-cart"></i>
    </div>

    
    <div class="container">
        <div class="content-container">
            <div class="featured-content"
                style="background: linear-gradient(to bottom, rgba(0,0,0,0), #151515), url('img/f-1.jpg');">
                <img class="featured-title" src="img/f-t-1.png" alt="">
                <p class="featured-desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iusto illo dolor
                    deserunt nam assumenda ipsa eligendi dolore, ipsum id fugiat quo enim impedit, laboriosam omnis
                    minima voluptatibus incidunt. Accusamus, provident.</p>
                    <?php if(isset($_SESSION['type'])) :?>  
                    <?php if($_SESSION['type'] ==='success') :?>   
                        <a  href="Comment/index.php" class="featured-button">Comment</a>
                    <?php endif; ?>
                    <?php endif; ?>
            </div>

         <!-- movie list new -->

            <div class="movie-list-container">
                <h1 class="movie-list-title">NEW RELEASES</h1>
                 <div class="movie-list-wrapper">
                  <?php $pots = selectAll('post',['published' => 1] );?>
                    <div class="movie-list"> 
                      <?php foreach ($pots as $post): ?>
            
                        <div class="movie-list-item">
                            <img src="<?php echo BASE_URL ."/img/". $post['image'];?>" class="movie-list-item-img"  alt="">
                            <span class="movie-list-item-title"><?php echo $post['title']; ?></span>
                               <p class="movie-list-item-desc"><?php echo $post['body']; ?></p>
                                <?php include("App/include/coment.php");?> 
                            </div>

                       <?php endforeach; ?>
                    </div>

                    <i class="fas fa-chevron-right arrow"></i>
                </div>
            </div>

         <!-- movie list new -->

            <div class="movie-list-container">
                <h1 class="movie-list-title">popular</h1>
                <div class="movie-list-wrapper">
                <?php $pots = selectAll('post',['published' => 1] );?>
                   <div class="movie-list">

                       <?php foreach ($pots as $post): ?>
                      
                        <div class="movie-list-item">
                            <img src="<?php echo BASE_URL ."/img/". $post['image'];?>" class="movie-list-item-img"  alt="">
                            <span class="movie-list-item-title"><?php echo $post['title']; ?></span>
                              <p class="movie-list-item-desc"><?php echo $post['body']; ?></p>
                                <?php include("App/include/coment.php");?> 
                            </div>
                          <?php endforeach; ?>
                    </div>
                    <i class="fas fa-chevron-right arrow"></i>
                </div>
            </div>

          

            <div class="featured-content"
                style="background: linear-gradient(to bottom, rgba(0,0,0,0), #151515), url('img/f-2.jpg');">
                <img class="featured-title" src="img/f-t-2.png" alt="">
                <p class="featured-desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iusto illo dolor
                    deserunt nam assumenda ipsa eligendi dolore, ipsum id fugiat quo enim impedit, laboriosam omnis
                    minima voluptatibus incidunt. Accusamus, provident.</p>
                    <?php if(isset($_SESSION['type'])) :?>  
                    <?php if($_SESSION['type'] ==='success') :?>   
                        <a  href="Comment/index.php" class="featured-button">Comment</a>
                    <?php endif; ?>
                    <?php endif; ?>
            </div>

          <!-- movie list new -->

            <div class="movie-list-container">
                <h1 class="movie-list-title">up comeing</h1>
                <div class="movie-list-wrapper">
                <?php $pots = selectAll('post',['published' => 1] );?>
                    <div class="movie-list">

                    <?php foreach ($pots as $post): ?>
                        <div class="movie-list-item">
                            <img src="<?php echo BASE_URL ."/img/". $post['image'];?>" class="movie-list-item-img"  alt="">
                            <span class="movie-list-item-title"><?php echo $post['title']; ?></span>
                              <p class="movie-list-item-desc"><?php echo $post['body']; ?></p>
                                <?php include("App/include/coment.php");?> 
                            </div>
                    <?php endforeach; ?>
                    </div>
                    <i class="fas fa-chevron-right arrow"></i>
                </div>
            </div>

         <!-- movie list new -->
         <div class="movie-list-container">
                <h1 class="movie-list-title">up comeing</h1>
                <div class="movie-list-wrapper">
                <?php $pots = selectAll('post',['published' => 1] );?>
                    <div class="movie-list">

                    <?php foreach ($pots as $post): ?>
                        <div class="movie-list-item">
                            <img src="<?php echo BASE_URL ."/img/". $post['image'];?>" class="movie-list-item-img"  alt="">
                            <span class="movie-list-item-title"><?php echo $post['title']; ?></span>
                              <p class="movie-list-item-desc"><?php echo $post['body']; ?></p>
                                <?php include("App/include/coment.php");?> 
                            </div>
                    <?php endforeach; ?>
                    </div>
                    <i class="fas fa-chevron-right arrow"></i>
                </div>
            </div>

        </div>
         <!-- footer -->


      <div class="footer">
        <div class="footer-content">
            <div class="footer-section about">
             <h1 class="logo">Local Theater</h1> <br>
             <p>we show the movies you need to watch befor you die. after watching you can die.
                 without regret.
             </p>
             <br>
             <div class="contact">
                 <samp><i class="fas fa-phone"></i>&nbsp; 123 -4564-3789</samp> 
                 <samp><i class="fas fa-envelope"></i>&nbsp; Localtherarter@gaill.com</samp>
             </div>
              <div class="socials">
                 <a href="#"><i class="fab fa-facebook"></i></a>
                 <a href="#"><i class="fab fa-instagram"></i></a>
                 <a href="#"><i class="fab fa-twitter"></i></a>
                 <a href="#"><i class="fab fa-youtube"></i></a>
              </div>
            </div>
            <div class="footer-section links">
                <h2>Quick links</h2>
                <br>
                 <ul>
                     <a href="#"><li>Events</li></a>
                     <a href="#"><li>team</li></a>
                     <a href="#"><li>movies</li></a>
                     <a href="#"><li>fanbase</li></a>
                     <a href="#"><li>Popularlist</li></a>
                     <a href="#"><li>movie marothon</li></a>
                     <a href="#"><li>watch from home</li></a>
                 </ul>
            </div>
            <div class="footer-section contact-from">
                <h2>contact us </h2>
                <br>
                <form action="index.html" method="post">
                 <input type="email" name="email" class="text-input contact-input" placeholder="your Email address...">
                <textarea name="" id="" cols="39" rows="7" class="text-input contact-input" placeholder="your massage.."></textarea>
                 <button type="submit" class="featured-button">
                    send
                    </button>   
                </form>
            </div>
            </div>
             <div class="footer-bottom">
             &copy; Local-Theater.com
       </div>
      <script src="app.js"></script>
    </body>
</html>
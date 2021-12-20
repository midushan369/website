<div class="measge">
            <?php if(isset($_SESSION['message'])):?>
           <div cass="msg <?php echo $_SESSION['type'];?>">
            <li> <?echo $_SESSION['message'];?></li>
          </div>
           <?php endif; ?>
       </div>
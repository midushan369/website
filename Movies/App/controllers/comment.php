<?php

include(ROOT_PATH ."/App/database/db.php");

$table ='comments';

$comment = selectAll($table);

if(isset($_GET['id']))
{
   $count = delete($table, $_GET['id']);
   $_SESSION['message'] = "post deleted successfully";
   $_SESSION['type'] = "success";
   header("location: " . BASE_URL . "/admin/coment/index.php");
   exit();

}
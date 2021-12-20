<?php

$exp = time() + (60*60*30);
setcookie("message" ,"user visited this local theater", $exp);

echo "<script>alert('Cookie added successfully.')</script>";
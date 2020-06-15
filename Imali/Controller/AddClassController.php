<?php
 
  session_start();
   $_SESSION['classyes']="success";
   header("Location: ../View/AddClass.php");
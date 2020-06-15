<?php
 
  session_start();
   $_SESSION['staffyes']="success";
   header("Location: ../View/AddStaff.php");
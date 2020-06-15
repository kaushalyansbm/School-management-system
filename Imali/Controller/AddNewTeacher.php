<?php
 
  session_start();
   $_SESSION['teacheryes']="success";
   header("Location: ../View/AddTeacher.php");
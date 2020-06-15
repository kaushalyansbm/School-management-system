<?php
 
  require'../Model/Dao.php'; 
      
  $st=new Student();

  $st->setContactNumber($_POST["contactnumber"]);
  $st->setDob($_POST["dob"]);
  $st->setEmail($_POST["email"]);
  $st->setNamewithininitial($_POST["iname"]);
  $st->setUsername($_POST["uname"]);
  $st->setFullname($_POST["fullname"]);
  $st->setAddress($_POST["address"]);
  $st->setPassword($_POST["pw"]);
  $st->setAcedemicyear($_POST["academicyear"]);

  $da=new Dao;
  if($da->insertNewStudent($st)){
  
   header("Location: ../View/AddStudents.php?status=success");
  }else{
  	 header("Location: ../View/AddStudents.php?status=fail");
  }
  





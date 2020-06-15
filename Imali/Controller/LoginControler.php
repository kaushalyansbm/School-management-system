<?php
 include'../Model/Dao.php';
  session_start();
 


   $u_id=$_POST['userid'];
   $u_password=$_POST['userpassword'];
 
      $ob=new Dao();
           if($ob->retrieveAdmin($u_id,$u_password)==1)
            {
               $_SESSION['adminid']= $u_id;
               header("Location: ../View/AdminProfile.php?Login=success");
               
            }else{

              header("Location: ../index.php?LoginO=fail");

            }






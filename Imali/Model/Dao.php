<?php


    session_start();
    include 'Student.php';
    include 'Teacher.php';
class Dao{
  private $conn;
  private $sql;
  private $result;
  private $ar=array();
  private $row;
  private $imD;

   public function __construct()
   {
                       $this->conn=mysqli_connect("localhost","root","kaushalya","tcc");
                       if($this->conn)
                       {
                            echo"connected";
                       }else
                       {
                            echo"not connected";     
                       }     

   } 

   public function insertNewStudent($StudentO)
   {
                  $this->sql="insert into student(id,email,password,Address,dob,contactnumber,fullname,acedemicyear,username,Namewithinitial) values('','".$StudentO->getEmail()."','".$StudentO->getPassword()."','".$StudentO->getAddress()."','".$StudentO->getDob()."','".$StudentO->getContactNumber()."','".$StudentO->getFullname()."','".$StudentO->getAcedemicyear()."','".$StudentO->getUsername()."','".$StudentO->getNamewithininitial()."');";
                  $query=mysqli_query($this->conn,$this->sql);
                  if($query){
                          $_SESSION['uname']=$StudentO->getUsername();
                          return 1;


                             }
                  else{
                          return 0;

                      }

   }
   public function insertNewStudentPic($Student)
   {      
                $this->imD=addslashes(file_get_contents($Student->getImageName()));
                $query="UPDATE student SET imageN = '$this->imD' WHERE email='".$Student->getEmail()."';";
                if(mysqli_query($this->conn,$query)){

                  echo "succes im";
                }else{
                  echo "fail im";
                
                }
   }
   public function insertNewTeacher($Teacher)
   {
                  $this->sql="insert into teacher(id,nic,email,Firstname,lastname,contactnumber,eq,we,address,dob) values('','".$Teacher->getNic()."','".$Teacher->getEmail()."','".$Teacher->getFirstName()."','".$Teacher->getLastName()."','".$Teacher->getContactNumber()."','".$Teacher->getEq()."','".$Teacher->getWe()."','".$Teacher->getAddress()."','".$Teacher->getDob()."');";
                  $query=mysqli_query($this->conn,$this->sql);
                  if($query){
                          echo'success';
                             }
                  else{
                          echo'failed';


                      }

   }

   

   public function insertNewTeacherPic($data1,$data2)
   {
                  $this->sql="insert into student values('','".$data1."','".$data2."');";
                  $query=mysqli_query($this->conn,$this->sql);
                  if($query){
                          echo'success';
                             }
                  else{
                          echo'failed';


                      }

   }
   public function removeOwner($data1,$data2)
   {
                  $this->sql="delete from Owner where id='".$data1."' and username='".$data2."';";
                  $query=mysqli_query($this->conn,$this->sql);
                  if($query){
                          echo'success d';
                             }
                  else{
                          echo'failed d';


                      }

   }
   public function updateOwner($data1,$data2)
   {
                  $this->sql="delete from Owner where id='".$data1."' and username='".$data2."';";
                  $query=mysqli_query($this->conn,$this->sql);
                  if($query){
                          echo'success d';
                             }
                  else{
                          echo'failed d';


                 }
   }
   
   public function retrieveAdmin($data1,$data2)
   {
                  $this->sql="select * from Admin  where nic='".$data1."' and password='".$data2."' ;";
                  
                  $this->result=mysqli_query($this->conn,$this->sql);
                  while($this->row=mysqli_fetch_assoc($this->result))
                  {
                                  $_SESSION['admin']= $this->row['NIC'];
                                  return 1;
                  }
                                  return 0;

                          
    }
    public function retrieveStudent($data1,$data2)
   {
                  $this->sql="select * from student  where id='".$data1."' and password='".$data2."' ;";
                  
                  $this->result=mysqli_query($this->conn,$this->sql);
                  while($this->row=mysqli_fetch_assoc($this->result))
                  {
                                 $_SESSION['student']=  $this->row['Firstname'];

                                 return 1;
                  }
                                  return 0;

                          
    }
      public function retrieveTeacher($data1,$data2)
   {
                  $this->sql="select * from teacher  where nic='".$data1."' and password='".$data2."' ;";
                  
                  $this->result=mysqli_query($this->conn,$this->sql);
                  while($this->row=mysqli_fetch_assoc($this->result))
                  {
                                  $_SESSION['teacher']=  $this->row['Firstname'];
                                  return 1;
                  }
                                  return 0;

                          
    }  
  }
   












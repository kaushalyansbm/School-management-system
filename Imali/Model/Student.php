<?php


      class Student
 {     
       private $imageN;
       private $contactNumber;
       private $dob; 
       private $email;
       private $Namewithininitial;
       private $username;
       private $fullname;
       private $Address;
 	   private $password;
       private $acedemicyear;
       
    

    public function setImageN($imageName)
 	{
            $this->imageN=$imageName;
 	}
 	
 	public function getImageN()
 	{
 	        return $this->imageN;
 	}
 	
    public function setContactNumber($contactNumber)
 	{
            $this->contactNumber=$contactNumber;
 	}
 	
 	public function getContactNumber()
 	{
 	        return $this->contactNumber;
 	}
 	
    public function setDob($dob)
 	{
            $this->dob=$dob;
 	}
 	
 	public function getDob()
 	{
 	        return $this->dob;
 	}
 	

    public function setEmail($email)
 	{
            $this->email=$email;
 	}
 	
 	public function getEmail()
 	{
 	        return $this->email;
 	}
 	
    public function setNamewithininitial($Namewithininitial)
 	{
            $this->Namewithininitial=$Namewithininitial;
 	}
 	
 	public function getNamewithininitial()
 	{
 	        return $this->Namewithininitial;
 	}
 	
    public function setUsername($username)
 	{
            $this->username=$username;
 	}
 	public function getUsername()
    {
            return $this->username;
    }
    
 	public function setFullname($fullname)
 	{
            $this->fullname=$fullname;
 	}
 	
 	public function getFullname()
 	{
 	        return $this->fullname;
 	}
 	public function setAddress($address)
 	{
            $this->address=$address;
 	}
 	
 	public function getAddress()
 	{
 	        return $this->address;
 	}
 	
 	
 	public function setPassword($password)
 	{
 		     $this->password=$password;
 	}
    
    public function getPassword()
 	{
 	        return $this->password;
 		
 	}


    public function setAcedemicyear($acedemicyear)
    {
            $this->acedemicyear=$acedemicyear;
    }
    
    public function getAcedemicyear()
    {
            return $this->acedemicyear;
    }
 }
 ?>
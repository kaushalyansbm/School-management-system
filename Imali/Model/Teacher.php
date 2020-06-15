<?php
 /**
  * 
  */
 class Teacher
 {
 	   private $nic;
 	   private $firstname;
 	   private $lastname;
 	   private $eq;
 	   private $wq;
 	   private $address;
 	   private $dob;
 	   private $contactNumber;
 	   private $email;
 	   private $password;
       private $imageName;
       private $fad;
 
 
    public function setFad($fad)
 	{
            $this->fad=$fad;
 	}
 	
 	public function getFad()
 	{
 	        return $this->fad;
 	}
    public function setImageName($imageName)
 	{
            $this->imageName=$imageName;
 	}
 	
 	public function getImageName()
 	{
 	        return $this->imageName;
 	}
 
    public function setEq($eq)
 	{
            $this->eq=$eq;
 	}
 	
 	public function getEq()
 	{
 	        return $this->eq;
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
 	
    public function setWe($we)
 	{
            $this->we=$we;
 	}
 	
 	public function getWe()
 	{
 	        return $this->we;
 	}
 	
    public function setFirstName($firstName)
 	{
            $this->firstName=$firstName;
 	}
 	
 	public function getFirstName()
 	{
 	        return $this->firstName;
 	}
 	public function setLastName($lastName)
 	{
            $this->lastName=$lastName;
 	}
 	
 	public function getLastName()
 	{
 	        return $this->lastName;
 	}
 	public function setAddress($address)
 	{
            $this->address=$address;
 	}
 	
 	public function getAddress()
 	{
 	        return $this->address;
 	}
 	
 	
 	
 	public function setNic($nic)
 	{
            $this->nic=$nic;
 	}
 	
 	public function getNic()
 	{
 	        return $this->nic;
 	}
 	
 	public function setPassword($password)
 	{
 		     $this->password=$password;
 	}
    
    public function getPassword()
 	{
 	        return $this->password;
 		
 	}
       /////////////////////////

 	

 }
 ?>
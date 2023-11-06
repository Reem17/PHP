<?php
include_once "database.php";
include_once "operations.php";
class professor extends database implements operations
{
    var $pemail; var $ppw; var $pfname; var $plname; var $pphone; var $fdno;
    ///////////////////////////////////////////////////////////////////////////get
    public function getemail() 
    {
        return $this->pemail;
    }
    public function getpw() 
    {
        return $this->ppw;
    }
    public function getfname() 
    {
        return $this->pfname;
    }
    public function getlname() 
    {
        return $this->plname;
    }
    public function getphone() 
    {
        return $this->pphone;
    }
    public function getfdno() 
    {
        return $this->fdno;
    }
    ///////////////////////////////////////////////////////////////////////////set
    public function setemail($input) 
    {
        $this->pemail= $input ;
    }
    public function setpw($input)  
    {
        $this->ppw= $input ;
    }
    public function setfname($input) 
    {
        $this->pfname= $input ;
    }
    public function setlname($input) 
    {
        $this->plname= $input ;
    }
    public function setphone($input) 
    {
        $this->pphone= $input ;
    }
    public function setfdno($input) 
    {
        $this->fdno= $input ;
    }
    ////////////////////////////////////////////////////////////////////////////operations

    public function insert()
    {
        $ins= "insert into professor (pemail, ppassword, pfname, plname, pphone) values('".$this->getemail()."','".$this->getpw()."','".$this->getfname()."','".$this->getlname()."','".$this->getphone()."')";
        return parent:: runDML($ins);
    }
    public function update()
    {
        $update= parent::runDML("update professor set ppassword='".$this->getpw()."' where pemail='".$this->getemail()."'");
        return $update;
    }
    public function delete()
    {
        return parent::runDML("delete from professor where pemail='".$this->getemail()."'");
    }
    public function selectall()
    {
        $selectstatement= parent::select("select * from professor");
        return $selectstatement;
    }
	public function Login()
    {
	   $log= parent::select("select * from professor where pemail='".$this->getemail()."' and ppassword='".$this->getpw()."'");
       return $log;
    }
    public function forgetpass()
    {
         $log=parent::select("select * from professor where pemail='".$this->getemail()."'");
         return $log;
    }
    public function checkbyemail()
    {
        $log=parent::select("select * from professor where pemail='".$this->getemail()."'");
        return $log;
    }
    public function updateall()
    {
    return parent::runDML("update professor set pfname='".$this->getfname()."', plname='".$this->getlname()."', pphone='".$this->getphone()."' where pemail='".$this->getemail()."'");
    }
    public function selectdatabyfdno()
    {
        $selectstatement= parent::select("select * from professor where fdno='".$this->getfdno()."'");
        return $selectstatement;
    }
   
}

?>
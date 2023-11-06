<?php
include_once "database.php";
include_once "operations.php";
class student extends database implements operations
{
  var $sid;  var $sqr;  var $sfname;  var $smname;  var $slname;  var $semail;  var $sphone;  var $slevel;  var $sgpno;  var $ssecno;  var $sfno; var $randomcode;
    ///////////////////////////////////////////////////////////////////////////get
    public function getid() 
    {
        return $this->sid;
    }
    public function getqr() 
    {
        return $this->sqr;
    }
    public function getfname() 
    {
        return $this->sfname;
    }
    public function getmname() 
    {
        return $this->smname;
    }
    public function getlname() 
    {
        return $this->slname;
    }
    public function getemail() 
    {
        return $this->semail;
    }
    public function getphone() 
    {
        return $this->sphone;                    
    }
    public function getlevel() 
    {
        return $this->slevel;
    }
    public function getgpno() 
    {
        return $this->sgpno;
    }
    public function getsecno()
    {
        return $this->ssecno;
    }
    public function getfno() 
    {
        return $this->sfno;
    }
    ///////////////////////////////////////////////////////////////////////////set
    public function setid($input) 
    {
        $this->sid= $input ;
    }
    public function setqr()
    {
        $randomcode= rand(1000,5000);
        $scodes= $this->selectforscode();
        while($fetcherscode = mysqli_fetch_assoc($scodes))
        {
            if ($randomcode==$fetcherscode)
            {
                $randomcode= rand(1000,5000);
            }else{
                // func to 
                $this->sqr= $randomcode ;  
            }
        }
    }
    public function setqrfrominput($input)
    {
        $this->sqr= $input ;

    }
    public function setfname($input) 
    {
        $this->sfname= $input ;
    }
    public function setmname($input) 
    {
        $this->smname= $input ;
    }
    public function setlname($input) 
    {
        $this->slname= $input ;
    }
    public function setemail($input) 
    {
        $this->semail= $input ;
    }
    public function setphone($input) 
    {
        $this->sphone= $input ;    
    }
    public function setlevel($s) 
    {
        $this->slevel= $s;
    }
    public function setgpno($input) 
    {
        $this->sgpno= $input ;
    }
    public function setsecno($input) 
    {
        $this->ssecno= $input ;
    }
    public function setfno($input) 
    {
        $this->sfno= $input ;
    }
    ////////////////////////////////////////////////////////////////////////////operations      
    function selectforscode()
    {
        $selectscode= parent::select("select scode from student");
        return $selectscode;
    }        
    public function insert()                   
    {
        $ins= "insert into student (sid, scode, sfname, smname, slname, semail, sphone, collegelevel, secno, fno) values (Default, '".$this->getqr()."', '".$this->getfname()."','".$this->getmname()."','".$this->getlname()."','".$this->getemail()."','".$this->getphone()."','".$this->getlevel()."','".$this->getsecno()."','".$this->getfno()."')";
        return parent:: runDML($ins);
    }
    public function update()
    {
        $this->setqr();
        $update= parent::runDML("update student set scode='".$this->getqr()."' where semail='".$this->getemail()."'");
        return $update;
    }
    public function delete()
    {
        return parent::runDML("delete from student where sid='".$this->getid()."'");
    }
    public function selectall()
    {
        $selectstatement= parent::select("select * from student");
        return $selectstatement;
    }
	public function Login()
    {
	   $log=parent::select("select * from student where sfname='".$this->getfname()."' and scode='".$this->getqr()."'");
	   return $log;
    }
    public function forgetcode()
    {
         $log=parent::select("select * from student where semail='".$this->getemail()."'");
         return $log;
    }
    public function checkbyid()
    {
         $log=parent::select("select * from student where sid='".$this->getid()."'");
         return $log;
    }
    public function updateall()
    {
        $update= parent::runDML("update student set sfname='".$this->getfname()."', smname='".$this->getmname()."', slname='".$this->getlname()."', semail='".$this->getemail()."', sphone='".$this->getphone()."' where sid='".$this->getid()."'");
        return $update;
    }
    public function updategp()                   
    {
        $update= "update student set gpno = '".$this->getgpno()."' where sid='".$this->getid()."'";
        return parent:: runDML($update);
    }
    public function checknoofmembers()
    {
         $log=parent::select("select * from student where gpno='".$this->getgpno()."'");
         return $log;
    }
}
?>
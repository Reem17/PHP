<?php

include_once "database.php";
include_once "operations.php";
class field extends database implements operations
{
    var $fdno;  var $fdname;  var $secno;  var $fno;  var $fddetails;   var $fdreq;  var $profemail;
    ///////////////////////////////////////////////////////////////////////////get
    public function getfdno() 
    {
        return $this->fdno;
    }
    public function getfdname() 
    {
        return $this->fdname;
    }
    public function getsecno() 
    {
        return $this->secno;
    }
    public function getfno() 
    {
        return $this->fno;
    }
    public function getdetails() 
    {
        return $this->fddetails;
    }
    public function getreq() 
    {
        return $this->fdreq;
    } 
    public function getprofemail() 
    {
        return $this->profemail;
    }
    ///////////////////////////////////////////////////////////////////////////set
    public function setfdno($input) 
    {
        $this->fdno= $input ;
    }
    public function setfdname($input) 
    {
        $this->fdname= $input ;
    }
    public function setsecno($input) 
    {
        $this->secno= $input ;
    }
    public function setfno($input) 
    {
        $this->fno= $input ;
    }
    public function setdetails($input) 
    {
        $this->fddetails= $input ;
    }
    public function setreq($input) 
    {
        $this->fdreq= $input ;
    }
    public function setprofemail($input) 
    {
        $this->profemail= $input ;
    }
    ////////////////////////////////////////////////////////////////////////////operations
    public function insert()
    {

    }
    public function update()
    {

    }
    public function delete()
    {

    }
    public function selectall()
    {
        $selectstatement= parent::select("select * from field");
        return $selectstatement;
    }
    public function selectbyfdno()
    {
        $selectstatement= parent::select("select * from field where fdno= '".$this-> getfdno()."'");
        return $selectstatement;
    }
    public function selectcoursesbyfdno()
    {
        $selectstatement= parent::select("select * from  field_courses where fdno= '".$this-> getfdno()."'");
        return $selectstatement;
    }
    public function selectjobsbyfdno()
    {
        $selectstatement= parent::select("select * from  field_jobs where fdno= '".$this-> getfdno()."'");
        return $selectstatement;
    } 
    public function selectprofsbyfdno()
    {
        $selectstatement= parent::select("select * from  field_profs where fdno= '".$this-> getfdno()."'");
        return $selectstatement;
    }
}
?>
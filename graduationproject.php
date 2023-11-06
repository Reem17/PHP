<?php

include_once "database.php";
include_once "operations.php";
class graduationproject extends database implements operations
{
    var $gpno; var  $gpname; var  $gpdetails; var  $studentid; var $pemail;
    ///////////////////////////////////////////////////////////////////////////get
    public function getgpno() 
    {
        return $this->gpno;
    }
    public function getgpname() 
    {
        return $this->gpname;
    }
    public function getgpdetails() 
    {
        return $this->gpdetails;
    }
    public function getstudentid() 
    {
        return $this->studentid;
    }
    public function getpemail() 
    {
        return $this->pemail;
    }
    ///////////////////////////////////////////////////////////////////////////set
    public function setgpno($input)  
    {
        $this->gpno= $input ;
    }
    public function setgpname($input) 
    {
        $this->gpname= $input ;
    }
    public function setgpdetails($input) 
    {
        $this->gpdetails= $input ;
    }
    public function setstudentid($input) 
    {
        $this->studentid= $input ;
    }
    public function setpemail($input) 
    {
        $this->pemail= $input ;
    }
    ////////////////////////////////////////////////////////////////////////////operations
    public function insert()
    {
        $ins= "insert into graduationproject (gpno, gpname, gpdetail, pemail, studentid) values ('".$this->getgpno()."', '".$this->getgpname()."', '".$this->getgpdetails()."', '".$this->getpemail()."', '".$this->getstudentid()."')";
        return parent:: runDML($ins);
    }
    public function update()
    {

    }
    public function delete()
    {

    }
    public function selectall()
    {
        $selectstatement= parent::select('select * from graduationproject');
        return $selectstatement;
    }
    public function getlastgpno()
    {
        $selectstatement= parent::select('select right(max(gpno), 1) from graduationproject');
        return $selectstatement;
    }
    public function checkbygpno()
    {
        $selectstatement= parent::select("select * from graduationproject where gpno='".$this->getgpno()."'");
        return $selectstatement;
    }
    public function selectgpleader()
    {
        $selectstatement= parent::select("select * from viewgpleader where gpno='".$this->getgpno()."'");
        return $selectstatement;
    }
}

?>
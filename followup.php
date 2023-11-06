<?php

include_once "database.php";
include_once "operations.php";
class followup extends database implements operations
{
    var $fupno;  var $fuptitle;  var $fupdetails;  var $fupdate;  var $sid;
    ///////////////////////////////////////////////////////////////////////////get
    public function getfupno() 
    {
        return $this->fupno;
    }
    public function getfuptitle() 
    {
        return $this->fuptitle;
    }
    public function getfupdetails() 
    {
        return $this->fupdetails;
    }
    public function getfupdate() 
    {
        return $this->fupdate;
    }
    public function getsid() 
    {
        return $this->sid;
    }
    ///////////////////////////////////////////////////////////////////////////set
    public function setfupno($input)            
    {
        $this->fupnono= $input ;
    }
    public function setfuptitle($input) 
    {
        $this->fuptitle= $input ;
    }
    public function setfupdetails($input) 
    {
        $this->fupdetails= $input ;
    }
    public function setfupdate($input) 
    {
        $this->fupdate= $input ;
    }
    public function setsid($input) 
    {
        $this->sid= $input ;
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
        $selectstatement= parent::select("select * from followup");
        return $selectstatement;
    }
}
?>
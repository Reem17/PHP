<?php

include_once "database.php";
include_once "operations.php";
class task extends database implements operations
{
    var $tno;  var $ttitle;  var $tdetails;  var $tdate;  var $gpno;
    ///////////////////////////////////////////////////////////////////////////get
    public function gettno() 
    {
        return $this->tno;
    }
    public function getttitle() 
    {
        return $this->ttitle;
    }
    public function gettdetails() 
    {
        return $this->tdetails;
    }
    public function gettdate() 
    {
        return $this->tdate;
    }
    public function getgpno() 
    {
        return $this->gpno;
    }
    ///////////////////////////////////////////////////////////////////////////set
    public function settno($input) 
    {
        $this->tno= $input ;
    }
    public function setttitle($input) 
    {
        $this->ttitle= $input ;
    }
    public function settdetails($input) 
    {
        $this->tdetails= $input ;
    }
    public function settdate($input) 
    {
        $this->tdate= $input ;
    }
    public function setgpno($input) 
    {
        $this->gpno= $input ;
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
        $selectstatement= parent::select("select * from task");
        return $selectstatement;
    }
}

?>
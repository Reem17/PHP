<?php

include_once "database.php";
include_once "operations.php";
class section extends database implements operations
{
    var $secno;  var $secname;  var $fno; 
    ///////////////////////////////////////////////////////////////////////////get
    public function getsecno() 
    {
        return $this->secno;
    }
    public function getsecname() 
    {
        return $this->secname;
    }
    public function getfno() 
    {
        return $this->fno;
    }
    ///////////////////////////////////////////////////////////////////////////set
    public function setsecno($input) 
    {
        $this->secno= $input ;
    }
    public function setsecname($input) 
    {
        $this->secname= $input ;
    }
    public function setfno($input) 
    {
        $this->fno= $input ;
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
        $selectstatement= parent::select("select * from section");
        return $selectstatement;
    }
    public function selectforfaculty($facno)
    {
        $selectstatement= parent::select("select secname from section where fno=$facno");
        return $selectstatement;
    }
}

?>
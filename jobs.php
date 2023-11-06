<?php

include_once "database.php";
include_once "operations.php";
class jobs extends database implements operations
{
    var $jobno; var $jobtitle; var $fieldno; 
    ///////////////////////////////////////////////////////////////////////////get
    public function getjobno() 
    {
        return $this->jobno;
    }
    public function getjobtitle() 
    {
        return $this->jobtitle;
    }
    public function getfieldno() 
    {
        return $this->fieldno;
    }
    ///////////////////////////////////////////////////////////////////////////set
    public function setjobno($input) 
    {
        $this->jobno= $input ;
    }
    public function setjobtitle($input) 
    {
        $this->jobtitle= $input ;
    }
    public function setfieldno($input) 
    {
        $this->fieldno= $input ;
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
        $selectstatement= parent::select("select * from jobs");
        return $selectstatement;
    }
    public function selectdatafromfno()
    {
        $selectstatement= parent::select("select * from jobs where fdno='".$this->getfieldno()."'");
        return $selectstatement;
    }
}

?>
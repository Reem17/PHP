<?php

include_once "database.php";
include_once "operations.php";
class course extends database implements operations
{
    var $courseno; var $coursename; var $fieldno; 
    ///////////////////////////////////////////////////////////////////////////get
    public function getcourseno() 
    {
        return $this->courseno;
    }
    public function getcoursename() 
    {
        return $this->coursename;
    }
    public function getfieldno() 
    {
        return $this->fieldno;
    }
    ///////////////////////////////////////////////////////////////////////////set
    public function setcourseno($input) 
    {
        $this->courseno= $input ;
    }
    public function setcoursename($input) 
    {
        $this->coursename= $input ;
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
        $selectstatement= parent::select("select * from course");
        return $selectstatement;
    }
    public function selectdatafromfno()
    {
        $selectstatement= parent::select("select * from course where fdno='".$this->getfieldno()."'");
        return $selectstatement;
    }
}

?>
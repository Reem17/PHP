<?php

include_once "database.php";
include_once "operations.php";
class faculty extends database implements operations
{
    var $fno; var $fname; var $fcoordinator; 
    ///////////////////////////////////////////////////////////////////////////get
    public function getfno() 
    {
        return $this->fno;
    }
    public function getfname() 
    {
        return $this->fname;
    }
    public function getfco() 
    {
        return $this->fcoordinator;
    }
    ///////////////////////////////////////////////////////////////////////////set
    public function setfno($input) 
    {
        $this->fno= $input ;
    }
    public function setfname($input) 
    {
        $this->fname= $input ;
    }
    public function setfco($input) 
    {
        $this->fcoordinator= $input ;
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
        $selectstatement= parent::select("select * from faculty");
        return $selectstatement;
    }
    public function selectforfno($inputfname)
    {
        $selectstatement= parent::select("select fno from faculty where fname=$inputfname");
        return $selectstatement;
    }
    public function selectforfname($inputfno)
    {
        $selectstatement= parent::select("select fname from faculty where fno=$inputfno");
        return $selectstatement;
    }
}

?>
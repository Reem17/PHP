<?php

include_once "database.php";
include_once "operations.php";
class prevproj extends database implements operations
{
    var $projno;  var $projtitle; var $projdesc; var $pemail; 
    ///////////////////////////////////////////////////////////////////////////get
    public function getprojno() 
    {
        return $this->projno;
    }
    public function gettitle() 
    {
        return $this->projtitle;
    }
    public function getdesc() 
    {
        return $this->projdesc;
    }
    public function getpemail() 
    {
        return $this->pemail;
    }
    ///////////////////////////////////////////////////////////////////////////set
    public function setprojno($input) 
    {
        $this->projno= $input ;
    }
    public function settitle($input) 
    {
        $this->projtitle= $input ;
    }
    public function setdesc($input) 
    {
        $this->projdesc= $input ;
    }
    public function setpemail($input) 
    {
        $this->pemail= $input ;
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

    }
    public function selectbypemail()
    {
        $selectstatement= parent::select("select * from prevprojects where pemail= '".$this-> getpemail()."' ");
        return $selectstatement;
    }
    public function checkbyprojno()
    {
        $selectstatement= parent::select("select * from prevprojects where projectno= '".$this-> getprojno()."' ");
        return $selectstatement;
    }
}

?>
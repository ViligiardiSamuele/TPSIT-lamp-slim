<?php

/***
* Author: Samule Viligiardi
* Table: voti
* Date: 
*
*
*/


class Voti extends DBObject
{
    //protected attibutes
    protected $id;
    protected $id_alunno;
    protected $voto;

    function __construct(){
        parent::__construct('voti');
    }

    //get methods
    public function getid(){
        return $this->id;
    }

    public function getid_alunno(){
        return $this->id_alunno;
    }

    public function getvoto(){
        return $this->voto;
    }


    //set methods
    public function setid($value){
        $this->id=$value;
    }

    public function setid_alunno($value){
        $this->id_alunno=$value;
    }

    public function setvoto($value){
        $this->voto=$value;
    }


}
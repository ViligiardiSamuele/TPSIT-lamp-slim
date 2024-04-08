<?php

/***
* Author: Samule Viligiardi
* Table: alunni
* Date: 
*
*
*/


class Alunni extends DBObject
{
    //protected attibutes
    protected $id;
    protected $nome;
    protected $cognome;

    function __construct(){
        parent::__construct('alunni');
    }

    //get methods
    public function getid(){
        return $this->id;
    }

    public function getnome(){
        return $this->nome;
    }

    public function getcognome(){
        return $this->cognome;
    }


    //set methods
    public function setid($value){
        $this->id=$value;
    }

    public function setnome($value){
        $this->nome=$value;
    }

    public function setcognome($value){
        $this->cognome=$value;
    }


}
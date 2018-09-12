<?php
namespace App\Http;

class Validation extends SetValidation {

  public $errors;

    public function validate($array){
        array_walk($array,'parent::__construct');
        if(!empty($this->errors)){
            return $this->errors;
        }
    }







}
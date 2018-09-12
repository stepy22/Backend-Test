<?php
namespace App\Http;
use App\Http\SetValidation;
trait Validation {

    public $errors;

    public function validate($array){


        array_walk($array,array(get_class(),'callValidation'));
        if(!empty($this->errors)){
            return $this->errors;
        }
    }

    public function callValidation($value,$key)
    {
        $SetValidation=new SetValidation($value,$key);
        $this->errors[]=$SetValidation->getErrors();
        return $SetValidation;

    }







}
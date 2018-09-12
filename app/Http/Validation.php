<?php
namespace App\Http;
use App\Http\SetValidation;
class Validation extends SetValidation {

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
        $this->errors[]=$SetValidation->errors;
        return $SetValidation;

    }







}
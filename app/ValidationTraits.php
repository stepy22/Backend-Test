<?php
namespace App;
trait ValidationTraits{
    public $errors;

    /*
     * @array array*/
//    trait for all validation, models use this traits
    public function validate($array){

        foreach ($array as $key=>$value){
            if($key=='email'){
                if(!filter_var($value, FILTER_VALIDATE_EMAIL)){
                    $this->errors[]='Ne ispravno unet email';
                }
            }
            if($key=='varch'){
                if (strlen($value) > 20) {
                    $this->errors[]='Mozete uneti do 20 karaktera';
                }
            }
            if($key == 'paswordConfirm'){
                $paswords=explode('/',$value);
                if($paswords[0] != $paswords[1]){
                    $this->errors[]='Paswordi se ne poklapaju';

                }

            }
            if($key == 'max:50'){

                if(strlen($value) > 50){
                    $this->errors[]='Mozete uneti do 50 karaktera';
                }

            }
            if($key == 'max:20'){

                if(strlen($value) > 20){
                    $this->errors[]='Mozete uneti do 20 karaktera';
                }

            }

        }

        if(!empty($this->errors)){
            return $this->errors;
        }
    }
}
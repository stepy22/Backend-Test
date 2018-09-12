<?php
/**
 * Created by PhpStorm.
 * User: vukas
 * Date: 9/12/2018
 * Time: 7:19 PM
 */

namespace app\Http;


class SetValidation
{
    protected $errors;
    public function __construct($key,$value)
    {
        $this->key=$key;
        $this->value=$value;
        $this->set();

    }


    private function ValidateEmail()
    {
        if($this->key=='email'){
            if(!filter_var($this->value, FILTER_VALIDATE_EMAIL)){
                $this->errors[]='Ne ispravno unet email';
            }
        }
    }
    private function ValidateVarchar(){
        if($this->key=='varch'){
            if (strlen($this->value) > 20) {
                $this->errors[]='Mozete uneti do 20 karaktera';
            }
        }
    }

    protected function set(){
        $this->ValidateEmail();
        $this->ValidateVarchar();
    }
    public function getErrors(){

        return $this->errors;
}

}
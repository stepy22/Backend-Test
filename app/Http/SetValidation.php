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
    public function __construct($value,$key)
    {
        $this->key=$key;
        $this->value=$value;
        $this->set();
    }


    private function ValidateEmail()
    {
        if($this->key=='email'){
            if(!filter_var($this->value, FILTER_VALIDATE_EMAIL)){
                $this->errors='Ne ispravno unet email';
            }
        }
    }
    private function ValidateVarchar(){
        if($this->key=='varch'){
            if (strlen($this->value) > 1) {
                $this->errors='Mozete uneti do 20 karaktera';
            }
        }
    }
    private function ValidateNum(){
        if($this->key=='num'){
            if (strlen($this->value) > 1) {
                $this->errors='Mozete uneti broj';
            }
        }
    }

    protected function set(){
        $this->ValidateEmail();
        $this->ValidateVarchar();
        $this->ValidateNum();
    }
    public function getErrors(){

        return $this->errors;
}

}
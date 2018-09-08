<?php
/**
 * Created by PhpStorm.
 * User: vukas
 * Date: 9/8/2018
 * Time: 11:10 AM
 */

namespace App\Models;


use App\Model;
use App\ValidationTraits;

class Auth extends Model
{
    use ValidationTraits;

//    method for register users
    public function register($name, $email, $password)
    {
        try {
            $date = Date('Y-m-d h:i');
            $password = md5($password);
            $sql = "INSERT INTO users (name, email, password,created_at,updated_at)
    VALUES ('$name','$email','$password','$date','$date')";
            // use exec() because no results are returned
            $this->con->exec($sql);
            $_SESSION['user_id']=$this->con->lastInsertId();

        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
    }

//    method for login
    public function login($email,$password){
        $password=md5($password);
        $query = $this->con->prepare("SELECT * FROM users WHERE email = '$email' AND password = '$password'");
        $query->execute();
        $results=$this->toCollectionOfObjects($query);

        if($results){
            $_SESSION['logged'] = true;
            $_SESSION['data'] = array(
                "id" => $results['id'],
            );
        }else {
            $this->errors[]='Ne ispravni podatci';
        }
    }



}
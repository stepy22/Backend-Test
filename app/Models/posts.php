<?php
/**
 * Created by PhpStorm.
 * User: vukas
 * Date: 9/8/2018
 * Time: 2:20 PM
 */

namespace App\Models;

use App\Model;
use App\ValidationTraits;

class posts extends Model
{


    public function search($title)
    {
        $query = $this->con->prepare("SELECT * FROM ".self::$table." WHERE title = '$title'");
        $query->execute();
        $results=$this->toCollectionOfObjects($query);
        return $results;

    }
}
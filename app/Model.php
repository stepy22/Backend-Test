<?php
/**
 * Created by PhpStorm.
 * User: vukas
 * Date: 9/8/2018
 * Time: 10:12 AM
 */
namespace app;
use App\DB;
use PDO;
use App\Http\Validation;
abstract class Model extends Validation
{
    public $con;
    protected static $table;
    protected $stmt;
    private static $instance;

    public  function __construct ()
    {
        echo self::$table;
        self::$table = strtolower((new \ReflectionClass($this))->getShortName());
        $this->con = DB::getInstance();

    }


    public function toCollectionOfObjects($query)
    {
        $niz = array();
        while ($obj = $query->fetch(DB::FETCH_OBJ)) {
            $niz[] = $obj;
        }
        return $niz;
    }

    public function all()
    {
        $query = $this->con->prepare("SELECT * FROM ".Self::$table);
        $query->execute();
        $results=$this->toCollectionOfObjects($query);
        return $results;

    }




}
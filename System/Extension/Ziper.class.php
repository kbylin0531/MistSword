<?php
/**
 * Created by PhpStorm.
 * User: Lin
 * Date: 2015/10/16 0016
 * Time: 18:14
 */
namespace System\Extension;

class Ziper {

    protected static $instance = array(

    );

    public function init($zipname){
        if(isset(self::$instance[$zipname])){
            if(!class_exists('PclZip')){
                require_once BASE_PATH.'System/Extension/PclZip/pclzip.lib.php';
            }
            self::$instance[$zipname] = new \PclZip($zipname);
        }

    }

    public function getInstance($zipname){
        if(isset(self::$instance[$zipname])){
            self::init($zipname);
        }
        return self::$instance[$zipname];
    }

}
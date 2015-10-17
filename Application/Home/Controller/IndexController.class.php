<?php
/**
 * Created by PhpStorm.
 * User: Lin
 * Date: 2015/10/16 0016
 * Time: 18:47
 */
namespace Application\Home\Controller;
use System\Core\Controller;

class IndexController extends Controller {


    public function index(){
        echo '<a href="/MistCMS/index.php/admin/main/index/index">jump to admin</a>';
    }
}
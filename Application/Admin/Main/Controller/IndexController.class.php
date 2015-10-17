<?php
/**
 * Created by PhpStorm.
 * User: Lin
 * Date: 2015/10/16 0016
 * Time: 18:51
 */
namespace Application\Admin\Main\Controller;
use System\Core\Controller;
use System\Util\SEK;

class IndexController extends Controller {

    /**
     * 主体显示
     * @param int $active
     */
    public function index($active=0){
        $this->assignUserNav();

        $this->assignSideBar($active);
        $this->assignProgressBars();

        $this->assignFooter();
        $this->display();
    }





    /**
     * 用户信息栏
     */
    private function assignUserNav(){
        $this->assign('username','Admin');
    }

    /**
     * 菜单项
     * @param int $active 激活顺序
     */
    private function assignSideBar($active=0){
        $modules = array(
            //type = 0 表示单个无下拉
            array(
                'type'  => 0,
                'icon'  => 'icon-home',
                'title' => '首页',
                'href'  => SEK::url('admin/main/index/index',array('active'=>0)),//参数二表示要激活的参数项
            ),
            array(
                'type'  => 1,
                'icon'  => 'icon-th-list',
                'title' => '用户管理',
                'items' => array(
                    array(
                        'href'  => SEK::url('admin/main/index/index',array('active'=>1)),
                        'title' => '表单1',
                    ),
                    array(
                        'href'  => SEK::url('admin/main/index/index',array('active'=>1)),
                        'title' => '表单2',
                    ),
                ),
            ),
        );
        $this->assign('active',$active);//被激活的选项
        $this->assign('modules',$modules);
    }

    /**
     * 足部版权 说明
     */
    private function assignFooter(){
        $this->assign('copyright',' 2013 &copy; MatAdmin.');
    }

    /**
     * 侧边栏快速信息统计
     */
    private function assignProgressBars(){
        $example = array(
            0   => array(
                array(
                    'name'  => '通话时长',
                    'percent'   => 71,
                    'used'  => 21419.94,
                    'total' => 30000,
                    'unit'  => 'MB',
                ),
                array(
                    'name'  => '手机流量',
                    'percent'   => 62,
                    'used'  => 621,
                    'total' => 1024,
                    'unit'  => 'MB',
                ),
            ),
            1   => array(
                array(
                    'name'  => '短信剩余',
                    'percent'   => 15,
                    'used'  => 30,
                    'total' => 200,
                    'unit'  => 'MB',
                ),
            ),
        );
        $this->assign('process_bar',$example);
    }

}
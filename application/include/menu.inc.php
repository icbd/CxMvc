<?php
$config['adminlte'] = array(
    array(
        'name'=>'仪盘表',
        'href'=>'',
        'ico'=>'fa-dashboard',
        'action'=>'demo.index,demo.modal',
        'menu'=>array(
            array(
                'name'=>'综合页面',
                'href'=>'demo/index',
                'action'=>'demo.index',
            ),
            array(
                'name'=>'弹框',
                'href'=>'demo/modal',
                'action'=>'demo.modal',
            ),
        )
    ),
    array(
        'name'=>'内容管理',
        'href'=>'dashboard',
        'ico'=>'fa-dashboard',
        'action'=>'classify.index,classify.add,websites.index,content.index,websites.add',
        'menu'=>array(
            array(
                'name'=>'项目管理',
                'href'=>'websites/index',
                'action'=>'project.index,websites.add',
            ),
            array(
                'name'=>'项目分类管理',
                'href'=>'classify/index',
                'action'=>'classify.index,classify.add',
            ),
            array(
                'name'=>'文章管理',
                'href'=>'content/index',
                'action'=>'content.index',
            ),
            array(
                'name'=>'多媒体管理',
                'href'=>'content/mailbox',
                'action'=>'content.mailbox',
            ),
            array(
                'name'=>'商品管理',
                'href'=>'content/mailbox',
                'action'=>'content.mailbox',
            ),
        )
    ),
    array(
        'name'=>'聚合',
        'href'=>'dashboard',
        'ico'=>'fa-dashboard',
        'action'=>'jh.index,jh.mailbox',
        'menu'=>array(
            array(
                'name'=>'新建聚合',
                'href'=>'jh/index',
                'action'=>'jh.index',
            ),
            array(
                'name'=>'已有聚合列表',
                'href'=>'jh/mailbox',
                'action'=>'jh.mailbox',
            ),
        )
    ),
    array(
        'name'=>'用户管理',
        'href'=>'dashboard',
        'ico'=>'fa-dashboard',
        'action'=>'jh.index,jh.mailbox',
        'menu'=>array(
            array(
                'name'=>'用户组',
                'href'=>'#',
                'action'=>'jh.index',
            ),
            array(
                'name'=>'用户列表',
                'href'=>'jh/mailbox',
                'action'=>'jh.mailbox',
            ),
        )
    ),
    array(
        'name'=>'系统',
        'href'=>'dashboard',
        'ico'=>'fa-dashboard',
        'action'=>'jh.index,jh.mailbox',
        'menu'=>array(
            array(
                'name'=>'街面设置',
                'href'=>'jh/index',
                'action'=>'jh.index',
            ),
            array(
                'name'=>'清空缓存',
                'href'=>'jh/mailbox',
                'action'=>'jh.mailbox',
            ),
        )
    ),
);



$config['ace'] = array(
    array(
        'name'=>'控制台',
        'href'=>'',
        'ico'=>'icon-dashboard',
        'action'=>'demo.index',
    ),
    array(
        'name'=>'内容管理',
        'href'=>'',
        'ico'=>'icon-text-width',
        'action'=>'websites.index,websites.add,classify.index,classify.add,content.index,content.add,media.index',
        'menu'=>array(
            array(
                'name'=>'项目管理',
                'href'=>'websites/index',
                'action'=>'websites.index,websites.add',
            ),
            array(
                'name'=>'项目分类管理',
                'href'=>'classify/index',
                'action'=>'classify.index,classify.add',
            ),
            array(
                'name'=>'文章管理',
                'href'=>'content/index',
                'action'=>'content.index,content.add',
            ),
            array(
                'name'=>'多媒体管理',
                'href'=>'media/index',
                'action'=>'media.index',
            ),
            array(
                'name'=>'商品管理',
                'href'=>'content/mailbox',
                'action'=>'content.mailbox',
            ),
        )
    ),
    array(
        'name'=>'聚合',
        'href'=>'',
        'ico'=>'icon-desktop',
        'action'=>'test.ace,demo.modal',
        'menu'=>array(
            array(
                'name'=>'新建聚合',
                'href'=>'jh/index',
                'action'=>'jh.index',
            ),
            array(
                'name'=>'已有聚合列表',
                'href'=>'jh/mailbox',
                'action'=>'jh.mailbox',
            ),
        )
    ),
    array(
        'name'=>'用户管理',
        'id'=>'collapse4',
        'ico'=>'icon-list',
        'color'=>'b_F5C294',
        'action'=>'test.datatables,test.index,test.verify,test.notdata,test.chart',
        'menu'=>array(
            array(
                'name'=>'用户组',
                'href'=>'#',
                'action'=>'jh.index',
            ),
            array(
                'name'=>'用户列表',
                'href'=>'jh/mailbox',
                'action'=>'jh.mailbox',
            ),
        )
    ),
    array(
        'name'=>'系统',
        'id'=>'collapse4',
        'ico'=>'icon-edit',
        'color'=>'b_F5C294',
        'action'=>'test.datatables,test.index,test.verify,test.notdata,test.chart',
        'menu'=>array(
            array(
                'name'=>'街面设置',
                'href'=>'jh/index',
                'action'=>'jh.index',
            ),
            array(
                'name'=>'清空缓存',
                'href'=>'jh/mailbox',
                'action'=>'jh.mailbox',
            ),
        )
    ),
    /*
    array(
        'name'=>'插件',
        'id'=>'collapse4',
        'ico'=>'icon-list-alt',
        'color'=>'b_F5C294',
        'action'=>'test.datatables,test.index,test.verify,test.notdata,test.chart',
    ),
    array(
        'name'=>'日历',
        'id'=>'collapse4',
        'ico'=>'icon-calendar',
        'color'=>'b_F5C294',
        'action'=>'test.datatables,test.index,test.verify,test.notdata,test.chart',
    ),
    array(
        'name'=>'相册',
        'id'=>'collapse4',
        'ico'=>'icon-picture',
        'color'=>'b_F5C294',
        'action'=>'test.datatables,test.index,test.verify,test.notdata,test.chart',
    ),
    */
);
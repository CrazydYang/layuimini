<?php

$childList = [
    'homeInfo'   => [
        'title' => '首页',
        'icon'  => '',
        'href'  => 'page/welcome.html',
    ],
    'moduleInfo' => [
        'ceshi'   => [
            'title' => '测试管理',
            'icon'  => 'fa fa-address-book',
            'child'  => [
                [
                    'title'  => 'icon列表',
                    'href'   => 'page/icon.html',
                    'icon'   => 'fa fa-dot-circle-o',
                    'target' => '_self',
                ],
                [
                    'title'    => 'UI管理',
                    'href'     => '',
                    'icon'     => 'fa fa-snowflake-o',
                    'target'   => '',
                    'child' => [
                        [
                            'title'  => '按钮',
                            'href'   => 'page/button.html',
                            'icon'   => '',
                            'target' => '_self',
                        ],
                        [
                            'title'  => '表单',
                            'href'   => 'page/form.html',
                            'icon'   => 'fa fa-calendar',
                            'target' => '_self',
                        ],
                        [
                            'title'  => '弹出层',
                            'href'   => 'page/layer.html',
                            'icon'   => '',
                            'target' => '_self',
                        ],
                        [
                            'title'  => '静态表格',
                            'href'   => 'page/table.html',
                            'icon'   => '',
                            'target' => '_self',
                        ],
                    ],
                ],
                [
                    'title'    => '测试无限层',
                    'href'     => '',
                    'icon'     => 'fa fa-meetup',
                    'target'   => '',
                    'child' => [
                        [
                            'title'    => '按钮1',
                            'href'     => 'page/button.html',
                            'icon'     => 'fa fa-calendar',
                            'target'   => '_self',
                            'child' => [
                                [
                                    'title'    => '按钮2',
                                    'href'     => 'page/button.html',
                                    'icon'     => '',
                                    'target'   => '_self',
                                    'child' => [
                                        [
                                            'title'  => '按钮3',
                                            'href'   => 'page/button.html',
                                            'icon'   => '',
                                            'target' => '_self',
                                        ],
                                        [
                                            'title'  => '表单4',
                                            'href'   => 'page/form.html',
                                            'icon'   => 'fa fa-calendar',
                                            'target' => '_self',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'setting' => [
            'title' => '设置管理',
            'icon'  => 'fa fa-gears',
            'child'  => [
                [
                    'title'  => 'icon列表 [setting]',
                    'href'   => 'page/icon.html',
                    'icon'   => 'fa fa-dot-circle-o',
                    'target' => '_self',
                ],
                [
                    'title'  => '按钮列表 [setting]',
                    'href'   => 'page/button.html',
                    'icon'   => 'fa fa-caret-square-o-left',
                    'target' => '_self',
                ],
            ],
        ],
    ],
];

die(json_encode($childList, JSON_UNESCAPED_UNICODE));
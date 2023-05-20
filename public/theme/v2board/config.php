<?php

return [
    'name' => 'V2board',
    'description' => 'V2board默认主题',
    'version' => '1.5.6',
    'images' => 'https://images.unsplash.com/photo-1515405295579-ba7b45403062?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2160&q=80',
    'configs' => [
        [
            'label' => '主题色',                               // 标签
            'placeholder' => '请选择主题颜色',                   // 描述
            'field_name' => 'theme_color',                    // 字段名 作为数据key使用
            'field_type' => 'select',                         // 字段类型: select,input,switch
            'select_options' => [                             // 当字段类型为select时有效
                'default' => '默认(蓝色)',
                'green' => '奶绿色',
                'black' => '黑色',
                'darkblue' => '暗蓝色',
            ],
            'default_value' => 'default'                       // 字段默认值，将会在首次进行初始化
        ], [
            'label' => '背景',
            'placeholder' => '请输入背景图片URL',
            'field_name' => 'background_url',
            'field_type' => 'input'
        ], [
            'label' => '边栏风格',
            'placeholder' => '请选择边栏风格',
            'field_name' => 'theme_sidebar',
            'field_type' => 'select',
            'select_options' => [
                'light' => '亮',
                'dark' => '暗'
            ],
            'default_value' => 'light'
        ], [
            'label' => '顶部风格',
            'placeholder' => '请选择顶部风格',
            'field_name' => 'theme_header',
            'field_type' => 'select',
            'select_options' => [
                'light' => '亮',
                'dark' => '暗'
            ],
            'default_value' => 'dark'
        ], [
            'label' => '自定义页脚HTML',
            'placeholder' => '可以实现客服JS代码的加入等',
            'field_name' => 'custom_html',
            'field_type' => 'textarea'
        ]
    ]
];

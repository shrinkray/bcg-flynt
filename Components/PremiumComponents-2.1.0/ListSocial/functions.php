<?php

namespace Flynt\Components\ListSocial;

use Flynt\FieldVariables;
use Flynt\ComponentManager;
use Flynt\Utils\Asset;

add_filter('Flynt/addComponentData?name=ListSocial', function ($data) {
    if (!empty($data['items'])) {
        $componentManager = ComponentManager::getInstance();
        $componentPathFull = $componentManager->getComponentDirPath('ListSocial');
        $componentPath = str_replace(trailingslashit(get_template_directory()), '', $componentPathFull);
        $data['items'] = array_map(function ($item) use ($componentPath) {
            $item['icon'] = Asset::getContents("{$componentPath}Assets/{$item['platform']['value']}.svg");
            return $item;
        }, $data['items']);
    }

    return $data;
});

function getACFLayout()
{
    return [
        'name' => 'listSocial',
        'label' => __('List: Social', 'flynt'),
        'sub_fields' => [
            [
                'label' => __('Content', 'flynt'),
                'name' => 'contentTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => __('Title', 'flynt'),
                'instructions' => __('Want to add a headline? And a paragraph? Go ahead! Or just leave it empty and nothing will be shown.', 'flynt'),
                'name' => 'preContentHtml',
                'type' => 'wysiwyg',
                'delay' => 0,
                'media_upload' => 0,
                'required' => 1,
            ],
            [
                'label' => __('Social Platform', 'flynt'),
                'type' => 'repeater',
                'name' => 'items',
                'layout' => 'table',
                'button_label' => __('Add Social Link', 'flynt'),
                'sub_fields' => [
                    [
                        'label' => __('Platform', 'flynt'),
                        'name' => 'platform',
                        'type' => 'select',
                        'allow_null' => 0,
                        'multiple' => 0,
                        'ui' => 1,
                        'ajax' => 0,
                        'return_format' => 'array',
                        'choices' => [
                            'facebook' => 'Facebook',
                            'instagram' => 'Instagram',
                            'twitter' => 'Twitter',
                            'youtube' => 'Youtube',
                            'mail' => 'E-Mail',
                            'linkedin' => 'LinkedIn',
                            'xing' => 'Xing'
                        ]
                    ],
                    [
                        'label' => __('Link', 'flynt'),
                        'name' => 'url',
                        'type' => 'url',
                        'required' => 1
                    ]
                ]
            ],
            [
                'label' => __('Options', 'flynt'),
                'name' => 'optionsTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => '',
                'name' => 'options',
                'type' => 'group',
                'layout' => 'row',
                'sub_fields' => [
                    FieldVariables\getTheme()
                ]
            ]
        ]
    ];
}

<?php

namespace Flynt\Components\NavigationFooterColumns;

use Flynt\Utils\Asset;
use Flynt\Utils\Options;
use Flynt\ComponentManager;
use Timber\Timber;

add_action('init', function () {
    register_nav_menus([
        'navigation_footer_columns' => __('Navigation Footer Columns', 'flynt'),
    ]);
});

add_filter('Flynt/addComponentData?name=NavigationFooterColumns', function ($data) {
    $data['menu'] = Timber::get_menu('navigation_footer_columns') ?? Timber::get_pages_menu();

    $componentManager = ComponentManager::getInstance();
    $componentPathFull = $componentManager->getComponentDirPath('NavigationFooterColumns');
    $componentPath = str_replace(trailingslashit(get_template_directory()), '', $componentPathFull);
    if (!empty($data['socialPlatforms'])) {
        $data['socialPlatforms'] = array_map(function ($item) use ($componentPath) {
            $item['icon'] = Asset::getContents("{$componentPath}Assets/{$item['platform']['value']}.svg");
            return $item;
        }, $data['socialPlatforms']);
    }

    return $data;
});

function getACFLayout()
{
    return [
        'name' => 'navigationFooterColumns',
        'label' => __('Navigation: Footer Columns', 'flynt'),
        'sub_fields' => [
            [
                'label' => '',
                'name' => 'message',
                'type' => 'message',
                'message' => sprintf(
                    // translators: 1: <a> element 2: </a> element
                    __('Create columns from %1$sMenus%2$s section and assign menu to Navigation Footer Columns location.', 'flynt'),
                    '<a href="' . admin_url('nav-menus.php') . '" target="_blank">',
                    '</a>'
                ) . ' ' . sprintf(
                    // translators: 1: <a> element 2: </a> element
                    __('Social settings are found in %1$sTranslatable Options%2$s.', 'flynt'),
                    '<a href="' . admin_url('admin.php?page=TranslatableOptions-Default') . '" target="_blank">',
                    '</a>'
                ),
                'new_lines' => 'br',
            ]
        ]
    ];
}

Options::addTranslatable('NavigationFooterColumns', [
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
        'tabs' => 'visual,text',
        'media_upload' => 0,
        'delay' => 0,
        'default_value' => '<h2>' . __('Find out more about', 'flynt') . '</h2>',
    ],
    [
        'label' => __('Social Platforms – Title', 'flynt'),
        'name' => 'socialPlatformsTitle',
        'type' => 'text',
        'default_value' => __('Updates', 'flynt'),
    ],
    [
        'label' => __('Social Platforms', 'flynt'),
        'name' => 'socialPlatforms',
        'type' => 'repeater',
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
                    'linkedin' => 'LinkedIn',
                    'xing' => 'Xing'
                ]
            ],
            [
                'label' => __('Link', 'flynt'),
                'name' => 'url',
                'type' => 'url',
                'required' => 1
            ],
        ]
    ],
    [
        'label' => __('Labels', 'flynt'),
        'name' => 'labelsTab',
        'type' => 'tab',
        'placement' => 'top',
        'endpoint' => 0
    ],
    [
        'label' => '',
        'name' => 'labels',
        'type' => 'group',
        'sub_fields' => [
            [
                'label' => __('Aria Label', 'flynt'),
                'name' => 'ariaLabel',
                'type' => 'text',
                'default_value' => __('Footer Columns', 'flynt'),
                'required' => 1,
                'wrapper' => [
                    'width' => '50',
                ],
            ],
        ],
    ],
]);

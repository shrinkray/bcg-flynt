<?php

namespace Flynt\Components\BlockWysiwygSidebar;

use Flynt\FieldVariables;

function getACFLayout()
{
    return [
        'name' => 'blockWysiwygSidebar',
        'label' => __('Block: Wysiwyg Sidebar', 'flynt'),
        'sub_fields' => [
            [
                'label' => __('Content', 'flynt'),
                'name' => 'contentTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => __('Sidebar Position', 'flynt'),
                'name' => 'sidebarPosition',
                'type' => 'button_group',
                'choices' => [
                    'left' => sprintf('<i class=\'dashicons dashicons-align-left\' title=\'%1$s\'></i>', __('Sidebar on the left', 'flynt')),
                    'right' => sprintf('<i class=\'dashicons dashicons-align-right\' title=\'%1$s\'></i>', __('Sidebar on the right', 'flynt'))
                ]
            ],
            [
                'label' => __('Sidebar', 'flynt'),
                'name' => 'sidebarHtml',
                'type' => 'wysiwyg',
                'media_upload' => 0,
                'required' => 1,
            ],
            [
                'label' => __('Text', 'flynt'),
                'name' => 'contentHtml',
                'type' => 'wysiwyg',
                'delay' => 0,
                'media_upload' => 0,
                'required' => 1,
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

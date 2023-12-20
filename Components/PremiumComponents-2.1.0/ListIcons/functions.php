<?php

namespace Flynt\Components\ListIcons;

use Flynt\FieldVariables;

function getACFLayout()
{
    return [
        'name' => 'listIcons',
        'label' => __('List: Icons', 'flynt'),
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
                'tabs' => 'visual,text',
                'media_upload' => 0,
                'delay' => 0
            ],
            [
                'label' => __('Items', 'flynt'),
                'name' => 'items',
                'type' => 'repeater',
                'min' => 1,
                'layout' => 'row',
                'button_label' => __('Add Item', 'flynt'),
                'sub_fields' => [
                    [
                        'label' => __('Image', 'flynt'),
                        'instructions' => __('Image-Format: JPG, PNG, SVG, WebP.', 'flynt'),
                        'name' => 'image',
                        'type' => 'image',
                        'preview_size' => 'medium',
                        'mime_types' => 'jpg,jpeg,png,svg,webp',
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
                    FieldVariables\getTheme(),
                    [
                        'label' => __('Content Alignment', 'flynt'),
                        'name' => 'alignContent',
                        'type' => 'button_group',
                        'choices' => [
                            'left' => sprintf('<i class="dashicons dashicons-editor-alignleft" title="%1$s"></i>', __('Align items left', 'flynt')),
                            'center' => sprintf('<i class="dashicons dashicons-editor-aligncenter" title="%1$s"></i>', __('Align items center', 'flynt'))
                        ],
                        'default_value' => 'left'
                    ],
                    [
                        'label' => __('Icon Size', 'flynt'),
                        'name' => 'iconSize',
                        'type' => 'radio',
                        'other_choice' => 0,
                        'save_other_choice' => 0,
                        'layout' => 'horizontal',
                        'choices' => [
                            '' => __('Small (Default)', 'flynt'),
                            'huge' => __('Huge', 'flynt)'),
                        ],
                        'default_value' => 'medium',
                        'wrapper' =>  [
                            'width' => '100',
                        ],
                    ],
                    [
                        'label' => __('Max Columns', 'flynt'),
                        'name' => 'maxColumns',
                        'type' => 'number',
                        'default_value' => 3,
                        'min' => 1,
                        'max' => 4,
                        'step' => 1
                    ],
                ]
            ],
        ]
    ];
}

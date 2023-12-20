<?php

namespace Flynt\Components\BlockCountUp;

use Flynt\FieldVariables;
use Flynt\Utils\Options;

function getACFLayout()
{
    return [
        'name' => 'blockCountUp',
        'label' => __('Block: Count Up', 'flynt'),
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
                        'label' => __('Count Value', 'flynt'),
                        'name' => 'numberGroup',
                        'type' => 'group',
                        'layout' => 'table',
                        'sub_fields' => [
                            [
                                'label' => __('Prefix', 'flynt'),
                                'name' => 'numberPrefix',
                                'type' => 'text'
                            ],
                            [
                                'label' => __('Number', 'flynt'),
                                'name' => 'number',
                                'type' => 'number',
                                'required' => 1
                            ],
                            [
                                'label' => __('Suffix', 'flynt'),
                                'name' => 'numberSuffix',
                                'type' => 'text'
                            ]
                        ]
                    ],
                    [
                        'label' => __('Subtitle', 'flynt'),
                        'name' => 'subtitle',
                        'type' => 'text'
                    ],
                ],
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

Options::addTranslatable('BlockCountUp', [
    [
        'label' => __('Decimal Separator', 'flynt'),
        'name' => 'decimalSeparator',
        'type' => 'text',
        'required' => 1,
        'default_value' => ','
    ],
    [
        'label' => __('Thousands Separator', 'flynt'),
        'name' => 'thousandsSeparator',
        'type' => 'text',
        'required' => 1,
        'default_value' => '.'
    ]
]);

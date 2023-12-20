<?php

namespace Flynt\Components\HeroTextImage;

use Flynt\FieldVariables;

function getACFLayout()
{
    return [
        'name' => 'heroTextImage',
        'label' => __('Hero: Text Image', 'flynt'),
        'sub_fields' => [
            [
                'label' => __('Content', 'flynt'),
                'name' => 'contentTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => __('Image Position', 'flynt'),
                'name' => 'imagePosition',
                'type' => 'button_group',
                'choices' => [
                    'left' => sprintf('<i class=\'dashicons dashicons-align-left\' title=\'%1$s\'></i>', __('Image on the left', 'flynt')),
                    'right' => sprintf('<i class=\'dashicons dashicons-align-right\' title=\'%1$s\'></i>', __('Image on the right', 'flynt'))
                ]
            ],
            [
                'label' => __('Content', 'flynt'),
                'name' => 'contentHtml',
                'type' => 'wysiwyg',
                'tabs' => 'visual,text',
                'media_upload' => 0,
                'delay' => 0,
                'required' => 1
            ],
            [
                'label' => __('Image', 'flynt'),
                'instructions' => __('Image-Format: JPG, PNG, SVG, WebP. Recommended Height: 1200px. Minimum Height: 600px.', 'flynt'),
                'name' => 'image',
                'type' => 'image',
                'return_format' => 'array',
                'preview_size' => 'medium',
                'library' => 'all',
                'min_height' => 600,
                'mime_types' => 'jpg,jpeg,png,svg,webp',
                'required' => 1
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
                        'label' => __('No Component Spacing'),
                        'name' => 'noComponentSpacing',
                        'type' => 'true_false',
                        'default_value' => 0,
                        'ui' => 1
                    ],
                ]
            ],
        ]
    ];
}

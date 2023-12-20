<?php

namespace Flynt\Components\HeroImageCta;

use Flynt\FieldVariables;

function getACFLayout()
{
    return [
        'name' => 'heroImageCta',
        'label' => __('Hero: Image CTA', 'flynt'),
        'sub_fields' => [
            [
                'label' => __('Content', 'flynt'),
                'name' => 'contentTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => __('Images', 'flynt'),
                'type' => 'group',
                'name' => 'images',
                'layout' => 'table',
                'sub_fields' => [
                    [
                        'label' => __('Desktop Image', 'flynt'),
                        'instructions' => __('Image-Format: JPG, PNG, SVG, WebP. Recommended resolution greater than 2560 × 800 px.', 'flynt'),
                        'name' => 'imageDesktop',
                        'type' => 'image',
                        'return_format' => 'array',
                        'preview_size' => 'medium',
                        'library' => 'all',
                        'mime_types' => 'jpg,jpeg,png,svg,webp',
                        'required' => 1,
                    ],
                    [
                        'label' => __('Mobile Image', 'flynt'),
                        'instructions' => __('Image-Format: JPG, PNG, SVG, WebP. Recommended resolution greater than 1440 × 800 px.', 'flynt'),
                        'name' => 'imageMobile',
                        'type' => 'image',
                        'return_format' => 'array',
                        'preview_size' => 'medium',
                        'library' => 'all',
                        'mime_types' => 'jpg,jpeg,png,svg,webp',
                    ]
                ]
            ],
            [
                'label' => __('Text', 'flynt'),
                'instructions' => __('The content overlaying the image. Character Recommendations: Title: 30-100, Content: 80-250.', 'flynt'),
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
                    array_merge(
                        FieldVariables\getTheme(),
                        [
                            'name' => 'backgroundTheme',
                            'label' => __('Background Theme', 'flynt'),
                            'instructions' => __('The theme of the outer container.', 'flynt'),
                        ]
                    ),
                    array_merge(
                        FieldVariables\getTheme(),
                        [
                            'name' => 'contentTheme',
                            'label' => __('Content Theme', 'flynt'),
                            'instructions' => __('The theme of the inner container.', 'flynt'),
                        ]
                    ),
                    [
                        'label' => __('Align Image', 'flynt'),
                        'name' => 'alignImage',
                        'type' => 'group',
                        'layout' => 'table',
                        'sub_fields' => [
                            [
                                'label' => __('Desktop', 'flynt'),
                                'name' => 'desktop',
                                'type' => 'group',
                                'sub_fields' => [
                                    [
                                        'label' => __('Horizontal', 'flynt'),
                                        'name' => 'horizontal',
                                        'type' => 'select',
                                        'allow_null' => 0,
                                        'multiple' => 0,
                                        'ui' => 1,
                                        'ajax' => 0,
                                        'choices' => [
                                            'desktopHorizontalAlign--left' => __('Left', 'flynt'),
                                            'desktopHorizontalAlign--center' => __('Center', 'flynt'),
                                            'desktopHorizontalAlign--right' => __('Right', 'flynt'),
                                        ],
                                        'default_value' => 'desktopHorizontalAlign--center'
                                    ],
                                    [
                                        'label' => __('Vertical', 'flynt'),
                                        'name' => 'vertical',
                                        'type' => 'select',
                                        'allow_null' => 0,
                                        'multiple' => 0,
                                        'ui' => 1,
                                        'ajax' => 0,
                                        'choices' => [
                                            'desktopVerticalAlign--top' => __('Top', 'flynt'),
                                            'desktopVerticalAlign--center' => __('Center', 'flynt'),
                                            'desktopVerticalAlign--bottom' => __('Bottom', 'flynt'),
                                        ],
                                        'default_value' => 'desktopVerticalAlign--center'
                                    ],
                                ]
                            ],
                            [
                                'label' => __('Mobile', 'flynt'),
                                'name' => 'mobile',
                                'type' => 'group',
                                'sub_fields' => [
                                    [
                                        'label' => __('Horizontal', 'flynt'),
                                        'name' => 'horizontal',
                                        'type' => 'select',
                                        'allow_null' => 0,
                                        'multiple' => 0,
                                        'ui' => 1,
                                        'ajax' => 0,
                                        'choices' => [
                                            'mobileHorizontalAlign--left' => __('Left', 'flynt'),
                                            'mobileHorizontalAlign--center' => __('Center', 'flynt'),
                                            'mobileHorizontalAlign--right' => __('Right', 'flynt'),
                                        ],
                                        'default_value' => 'mobileHorizontalAlign--center'
                                    ],
                                    [
                                        'label' => __('Vertical', 'flynt'),
                                        'name' => 'vertical',
                                        'type' => 'select',
                                        'allow_null' => 0,
                                        'multiple' => 0,
                                        'ui' => 1,
                                        'ajax' => 0,
                                        'choices' => [
                                            'mobileVerticalAlign--top' => __('Top', 'flynt'),
                                            'mobileVerticalAlign--center' => __('Center', 'flynt'),
                                            'mobileVerticalAlign--bottom' => __('Bottom', 'flynt'),
                                        ],
                                        'default_value' => 'mobileVerticalAlign--center'
                                    ],
                                ]
                            ],
                        ]
                    ],
                    [
                        'label' => __('Minimum Height', 'flynt'),
                        'name' => 'minHeight',
                        'type' => 'group',
                        'layout' => 'table',
                        'sub_fields' => [
                            [
                                'label' => __('Desktop', 'flynt'),
                                'name' => 'desktop',
                                'type' => 'range',
                                'default_value' => 640,
                                'min' => 0,
                                'max' => 1024,
                                'append' => __('px', 'flynt'),
                            ],
                            [
                                'label' => __('Mobile', 'flynt'),
                                'name' => 'mobile',
                                'type' => 'range',
                                'default_value' => 420,
                                'min' => 0,
                                'max' => 1024,
                                'append' => __('px', 'flynt'),
                            ],
                        ]
                    ],
                    [
                        'label' => __('Full width Image', 'flynt'),
                        'name' => 'fullWidth',
                        'type' => 'true_false',
                        'default_value' => 0,
                        'ui' => 1,
                    ]
                ]
            ],
        ]
    ];
}

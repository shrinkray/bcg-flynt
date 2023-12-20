<?php

namespace Flynt\Components\HeroSlider;

use Flynt\Utils\Options;

add_filter('Flynt/addComponentData?name=HeroSlider', function ($data) {
    $data['sliderOptions'] = Options::getTranslatable('SliderOptions');
    $data['jsonData'] = [
        'options' => array_merge($data['sliderOptions'], $data['options']),
    ];
    return $data;
});

function getACFLayout()
{
    return [
        'name' => 'heroSlider',
        'label' => __('Hero: Slider', 'flynt'),
        'sub_fields' => [
            [
                'label' => __('Content', 'flynt'),
                'name' => 'contentTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => __('Slides', 'flynt'),
                'name' => 'slides',
                'type' => 'repeater',
                'collapsed' => '',
                'min' => 1,
                'max' => 0,
                'layout' => 'block',
                'button_label' => __('Add Slide', 'flynt'),
                'sub_fields' => [
                    [
                        'label' => __('Slide', 'flynt'),
                        'name' => 'accordionSlide',
                        'type' => 'accordion',
                        'open' => 1,
                        'multi_expand' => 1,
                        'endpoint' => 0
                    ],
                    [
                        'label' => __('Images', 'flynt'),
                        'type' => 'group',
                        'name' => 'images',
                        'layout' => 'block',
                        'sub_fields' => [
                            [
                                'label' => __('Desktop Image', 'flynt'),
                                'instructions' => __('Image-Format: JPG, PNG, WebP. Recommended resolution greater than 2560 × 1200 px.', 'flynt'),
                                'name' => 'imageDesktop',
                                'type' => 'image',
                                'return_format' => 'array',
                                'preview_size' => 'medium',
                                'library' => 'all',
                                'mime_types' => 'jpg,jpeg,png,webp',
                                'required' => 1,
                                'wrapper' =>  [
                                    'width' => '50',
                                ],
                            ],
                            [
                                'label' => __('Mobile Image', 'flynt'),
                                'instructions' => __('Image-Format: JPG, PNG, WebP. Recommended resolution greater than 1440 × 800 px.', 'flynt'),
                                'name' => 'imageMobile',
                                'type' => 'image',
                                'return_format' => 'array',
                                'preview_size' => 'medium',
                                'library' => 'all',
                                'mime_types' => 'jpg,jpeg,png,webp',
                                'wrapper' =>  [
                                    'width' => '50',
                                ],
                            ],
                            [
                                'label' => __('Desktop Image Crop ', 'flynt'),
                                'name' => 'imageDesktopCrop',
                                'type' => 'select',
                                'allow_null' => 0,
                                'multiple' => 0,
                                'choices' => [
                                    'center' => __('Center (Default)', 'flynt'),
                                    'top-center' => __('Top Center', 'flynt'),
                                    'bottom-center' => __('Bottom Center', 'flynt'),
                                ],
                                'default_value' => 'center',
                                'wrapper' =>  [
                                    'width' => '50',
                                ],
                            ],
                            [
                                'label' => __('Mobile Image Crop', 'flynt'),
                                'name' => 'imageMobileCrop',
                                'type' => 'select',
                                'allow_null' => 0,
                                'multiple' => 0,
                                'choices' => [
                                    'center' => __('Center (Default)', 'flynt'),
                                    'top-center' => __('Top Center', 'flynt'),
                                    'bottom-center' => __('Bottom Center', 'flynt'),
                                ],
                                'default_value' => 'center',
                                'wrapper' =>  [
                                    'width' => '50',
                                ],
                            ],
                        ]
                    ],
                    [
                        'label' => __('Content', 'flynt'),
                        'name' => 'contentHtml',
                        'type' => 'wysiwyg',
                        'media_upload' => 0,
                        'toolbar' => 'full',
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
                    [
                        'label' => __('Enable Autoplay', 'flynt'),
                        'name' => 'autoplay',
                        'type' => 'true_false',
                        'default_value' => 0,
                        'ui' => 1
                    ],
                    [
                        'label' => __('Autoplay Speed (in milliseconds)', 'flynt'),
                        'name' => 'autoplaySpeed',
                        'type' => 'number',
                        'min' => 2000,
                        'default_value' => 4000,
                        'required' => 1,
                        'step' => 1,
                        'conditional_logic' => [
                            [
                                [
                                    'fieldPath' => 'autoplay',
                                    'operator' => '==',
                                    'value' => 1
                                ]
                            ]
                        ],
                    ],
                ],
            ],
        ]
    ];
}

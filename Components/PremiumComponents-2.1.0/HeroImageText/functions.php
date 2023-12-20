<?php

namespace Flynt\Components\HeroImageText;

function getACFLayout()
{
    return [
        'name' => 'heroImageText',
        'label' => __('Hero: Image Text', 'flynt'),
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
                        'instructions' => __('Image-Format: JPG, PNG, SVG, WebP. Aspect Ratio: 32:9. Recommended resolution greater than 2560 × 720 px.', 'flynt'),
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
                        'instructions' => __('Image-Format: JPG, PNG, SVG, WebP. Aspect Ratio: 4:3. Recommended resolution greater than 1440 × 1080 px.', 'flynt'),
                        'name' => 'imageMobile',
                        'type' => 'image',
                        'return_format' => 'array',
                        'preview_size' => 'medium',
                        'library' => 'all',
                        'mime_types' => 'jpg,jpeg,png,svg,webp',
                        'required' => 1,
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
        ]
    ];
}

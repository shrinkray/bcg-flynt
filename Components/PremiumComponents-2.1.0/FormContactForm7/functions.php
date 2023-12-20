<?php

namespace Flynt\Components\FormContactForm7;

use Flynt\FieldVariables;

add_filter('wpcf7_load_js', '__return_false');
add_filter('wpcf7_load_css', '__return_false');

// Be sure that default scripts and styles are removed, required because some wpcf7 plugins enqueue them again
add_action('wp_enqueue_scripts', function () {
    wp_dequeue_script('contact-form-7');
    wp_dequeue_style('contact-form-7');
}, PHP_INT_MAX);

add_filter('Flynt/addComponentData?name=FormContactForm7', function ($data) {
    if (function_exists('wpcf7_enqueue_scripts')) {
        wpcf7_enqueue_scripts();
    }

    if (function_exists('wpcf7_enqueue_styles')) {
        wpcf7_enqueue_styles();
    }

    return $data;
});

remove_action('wpcf7_init', 'wpcf7_add_form_tag_submit', 10, 0);

add_action('wpcf7_init', function () {
    wpcf7_add_form_tag('submit', function ($tag) {
        $class = wpcf7_form_controls_class($tag->type, 'button has-spinner');

        $atts = [];

        $atts['class'] = $tag->get_class_option($class);
        $atts['id'] = $tag->get_id_option();
        $atts['tabindex'] = $tag->get_option('tabindex', 'signed_int', true);

        $value = isset($tag->values[0]) ? $tag->values[0] : '';

        if (empty($value)) {
            $value = __('Send', 'contact-form-7');
        }

        $atts['type'] = 'submit';
        $atts['value'] = $value;

        $atts = wpcf7_format_atts($atts);

        $html = sprintf('<button %1$s>%2$s</button>', $atts, $value);
        return $html;
    });
}, 10, 0);

function getACFLayout()
{
    return [
        'name' => 'formContactForm7',
        'label' => __('Form: Contact Form 7', 'flynt'),
        'sub_fields' => getACFFields()
    ];
}

function getACFFields()
{
    return [
        [
            'label' => __('Content', 'flynt'),
            'name' => 'Tab',
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
            'toolbar' => 'full',
        ],
        [
            'label' => __('Contact Form 7 Form', 'flynt'),
            'instructions' => sprintf(
                // translators: 1: <a> element 2: </a> element
                __('If there is no form available, please first create a suitable one in the %1$sContact Form 7 admin page%2$s.', 'flynt'),
                '<a href="' . admin_url('admin.php?page=wpcf7') . '" target="_blank">',
                '</a>'
            ),
            'name' => 'formId',
            'type' => 'post_object',
            'post_type' => [
                'wpcf7_contact_form'
            ],
            'allow_null' => 0,
            'multiple' => 0,
            'return_format' => 'id',
            'ui' => 1,
            'required' => 1,
        ],
        [
            'label' => __('Content Footer', 'flynt'),
            'name' => 'contentFooterHtml',
            'type' => 'wysiwyg',
            'delay' => 0,
            'media_upload' => 0,
            'toolbar' => 'full',
            'required' => 0,
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
                array_merge(FieldVariables\getTheme(), [
                    'default_value' => 'dark'
                ]),
                [
                    'label' => __('Show as Card', 'flynt'),
                    'name' => 'card',
                    'type' => 'true_false',
                    'default_value' => 1,
                    'ui' => 1
                ]
            ]
        ],
        [
            'label' => __('Form Examples', 'flynt'),
            'name' => 'templateTab',
            'type' => 'tab',
            'placement' => 'top',
            'endpoint' => 0
        ],
        [
            'label' => '',
            'name' => 'template',
            'type' => 'message',
            'message' => '
<p>To keep forms accessible please make sure that you:</p>
<ol>
<li>Set a ' . htmlspecialchars('<label>') . ' for every input and the <i>for</i> from the label matches the <i>id</i> of the input.</li>
<li>Set <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/autocomplete" target="_blank">Autocomplete attributes</a> for every input intended to be filled with a users personal data.</li>
<li>Use the class <code>.visuallyHidden</code>, if you don\'t want a label to be visible.</li>
</ol>

<pre>

<h4 style="color: #ca4a1f;margin-bottom:0;font-size: 14px;">Form Newsletter</h4> ' . htmlspecialchars('
<div class="form-flex">
<div class="form-flex-col">
    <label for="e-mail" class="visuallyHidden">Email</label>
    [email* your-email id:e-mail autocomplete:email placeholder "Enter your email"]
</div>
<div class="form-flex-col">
    [submit "Submit"]
</div>
</div>
') . ' <h4 style="color: #ca4a1f;margin-bottom:0;font-size: 14px;">Simple field</h4> ' . htmlspecialchars('
<div class="form-group">
    <label for="yourCompany">Company</label>
    [text* your-company id:yourCompany autocomplete:organization placeholder "Bleech"]
</div>
') . ' <h4 style="color: #ca4a1f;margin-bottom:0;font-size: 14px;">Two columns row</h4> ' . htmlspecialchars('
<div class="form-row-2">
<div class="form-group">
    <label for="firstName">First Name</label>
    [text* first-name id:firstName autocomplete:given-name placeholder "Dean"]
</div>
<div class="form-group">
    <label for="lastName">Last Name</label>
    [text* last-name id:lastName autocomplete:family-name placeholder "Winchester"]
</div>
</div>
') . ' <h4 style="color: #ca4a1f;margin-bottom:0;font-size: 14px;">Three columns row</h4> ' . htmlspecialchars('
<div class="form-row-3">
<div class="form-group">
    <label for="firstName">First Name</label>
    [text* first-name id:firstName autocomplete:given-name placeholder "Dean"]
</div>
<div class="form-group">
    <label for="lastName">Last Name</label>
    [text* last-name id:lastName autocomplete:family-name placeholder "Winchester"]
</div>
<div class="form-group">
    <label for="yourEmail">Email</label>
    [email* your-email id:yourEmail autocomplete:email placeholder "flynt@bleech.de"]
</div>
</div>
') . ' <h4 style="color: #ca4a1f;margin-bottom:0;font-size: 14px;">Two columns row (left column bigger than right)</h4> ' . htmlspecialchars('
<div class="form-row-2-lg-left">
<div class="form-group">
    <label for="yourAddress">Address</label>
    [text address id:yourAddress autocomplete:street-address placeholder "Panoramastraße 1A"]
</div>
<div class="form-group">
    <label for="zipCode">Postal Code</label>
    [text zipcode id:zipCode autocomplete:postal-code placeholder "10178"]
</div>
</div>
') . ' <h4 style="color: #ca4a1f;margin-bottom:0;font-size: 14px;">Two columns row (right column bigger than left)</h4> ' . htmlspecialchars('
<div class="form-row-2-lg-right">
<div class="form-group">
    <label for="phoneCode">Code</label>
    [text menu-phone-code id:phoneCode autocomplete:tel-country-code placeholder "+49"]
</div>
<div class="form-group">
    <label for="mobilePhone">Phone Number</label>
    [tel mobile-phone id:mobilePhone autocomplete:tel-national placeholder "767-3842"]
</div>
</div>
') . ' <h4 style="color: #ca4a1f;margin-bottom:0;font-size: 14px;">Textarea</h4> ' . htmlspecialchars('
<div class="form-group">
    <label for="yourMessage">Your Message</label>
    [textarea your-message id:yourMessage placeholder "Message here"]
</div>
') . ' <h4 style="color: #ca4a1f;margin-bottom:0;font-size: 14px;">URL field</h4> ' . htmlspecialchars('
<div class="form-group">
    <label for="yourWebsite">Website</label>
    [url website id:yourWebsite autocomplete:url placeholder "http://"]
</div>
') . ' <h4 style="color: #ca4a1f;margin-bottom:0;font-size: 14px;">Date field</h4> ' . htmlspecialchars('
<div class="form-group">
    <label for="yourDate">Date</label>
    [date date id:yourDate]
</div>
') . ' <h4 style="color: #ca4a1f;margin-bottom:0;font-size: 14px;">Checkbox</h4> ' . htmlspecialchars('
<div class="form-group">
    [checkbox checkbox-555 use_label_element "some " "another" "else"]
</div>
') . ' <h4 style="color: #ca4a1f;margin-bottom:0;font-size: 14px;">Radio</h4> ' . htmlspecialchars('
<div class="form-group">
    [radio radio-647 default:1 use_label_element "some " "else" "another"]
</div>
') . ' <h4 style="color: #ca4a1f;margin-bottom:0;font-size: 14px;">Acceptance</h4> ' . htmlspecialchars('
<div class="form-group">
    [acceptance acceptance-782 use_label_element optional]
        By default, an acceptance checkbox is a different mechanism than
        general input validation, and it runs after all validation succeeds.
    [/acceptance]
</div>
') . ' <h4 style="color: #ca4a1f;margin-bottom:0;font-size: 14px;">Quiz field</h4> ' . htmlspecialchars('
<div class="form-group label-wrap">
    [quiz quiz-413 "1+1=?|1" "1+2=?|3" "1+3=?|4"]
</div>
') . ' <h4 style="color: #ca4a1f;margin-bottom:0;font-size: 14px;">File field</h4> ' . htmlspecialchars('
<div class="form-group">
    <label for="file">File</label>
    [file file-838 id:file]
</div>
') . ' <h4 style="color: #ca4a1f;margin-bottom:0;font-size: 14px;">Submit button</h4> ' . htmlspecialchars('
<div class="form-button">
    [submit "Send Message"]
</div>
') . '
</pre>
            ',
            'new_lines' => 'wpautop',
            'esc_html' => 0
        ],
    ];
}

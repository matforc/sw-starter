<?php

if( function_exists('acf_add_local_field_group') ):

    acf_add_local_field_group(array (
    	'key' => 'group_57697e9a2c9d1',
    	'title' => 'Meta',
    	'fields' => array (
    		array (
    			'key' => 'field_579a1b54d9142',
    			'label' => 'Social Integrations',
    			'name' => '',
    			'type' => 'tab',
    			'instructions' => '',
    			'required' => 0,
    			'conditional_logic' => 0,
    			'wrapper' => array (
    				'width' => '',
    				'class' => '',
    				'id' => '',
    			),
    			'placement' => 'top',
    			'endpoint' => 0,
    		),
    		array (
    			'key' => 'field_579a1b03d9141',
    			'label' => 'Instagram',
    			'name' => 'instagram',
    			'type' => 'text',
    			'instructions' => 'Enter account HANDLE (i.e. thefatjewish).',
    			'required' => 0,
    			'conditional_logic' => 0,
    			'wrapper' => array (
    				'width' => '',
    				'class' => '',
    				'id' => '',
    			),
    			'default_value' => '',
    			'placeholder' => '',
    			'prepend' => '',
    			'append' => '',
    			'maxlength' => '',
    			'readonly' => 0,
    			'disabled' => 0,
    		),
    		array (
    			'key' => 'field_579a1c0379309',
    			'label' => 'Twitter',
    			'name' => 'twitter',
    			'type' => 'text',
    			'instructions' => 'Enter account HANDLE (i.e. thefatjewish).',
    			'required' => 0,
    			'conditional_logic' => 0,
    			'wrapper' => array (
    				'width' => '',
    				'class' => '',
    				'id' => '',
    			),
    			'default_value' => '',
    			'placeholder' => '',
    			'prepend' => '',
    			'append' => '',
    			'maxlength' => '',
    			'readonly' => 0,
    			'disabled' => 0,
    		),
            array (
                'key' => 'field_579a1b6cd9143',
                'label' => 'Facebook',
                'name' => 'facebook',
                'type' => 'text',
                'instructions' => 'Enter account URL (i.e. https://www.facebook.com/THEFATJEWISH/).',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array (
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
                'readonly' => 0,
                'disabled' => 0,
            ),
    		array (
    			'key' => 'field_579a1c127930a',
    			'label' => 'YouTube',
    			'name' => 'youtube',
    			'type' => 'text',
    			'instructions' => 'Enter account URL (i.e. https://www.youtube.com/channel/UCA4tYUh_Vv-YuuViec6Yvgg).',
    			'required' => 0,
    			'conditional_logic' => 0,
    			'wrapper' => array (
    				'width' => '',
    				'class' => '',
    				'id' => '',
    			),
    			'default_value' => '',
    			'placeholder' => '',
    			'prepend' => '',
    			'append' => '',
    			'maxlength' => '',
    			'readonly' => 0,
    			'disabled' => 0,
    		),
    		array (
    			'key' => 'field_579a1c9424468',
    			'label' => 'TripAdvisor',
    			'name' => 'tripadvisor',
    			'type' => 'text',
    			'instructions' => 'Enter account URL (i.e. https://www.tripadvisor.com/HotelReviews.html).',
    			'required' => 0,
    			'conditional_logic' => 0,
    			'wrapper' => array (
    				'width' => '',
    				'class' => '',
    				'id' => '',
    			),
    			'default_value' => '',
    			'placeholder' => '',
    			'prepend' => '',
    			'append' => '',
    			'maxlength' => '',
    			'readonly' => 0,
    			'disabled' => 0,
    		),
    	),
    	'location' => array (
    		array (
    			array (
    				'param' => 'options_page',
    				'operator' => '==',
    				'value' => 'meta',
    			),
    		),
    	),
    	'menu_order' => 0,
    	'position' => 'normal',
    	'style' => 'default',
    	'label_placement' => 'top',
    	'instruction_placement' => 'label',
    	'hide_on_screen' => '',
    	'active' => 1,
    	'description' => '',
    ));

endif;
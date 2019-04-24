<?php if(!defined('FW')) die('Forbidden');

$options = array(
    'label' => array(
        'label' => __('Title', 'ingredients'),
        'desc' => __('The button label', 'ingredients'),
        'type' =>'text',
    ),
    'size' => array(
        'label' => __('Size', 'ingredients'),
        'desc' => __('The button size', 'ingredients'),
        'type' => 'select',
        'choices' => array(
            'h2' => __('H2', 'ingredients'),
            'h3' => __('H3', 'ingredients'),
        ),
        'value' => 'h2'
    )
);


?>
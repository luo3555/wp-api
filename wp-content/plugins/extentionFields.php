<?php
/*
Plugin Name: REST API EXTENTION FIELDS
Plugin URI: 
Description: REST API EXTENTION FIELDS
Version: 1.0
Author: DANIEL LUO
Author URI: http://githut.com/luo3555
License: MTI
*/

function extention_fields() {
    register_rest_field( 'post',
        'extention_fields',
        array(
            'get_callback'    => 'extention_fields_get',
            'update_callback' => 'extention_fields_update',
            'schema'          => null,
        )
    );
}

function extention_fields_get( $object, $field_name, $request ) {
    $fields = [];
    foreach (get_post_custom($object['id']) as $field => $value) {
        if (!preg_match('/^_/', $field)) {
            $fields[$field] = array_shift($value);
        }
    }
    return $fields;
}

function extention_fields_update( $fields, $object, $field_name ) {
    foreach ($fields as $field => $value) {
        update_post_meta($object->ID, $field, $value);
    }
}

add_action( 'rest_api_init', 'extention_fields' );
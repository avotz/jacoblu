<?php 


add_filter( 'rwmb_meta_boxes', 'jacoblu_register_meta_boxes' );

function jacoblu_register_meta_boxes( $meta_boxes ) {
    $prefix = 'rw_';
    // 1st meta box
    $meta_boxes[] = array(
        'id'         => 'additional',
        'title'      => __( 'Additional Information', 'textdomain' ),
        'post_types' => array( 'event'),
        'context'    => 'normal',
        'priority'   => 'high',
        'fields' => array(
            array(
                'name'  => 'Event Date',
                'desc'  => '',
                'id'    => $prefix . 'event_date',
                'type'  => 'datetime',
                'timestamp' =>false,
                'std'   => '',
                'class' => 'custom-class'
                
            ),
            
           
        )
    );
 return $meta_boxes;
}
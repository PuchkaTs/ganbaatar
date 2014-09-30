<?php
/**
 * Model title
 *
 * @type string
 */
 return array(
        'title'       => 'Tweet',
        'single'      => 'Tweet',
        'model'       => 'Gtweet',
        /**
         * The display columns
         */
        'columns'     => array(
            'id',
            'title'     => array(
                'title' => 'Title',
            ),
            'status'     => array(
                'title' => 'Tweet',
            ),
        ),

        /**
         * The editable fields
         */
        'edit_fields' => array(
            'title'  => array(
                'title' => 'Title',
                'type'  => 'text',
            ),
            'status'  => array(
                'title' => 'Tweet',
                'type'  => 'wysiwyg',
            ),

        ),


    );

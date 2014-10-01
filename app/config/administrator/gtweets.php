<?php
/**
 * Model title
 *
 * @type string
 */
 return array(
        'title'       => 'Твит',
        'single'      => 'Твит',
        'model'       => 'Gtweet',
        /**
         * The display columns
         */
        'columns'     => array(
            'id',
            'title'     => array(
                'title' => 'Гарчиг',
            ),
            'status'     => array(
                'title' => 'Твит',
            ),
        ),

        /**
         * The editable fields
         */
        'edit_fields' => array(
            'title'  => array(
                'title' => 'Нэр',
                'type'  => 'text',
            ),
            'status'  => array(
                'title' => 'Твит',
                'type'  => 'wysiwyg',
            ),

        ),


    );

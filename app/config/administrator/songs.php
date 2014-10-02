<?php
/**
 * Model title
 *
 * @type string
 */
    return array(
        'title'       => 'Лекц',
        'single'      => 'Лекц',
        'model'       => 'Song',

        /**
         * The display columns
         */
        'columns'     => array(
            'id',
            'title'     => array(
                'title' => 'Гарчиг',
            ),
            'position' => array(
                'title' => 'Байрлал',
            ),
        ),

        /**
         * The editable fields
         */
        'edit_fields' => array(
            'title'  => array(
                'title' => 'Лекцийн нэр',
                'type'  => 'text',
            ),
            'download_link' => array(
                'title' => 'Татах холбоос',
                'type'  => 'text',
            ),
            'play_link' => array(
                'title' => 'Тоголуулах холбоос',
                'type'  => 'text',
            ),
            'position' => array(
                'title' => 'Байрлал',
                'type'  => 'number',
            ),
        ),

    );


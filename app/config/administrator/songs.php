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
            )
        ),

        /**
         * The editable fields
         */
        'edit_fields' => array(
            'title'  => array(
                'title' => 'Цэсны нэр',
                'type'  => 'text',
            ),
            'song' => array(
                'title' => 'File',
                'type' => 'file',
                'location' => storage_path() . '/lekc',
                'naming' => 'random',
                'length' => 20,
                'size_limit' => 4,
                'mimes' => 'mp3',
            ),
            'pdf' => array(
                'title' => 'Агуулага',
                'type'  => 'text',
            ),

        ),

    );


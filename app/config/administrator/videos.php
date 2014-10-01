<?php
/**
 * Model title
 *
 * @type string
 */
    return array(
        'title'       => 'Видео',
        'single'      => 'Видео',
        'model'       => 'Video',

        /**
         * The display columns
         */
        'columns'     => array(
            'id',
            'title'     => array(
                'title' => 'Гарчиг',
            ),
            'pin'     => array(
                'title' => 'Онцлох',
            ),
            'video'     => array(
                'title' => 'Видео',
                'output' => '<a href="http://www.youtube.com/watch?v=(:value)" target="_blank">(:value)</a>',
            ),

        ),

        /**
         * The editable fields
         */
        'edit_fields' => array(
            'title'  => array(
                'title' => 'Гарчиг',
                'type'  => 'text',
            ),
            'video' => array(
                'title' => 'Видео ID',
                'type'  => 'text',
            ),
            'pin' => array(
                'title' => 'Нүүр хуудсанд харуулах эсэх',
                'type'  => 'bool',
            ),
            'description' => array(
                'title' => 'Тайлбар',
                'type'  => 'wysiwyg',
            ),

        ),

    );


<?php
/**
 * Model title
 *
 * @type string
 */

    return array(
        'title'       => 'Бодлого',
        'single'      => 'Бодлого',
        'model'       => 'Content',

        /**
         * The display columns
         */
        'columns'     => array(
            'id',
            'header'     => array(
                'title' => 'Гарчиг',
            ),
            'menuTitle'     => array(
                'title' => 'Цэсны нэр',
            ),

        ),

        /**
         * The editable fields
         */
        'edit_fields' => array(
            'menuTitle'  => array(
                'title' => 'Цэсны нэр',
                'type'  => 'text',
            ),
            'header'     => array(
                'title' => 'Гарчиг',
                'type'  => 'text',
            ),
            'body' => array(
                'title' => 'Агуулага',
                'type'  => 'wysiwyg',
            ),

        ),

        'form_width'  => 500,

    );


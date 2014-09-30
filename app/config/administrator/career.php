<?php
/**
 * Model title
 *
 * @type string
 */

    return array(
        'title'       => 'CV',
        'single'      => 'CV',
        'model'       => 'Career',

        /**
         * The display columns
         */
        'columns'     => array(
            'id',
            'header'     => array(
                'title' => 'Гарчиг',
            ),

        ),

        /**
         * The editable fields
         */
        'edit_fields' => array(
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


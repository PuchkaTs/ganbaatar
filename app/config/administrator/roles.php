<?php
/**
 * Model title
 *
 * @type string
 */


    return array(
        'title'       => 'Үүрэг',
        'single'      => 'Үүрэг',
        'model'       => 'Role',
        /**
         * The display columns
         */
        'columns'     => array(
            'id',
            'name'     => array(
                'title' => 'Нэр',
            )
        ),

        /**
         * The editable fields
         */
        'edit_fields' => array(
            'name'  => array(
                'title' => 'Нэр',
                'type'  => 'text',
            )

        ),
    );



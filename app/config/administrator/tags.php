<?php
/**
 * Model title
 *
 * @type string
 */

    return array(
        'title'       => 'Таг',
        'single'      => 'Таг',
        'model'       => 'Tag',
        /**
         * The display columns
         */
        'columns'     => array(
            'id',
            'tag'     => array(
                'title' => 'Таг',
            )
        ),

        /**
         * The editable fields
         */
        'edit_fields' => array(
            'tag'  => array(
                'title' => 'Таг',
                'type'  => 'text',
            )

        ),

    );


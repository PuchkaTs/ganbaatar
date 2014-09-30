<?php
/**
 * Model title
 *
 * @type string
 */

    return array(
        'title'       => 'Мэдээлэл',
        'single'      => 'Мэдээлэл',
        'model'       => 'Project',
        /**
         * The display columns
         */
        'columns'     => array(
            'id',
            'title'     => array(
                'title' => 'Title',
            )
        ),
        /**
         * The editable fields
         */
        'edit_fields' => array(
            'tags' => array(
                'type' => 'relationship',
                'title' => 'Таг',
                'name_field' => 'tag_en', //what column or accessor on the other table you want to use to represent this object
            ),
            'title'  => array(
                'title' => 'Гарчиг',
                'type'  => 'text',
            ),
            'body' => array(
                'title' => 'Мэдээ',
                'type'  => 'wysiwyg',
            ),
        ),
        /**
         * Filters
         */
        'filters' => array(
            'tags' => array(
                'type' => 'relationship',
                'title' => 'Tags',
                'name_field' => 'tag_en', //what column or accessor on the other table you want to use to represent this object
            ),
            'title'  => array(
                'title' => 'Title',
                'type'  => 'text',
            ),
        ),
        'form_width'  => 500,
    );


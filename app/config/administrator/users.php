<?php
/**
 * Model title
 *
 * @type string
 */
return array(
    'title' => 'Хэрэглэгч',
    'single' => 'Хэрэглэгч',
    'model' => 'User',
    /**
     * The display columns
     */
    'columns' => array(
        'id',
        'name' => array(
            'title' => 'Нэр',
        ),
        'email' => array(
            'title' => 'Имэйл',
        ),
    ),

    /**
     * The editable fields
     */
    'edit_fields' => array(
        'name' => array(
            'title' => 'Нэр',
            'type' => 'text',
        ),
        'email' => array(
            'title' => 'Имэйл',
            'type' => 'text',
        ),
        'password' => array(
            'title' => 'Нууц код',
            'type' => 'text',
        ),
        'roles' => array(
            'type' => 'relationship',
            'title' => 'Үүрэг',
            'name_field' => 'name', //what column or accessor on the other table you want to use to represent this object
        )

    ),


);

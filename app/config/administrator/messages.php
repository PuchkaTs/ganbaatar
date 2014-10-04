<?php
/**
 * Model title
 *
 * @type string
 */
return array(
    'title' => 'Асуулт',
    'single' => 'Асуулт',
    'model' => 'Message',
    /**
     * The display columns
     */
    'columns' => array(
        'id',
        'name' => array(
            'title' => 'Name',
        ),
        'email' => array(
            'title' => 'Email',
        ),
        'phone' => array(
            'title' => 'Phone',
        ),
        'body' => array(
            'title' => 'Message',
        ),
    ),

    /**
     * The editable fields
     */
    'edit_fields' => array(
        'email' => array(
            'title' => 'Email',
            'type' => 'text',
        ),
        'body' => array(
            'title' => 'Name',
            'type' => 'wysiwyg',
        )

    ),

    'filters' => array(
        'created_at'  => array(
            'title' => 'Created at',
            'type'  => 'date',
        ),
    ),
    'action_permissions'=> array(
        'delete' => function($model)
            {
                return Auth::user()->hasRole('super_admin');
            },
        'create' => function($model)
            {
                return Auth::user()->hasRole('super_admin');
            },
        'update' => function($model)
            {
                return Auth::user()->hasRole('super_admin');
            },
    ),

);

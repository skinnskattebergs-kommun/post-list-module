<?php
if (function_exists('acf_add_local_field_group')) :

    acf_add_local_field_group(array(
        'key' => 'group_6461b5d777054',
        'title' => 'Post Kategori Filter',
        'fields' => array(
            array(
                'key' => 'field_6461b5d8a5777',
                'label' => 'Posttyp',
                'name' => 'posttyp',
                'aria-label' => '',
                'type' => 'posttype_select',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'relevanssi_exclude' => 0,
                'default_value' => '',
                'allow_null' => 0,
                'multiple' => 0,
                'placeholder' => '',
                'disabled' => 0,
                'readonly' => 0,
            ),
            array(
                'key' => 'field_6461b6b7a5778',
                'label' => 'Kategori',
                'name' => 'kategori',
                'aria-label' => '',
                'type' => 'taxonomy',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'relevanssi_exclude' => 0,
                'taxonomy' => 'category',
                'add_term' => 1,
                'save_terms' => 0,
                'load_terms' => 0,
                'return_format' => 'id',
                'field_type' => 'select',
                'allow_null' => 0,
                'multiple' => 0,
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'mod-post-list',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
        'show_in_rest' => 0,
    ));

endif;

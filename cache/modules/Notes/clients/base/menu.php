<?php
$clientCache['Notes']['base']['menu'] = array (
  'header' => 
  array (
    'meta' => 
    array (
      0 => 
      array (
        'route' => '#Notes/create',
        'label' => 'LNK_NEW_NOTE',
        'acl_action' => 'create',
        'acl_module' => 'Notes',
        'icon' => 'icon-plus',
      ),
      1 => 
      array (
        'route' => '#Notes',
        'label' => 'LNK_NOTE_LIST',
        'acl_action' => 'list',
        'acl_module' => 'Notes',
        'icon' => 'icon-reorder',
      ),
      2 => 
      array (
        'route' => '#bwc/index.php?module=Import&action=Step1&import_module=Notes&return_module=Notes&return_action=index',
        'label' => 'LNK_IMPORT_NOTES',
        'acl_action' => 'import',
        'acl_module' => 'Notes',
        'icon' => 'icon-upload',
      ),
    ),
  ),
  'quickcreate' => 
  array (
    'meta' => 
    array (
      'layout' => 'create',
      'label' => 'LNK_NEW_NOTE',
      'visible' => true,
      'order' => 9,
      'icon' => 'icon-plus',
      'related' => 
      array (
        0 => 
        array (
          'module' => 'Contacts',
          'link' => 'notes',
        ),
      ),
    ),
  ),
  '_hash' => '10e5ca68b72e02637e2574a965373fe5',
);


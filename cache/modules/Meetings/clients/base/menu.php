<?php
$clientCache['Meetings']['base']['menu'] = array (
  'header' => 
  array (
    'meta' => 
    array (
      0 => 
      array (
        'route' => '#bwc/index.php?module=Meetings&action=EditView&return_module=Meetings&return_action=DetailView',
        'label' => 'LNK_NEW_MEETING',
        'acl_action' => 'create',
        'acl_module' => 'Meetings',
        'icon' => 'icon-plus',
      ),
      1 => 
      array (
        'route' => '#Meetings',
        'label' => 'LNK_MEETING_LIST',
        'acl_action' => 'list',
        'acl_module' => 'Meetings',
        'icon' => 'icon-reorder',
      ),
      2 => 
      array (
        'route' => '#bwc/index.php?module=Import&action=Step1&import_module=Meetings&return_module=Meetings&return_action=index',
        'label' => 'LNK_IMPORT_MEETINGS',
        'acl_action' => 'import',
        'acl_module' => 'Meetings',
        'icon' => 'icon-upload',
      ),
    ),
  ),
  'quickcreate' => 
  array (
    'meta' => 
    array (
      'layout' => 'create',
      'href' => '#bwc/index.php?module=Meetings&action=EditView&return_module=Meetings&return_action=DetailView',
      'label' => 'LNK_NEW_MEETING',
      'visible' => true,
      'order' => 7,
      'icon' => 'icon-calendar',
    ),
  ),
  '_hash' => '5bdc9dd47b8ee5b6d90d54aa35befecd',
);


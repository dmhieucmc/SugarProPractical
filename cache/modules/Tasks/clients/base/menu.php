<?php
$clientCache['Tasks']['base']['menu'] = array (
  'header' => 
  array (
    'meta' => 
    array (
      0 => 
      array (
        'route' => '#Tasks/create',
        'label' => 'LNK_NEW_TASK',
        'acl_action' => 'create',
        'acl_module' => 'Tasks',
        'icon' => 'icon-plus',
      ),
      1 => 
      array (
        'route' => '#Tasks',
        'label' => 'LNK_TASK_LIST',
        'acl_action' => 'list',
        'acl_module' => 'Tasks',
        'icon' => 'icon-reorder',
      ),
      2 => 
      array (
        'route' => '#bwc/index.php?module=Import&action=Step1&import_module=Tasks&return_module=Tasks&return_action=index',
        'label' => 'LNK_IMPORT_TASKS',
        'acl_action' => 'import',
        'acl_module' => 'Tasks',
        'icon' => 'icon-upload',
      ),
    ),
  ),
  'quickcreate' => 
  array (
    'meta' => 
    array (
      'layout' => 'create',
      'label' => 'LNK_NEW_TASK',
      'visible' => true,
      'order' => 8,
      'icon' => 'icon-plus',
    ),
  ),
  '_hash' => 'e420b6d868df759fa234b2f9f08bfaff',
);


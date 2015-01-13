<?php
//This file is auto generated by ExternalAPIFactory.php
$fullAPIList = array (
  'Dnb' => 
  array (
    'className' => 'ExtAPIDnb',
    'file' => 'include/externalAPI/Dnb/ExtAPIDnb.php',
    'supportedModules' => 
    array (
    ),
    'useAuth' => true,
    'requireAuth' => true,
    'authMethod' => 'password',
    'connector' => 'ext_rest_dnb',
  ),
  'Facebook' => 
  array (
    'className' => 'ExtAPIFacebook',
    'file' => 'include/externalAPI/Facebook/ExtAPIFacebook.php',
    'supportedModules' => 
    array (
      0 => 'Accounts',
      1 => 'Contacts',
      2 => 'Home',
    ),
    'useAuth' => true,
    'requireAuth' => true,
    'authMethod' => 'oauth',
    'needsUrl' => false,
    'connector' => 'ext_eapm_facebook',
  ),
  'GoToMeeting' => 
  array (
    'className' => 'ExtAPIGoToMeeting',
    'file' => 'include/externalAPI/GoToMeeting/ExtAPIGoToMeeting.php',
    'supportedModules' => 
    array (
      0 => 'Meetings',
    ),
    'useAuth' => true,
    'requireAuth' => true,
    'supportMeetingPassword' => false,
    'authMethod' => 'oauth',
    'needsUrl' => false,
    'canInvite' => false,
    'sendsInvites' => false,
    'connector' => 'ext_eapm_gotomeeting',
  ),
  'Google' => 
  array (
    'className' => 'ExtAPIGoogle',
    'file' => 'include/externalAPI/Google/ExtAPIGoogle.php',
    'supportedModules' => 
    array (
      0 => 'Documents',
      1 => 'Notes',
      2 => 'Import',
    ),
    'useAuth' => true,
    'requireAuth' => true,
    'docSearch' => true,
    'authMethod' => 'password',
    'needsUrl' => false,
    'connector' => 'ext_eapm_google',
    'restrictUploadsByExtension' => 
    array (
      0 => 'CSV',
      1 => 'DOC',
      2 => 'DOCX',
      3 => 'HTML',
      4 => 'HTM',
      5 => 'JPG',
      6 => 'ODS',
      7 => 'ODT',
      8 => 'PDF',
      9 => 'PNG',
      10 => 'PPT',
      11 => 'PPS',
      12 => 'RTF',
      13 => 'SXW',
      14 => 'TAB',
      15 => 'TXT',
      16 => 'TEXT',
      17 => 'TSV',
      18 => 'XLS',
      19 => 'XLSX',
    ),
  ),
  'IBMSmartCloud' => 
  array (
    'className' => 'ExtAPIIBMSmartCloud',
    'file' => 'include/externalAPI/IBMSmartCloud/ExtAPIIBMSmartCloud.php',
    'supportedModules' => 
    array (
      0 => 'Meetings',
      1 => 'Notes',
      2 => 'Documents',
    ),
    'useAuth' => true,
    'requireAuth' => true,
    'supportMeetingPassword' => false,
    'docSearch' => true,
    'authMethod' => 'oauth',
    'needsUrl' => false,
    'canInvite' => false,
    'sendsInvites' => false,
    'connector' => 'ext_eapm_ibmsmartcloud',
    'restrictUploadsByExtension' => false,
  ),
  'LotusLive' => 
  array (
    'className' => 'ExtAPILotusLive',
    'file' => 'include/externalAPI/LotusLive/ExtAPILotusLive.php',
    'supportedModules' => 
    array (
      0 => 'Meetings',
      1 => 'Notes',
      2 => 'Documents',
    ),
    'useAuth' => true,
    'requireAuth' => true,
    'supportMeetingPassword' => false,
    'docSearch' => true,
    'authMethod' => 'oauth',
    'needsUrl' => false,
    'canInvite' => false,
    'sendsInvites' => false,
    'connector' => 'ext_eapm_lotuslive',
    'restrictUploadsByExtension' => false,
  ),
  'Twitter' => 
  array (
    'className' => 'ExtAPITwitter',
    'file' => 'include/externalAPI/Twitter/ExtAPITwitter.php',
    'supportedModules' => 
    array (
      0 => 'Accounts',
      1 => 'Contacts',
      2 => 'Home',
    ),
    'useAuth' => true,
    'requireAuth' => true,
    'authMethod' => 'oauth',
    'needsUrl' => false,
    'connector' => 'ext_rest_twitter',
  ),
  'WebEx' => 
  array (
    'className' => 'ExtAPIWebEx',
    'file' => 'include/externalAPI/WebEx/ExtAPIWebEx.php',
    'supportedModules' => 
    array (
      0 => 'Meetings',
    ),
    'useAuth' => true,
    'requireAuth' => true,
    'supportMeetingPassword' => true,
    'authMethod' => 'password',
    'needsUrl' => true,
    'canInvite' => true,
    'sendsInvites' => true,
    'connector' => 'ext_eapm_webex',
  ),
);


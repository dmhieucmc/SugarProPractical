<?php
$apiDictionary['rest'] = array (
  1 => 
  array (
    'base' => 
    array (
      'POST' => 
      array (
        'bulk' => 
        array (
          0 => 
          array (
            'reqType' => 'POST',
            'path' => 
            array (
              0 => 'bulk',
            ),
            'pathVars' => 
            array (
              0 => '',
            ),
            'method' => 'bulkCall',
            'shortHelp' => 'Run several API call in a sequence',
            'longHelp' => 'include/api/help/bulk_post_help.html',
            'file' => 'clients/base/api/BulkApi.php',
            'className' => 'BulkApi',
            'score' => 7,
          ),
        ),
        'logger' => 
        array (
          0 => 
          array (
            'reqType' => 'POST',
            'path' => 
            array (
              0 => 'logger',
            ),
            'pathVars' => 
            array (
            ),
            'method' => 'logMessage',
            'shortHelp' => 'Writes a message out to the log prefaced by a channel name',
            'longHelp' => 'include/api/help/logger_help.html',
            'file' => 'clients/base/api/LoggerApi.php',
            'className' => 'LoggerApi',
            'score' => 7,
          ),
        ),
        'metadata' => 
        array (
          0 => 
          array (
            'reqType' => 'POST',
            'path' => 
            array (
              0 => 'metadata',
            ),
            'pathVars' => 
            array (
              0 => '',
            ),
            'method' => 'getAllMetadata',
            'shortHelp' => 'This method will return all metadata for the system, filtered by the array of hashes sent to the server',
            'longHelp' => 'include/api/html/metadata_all_help.html',
            'noEtag' => true,
            'ignoreMetaHash' => true,
            'ignoreSystemStatusError' => true,
            'file' => 'clients/base/api/MetadataApi.php',
            'className' => 'MetadataApi',
            'score' => 7,
          ),
        ),
        '<module>' => 
        array (
          0 => 
          array (
            'reqType' => 'POST',
            'path' => 
            array (
              0 => '<module>',
            ),
            'pathVars' => 
            array (
              0 => 'module',
            ),
            'method' => 'createRecord',
            'shortHelp' => 'This method creates a new record of the specified type',
            'longHelp' => 'include/api/help/module_post_help.html',
            'file' => 'clients/base/api/ModuleApi.php',
            'className' => 'ModuleApi',
            'score' => 6.25,
          ),
        ),
        'theme' => 
        array (
          0 => 
          array (
            'reqType' => 'POST',
            'path' => 
            array (
              0 => 'theme',
            ),
            'pathVars' => 
            array (
              0 => '',
            ),
            'method' => 'updateCustomTheme',
            'shortHelp' => 'Update the customizable variables of a custom theme',
            'longHelp' => 'include/api/help/theme_post_help.html',
            'file' => 'clients/base/api/ThemeApi.php',
            'className' => 'ThemeApi',
            'score' => 7,
          ),
        ),
        'Bugs' => 
        array (
          0 => 
          array (
            'reqType' => 'POST',
            'path' => 
            array (
              0 => 'Bugs',
            ),
            'pathVars' => 
            array (
              0 => 'module',
            ),
            'method' => 'createRecord',
            'shortHelp' => 'This method creates a new Bug record with option to add Contact and Account relationships',
            'longHelp' => 'modules/Bugs/api/help/BugsApi.html',
            'file' => 'modules/Bugs/clients/base/api/BugsApi.php',
            'className' => 'BugsApi',
            'score' => 7,
          ),
        ),
        'Cases' => 
        array (
          0 => 
          array (
            'reqType' => 'POST',
            'path' => 
            array (
              0 => 'Cases',
            ),
            'pathVars' => 
            array (
              0 => 'module',
            ),
            'method' => 'createRecord',
            'shortHelp' => 'This method creates a new Case record with option to add Contact and Account relationships',
            'longHelp' => 'modules/Cases/api/help/CasesApi.html',
            'file' => 'modules/Cases/clients/base/api/CasesApi.php',
            'className' => 'CasesApi',
            'score' => 7,
          ),
        ),
        'Dashboards' => 
        array (
          0 => 
          array (
            'reqType' => 'POST',
            'path' => 
            array (
              0 => 'Dashboards',
            ),
            'pathVars' => 
            array (
              0 => '',
            ),
            'method' => 'createDashboard',
            'shortHelp' => 'Create a new dashboard for home',
            'longHelp' => 'include/api/help/create_dashboard.html',
            'file' => 'modules/Dashboards/clients/base/api/DashboardApi.php',
            'className' => 'DashboardApi',
            'score' => 7,
          ),
        ),
        'Mail' => 
        array (
          0 => 
          array (
            'reqType' => 'POST',
            'path' => 
            array (
              0 => 'Mail',
            ),
            'pathVars' => 
            array (
              0 => '',
            ),
            'method' => 'createMail',
            'shortHelp' => 'Create Mail Item',
            'longHelp' => 'modules/Emails/clients/base/api/help/mail_post_help.html',
            'file' => 'modules/Emails/clients/base/api/MailApi.php',
            'className' => 'MailApi',
            'score' => 7,
          ),
        ),
        'Forecasts' => 
        array (
          0 => 
          array (
            'reqType' => 'POST',
            'path' => 
            array (
              0 => 'Forecasts',
            ),
            'pathVars' => 
            array (
              0 => 'module',
            ),
            'method' => 'createRecord',
            'shortHelp' => 'This method creates a new record of the specified type',
            'longHelp' => 'include/api/help/module_new_help.html',
            'file' => 'modules/Forecasts/clients/base/api/ForecastsModuleApi.php',
            'className' => 'ForecastsModuleApi',
            'score' => 7,
          ),
        ),
        'Leads' => 
        array (
          0 => 
          array (
            'reqType' => 'POST',
            'path' => 
            array (
              0 => 'Leads',
            ),
            'pathVars' => 
            array (
              0 => 'module',
            ),
            'method' => 'createRecord',
            'shortHelp' => 'This method creates a new Lead record with option to add Target & Email relationships',
            'longHelp' => 'modules/Leads/clients/base/api/help/LeadsApi.html',
            'file' => 'modules/Leads/clients/base/api/LeadsApi.php',
            'className' => 'LeadsApi',
            'score' => 7,
          ),
        ),
      ),
      'GET' => 
      array (
        'connectors' => 
        array (
          0 => 
          array (
            'reqType' => 'GET',
            'path' => 
            array (
              0 => 'connectors',
            ),
            'pathVars' => 
            array (
              0 => 'connectors',
            ),
            'method' => 'getConnectors',
            'shortHelp' => 'Gets connector information',
            'longHelp' => 'include/api/help/connectors_get_help.html',
            'file' => 'clients/base/api/ConnectorApi.php',
            'className' => 'ConnectorApi',
            'score' => 7,
          ),
        ),
        'me' => 
        array (
          0 => 
          array (
            'reqType' => 'GET',
            'path' => 
            array (
              0 => 'me',
            ),
            'pathVars' => 
            array (
            ),
            'method' => 'retrieveCurrentUser',
            'shortHelp' => 'Returns current user',
            'longHelp' => 'include/api/help/me_get_help.html',
            'ignoreMetaHash' => true,
            'ignoreSystemStatusError' => true,
            'file' => 'clients/base/api/CurrentUserApi.php',
            'className' => 'CurrentUserApi',
            'score' => 7,
          ),
        ),
        '<module>' => 
        array (
          0 => 
          array (
            'reqType' => 'GET',
            'path' => 
            array (
              0 => '<module>',
            ),
            'pathVars' => 
            array (
              0 => 'module',
            ),
            'method' => 'filterList',
            'jsonParams' => 
            array (
              0 => 'filter',
            ),
            'shortHelp' => 'List of all records in this module',
            'longHelp' => 'include/api/help/module_filter_get_help.html',
            'exceptions' => 
            array (
              0 => 'SugarApiExceptionInvalidParameter',
              1 => 'SugarApiExceptionNotAuthorized',
            ),
            'file' => 'clients/base/api/FilterApi.php',
            'className' => 'FilterApi',
            'score' => 6.25,
          ),
        ),
        'help' => 
        array (
          0 => 
          array (
            'reqType' => 'GET',
            'path' => 
            array (
              0 => 'help',
            ),
            'pathVars' => 
            array (
              0 => '',
            ),
            'method' => 'getHelp',
            'shortHelp' => 'Shows Help information',
            'longHelp' => 'include/api/help/help_get_help.html',
            'rawReply' => true,
            'noLoginRequired' => true,
            'file' => 'clients/base/api/HelpApi.php',
            'className' => 'HelpApi',
            'score' => 7,
          ),
        ),
        'locale' => 
        array (
          0 => 
          array (
            'reqType' => 'GET',
            'path' => 
            array (
              0 => 'locale',
            ),
            'pathVars' => 
            array (
            ),
            'method' => 'localeOptions',
            'shortHelp' => 'Gets locale options so UI can populate the corresponding dropdowns',
            'longHelp' => 'include/api/help/locale_options_get_help.html',
            'ignoreMetaHash' => true,
            'keepSession' => true,
            'file' => 'clients/base/api/LocaleApi.php',
            'className' => 'LocaleApi',
            'score' => 7,
          ),
        ),
        'metadata' => 
        array (
          0 => 
          array (
            'reqType' => 'GET',
            'path' => 
            array (
              0 => 'metadata',
            ),
            'pathVars' => 
            array (
              0 => '',
            ),
            'method' => 'getAllMetadata',
            'shortHelp' => 'This method will return all metadata for the system',
            'longHelp' => 'include/api/html/metadata_all_help.html',
            'noEtag' => true,
            'ignoreMetaHash' => true,
            'ignoreSystemStatusError' => true,
            'file' => 'clients/base/api/MetadataApi.php',
            'className' => 'MetadataApi',
            'score' => 7,
          ),
        ),
        'Users' => 
        array (
          0 => 
          array (
            'reqType' => 'GET',
            'path' => 
            array (
              0 => 'Users',
            ),
            'pathVars' => 
            array (
              0 => 'module_list',
            ),
            'method' => 'filterList',
            'shortHelp' => 'Search User records',
            'longHelp' => 'include/api/help/module_get_help.html',
            'file' => 'clients/base/api/PersonFilterApi.php',
            'className' => 'PersonFilterApi',
            'score' => 7,
          ),
        ),
        'Employees' => 
        array (
          0 => 
          array (
            'reqType' => 'GET',
            'path' => 
            array (
              0 => 'Employees',
            ),
            'pathVars' => 
            array (
              0 => 'module_list',
            ),
            'method' => 'filterList',
            'shortHelp' => 'Search Employee records',
            'longHelp' => 'include/api/help/module_get_help.html',
            'file' => 'clients/base/api/PersonFilterApi.php',
            'className' => 'PersonFilterApi',
            'score' => 7,
          ),
        ),
        'ping' => 
        array (
          0 => 
          array (
            'reqType' => 'GET',
            'path' => 
            array (
              0 => 'ping',
            ),
            'pathVars' => 
            array (
              0 => '',
            ),
            'method' => 'ping',
            'shortHelp' => 'An example API only responds with pong',
            'longHelp' => 'include/api/help/ping_get_help.html',
            'file' => 'clients/base/api/PingApi.php',
            'className' => 'PingApi',
            'score' => 7,
          ),
        ),
        'recent' => 
        array (
          0 => 
          array (
            'reqType' => 'GET',
            'path' => 
            array (
              0 => 'recent',
            ),
            'pathVars' => 
            array (
              0 => '',
              1 => '',
            ),
            'method' => 'getRecentlyViewed',
            'shortHelp' => 'This method retrieves recently viewed records for the user.',
            'longHelp' => 'include/api/help/me_recently_viewed_help.html',
            'file' => 'clients/base/api/RecentApi.php',
            'className' => 'RecentApi',
            'score' => 7,
          ),
        ),
        'css' => 
        array (
          0 => 
          array (
            'reqType' => 'GET',
            'path' => 
            array (
              0 => 'css',
            ),
            'pathVars' => 
            array (
              0 => '',
            ),
            'method' => 'getCSSURLs',
            'shortHelp' => 'Get (or generate) the css files for a platform and a theme',
            'longHelp' => 'include/api/help/css_get_help.html',
            'noLoginRequired' => true,
            'file' => 'clients/base/api/ThemeApi.php',
            'className' => 'ThemeApi',
            'score' => 7,
          ),
        ),
        'theme' => 
        array (
          0 => 
          array (
            'reqType' => 'GET',
            'path' => 
            array (
              0 => 'theme',
            ),
            'pathVars' => 
            array (
              0 => '',
            ),
            'method' => 'getCustomThemeVars',
            'shortHelp' => 'Get the customizable variables of a custom theme',
            'longHelp' => 'include/api/help/theme_get_help.html',
            'noLoginRequired' => true,
            'file' => 'clients/base/api/ThemeApi.php',
            'className' => 'ThemeApi',
            'score' => 7,
          ),
        ),
        'search' => 
        array (
          0 => 
          array (
            'reqType' => 'GET',
            'path' => 
            array (
              0 => 'search',
            ),
            'pathVars' => 
            array (
              0 => '',
            ),
            'method' => 'globalSearch',
            'jsonParams' => 
            array (
              0 => 'fields',
            ),
            'shortHelp' => 'Globally search records',
            'longHelp' => 'include/api/help/module_get_help.html',
            'file' => 'clients/base/api/UnifiedSearchApi.php',
            'className' => 'UnifiedSearchApi',
            'score' => 7,
          ),
        ),
        'VCardDownload' => 
        array (
          0 => 
          array (
            'reqType' => 'GET',
            'path' => 
            array (
              0 => 'VCardDownload',
            ),
            'pathVars' => 
            array (
              0 => '',
            ),
            'method' => 'vCardSave',
            'rawReply' => true,
            'allowDownloadCookie' => true,
            'shortHelp' => 'An API to download a contact as a vCard.',
            'longHelp' => 'include/api/help/vcarddownload_get_help.html',
            'file' => 'clients/base/api/vCardApi.php',
            'className' => 'vCardApi',
            'score' => 7,
          ),
        ),
        'Activities' => 
        array (
          0 => 
          array (
            'reqType' => 'GET',
            'path' => 
            array (
              0 => 'Activities',
            ),
            'pathVars' => 
            array (
              0 => '',
            ),
            'method' => 'getHomeActivities',
            'shortHelp' => 'This method gets homepage activities for a user',
            'longHelp' => 'modules/ActivityStream/clients/base/api/help/homeActivities.html',
            'file' => 'modules/ActivityStream/clients/base/api/ActivitiesApi.php',
            'className' => 'ActivitiesApi',
            'score' => 7,
          ),
        ),
        'Dashboards' => 
        array (
          0 => 
          array (
            'reqType' => 'GET',
            'path' => 
            array (
              0 => 'Dashboards',
            ),
            'pathVars' => 
            array (
              0 => '',
            ),
            'method' => 'getDashboards',
            'shortHelp' => 'Get dashboards for home',
            'longHelp' => 'include/api/help/get_dashboards.html',
            'file' => 'modules/Dashboards/clients/base/api/DashboardListApi.php',
            'className' => 'DashboardListApi',
            'score' => 7,
          ),
        ),
        'ForecastManagerWorksheets' => 
        array (
          0 => 
          array (
            'reqType' => 'GET',
            'path' => 
            array (
              0 => 'ForecastManagerWorksheets',
            ),
            'pathVars' => 
            array (
              0 => 'module',
            ),
            'method' => 'ForecastManagerWorksheetsGet',
            'jsonParams' => 
            array (
            ),
            'shortHelp' => 'Filter records from a single module',
            'longHelp' => 'modules/Forecasts/clients/base/api/help/ForecastWorksheetGet.html',
            'file' => 'modules/ForecastManagerWorksheets/clients/base/api/ForecastManagerWorksheetsFilterApi.php',
            'className' => 'ForecastManagerWorksheetsFilterApi',
            'score' => 7,
          ),
        ),
        'Forecasts' => 
        array (
          0 => 
          array (
            'reqType' => 'GET',
            'path' => 
            array (
              0 => 'Forecasts',
            ),
            'pathVars' => 
            array (
              0 => 'module',
            ),
            'method' => 'returnEmptySet',
            'shortHelp' => 'Forecast list endpoint returns an empty set',
            'longHelp' => 'include/api/help/module_record_favorite_put_help.html',
            'file' => 'modules/Forecasts/clients/base/api/ForecastsApi.php',
            'className' => 'ForecastsApi',
            'score' => 7,
          ),
        ),
        'ForecastSchedule' => 
        array (
          0 => 
          array (
            'reqType' => 'GET',
            'path' => 
            array (
              0 => 'ForecastSchedule',
            ),
            'pathVars' => 
            array (
              0 => '',
              1 => '',
            ),
            'method' => 'forecastSchedule',
            'shortHelp' => 'Deprecated - Returns a collection of ForecastSchedule models',
            'longHelp' => 'modules/ForecastSchedule/clients/base/api/help/ForecastScheduleApi.html',
            'file' => 'modules/ForecastSchedule/clients/base/api/ForecastScheduleApi.php',
            'className' => 'ForecastScheduleApi',
            'score' => 7,
          ),
        ),
        'ForecastWorksheets' => 
        array (
          0 => 
          array (
            'reqType' => 'GET',
            'path' => 
            array (
              0 => 'ForecastWorksheets',
            ),
            'pathVars' => 
            array (
              0 => 'module',
            ),
            'method' => 'forecastWorksheetsGet',
            'jsonParams' => 
            array (
            ),
            'shortHelp' => 'Filter records from a single module',
            'longHelp' => 'modules/Forecasts/clients/base/api/help/ForecastWorksheetGet.html',
            'file' => 'modules/ForecastWorksheets/clients/base/api/ForecastWorksheetsFilterApi.php',
            'className' => 'ForecastWorksheetsFilterApi',
            'score' => 7,
          ),
        ),
        'mostactiveusers' => 
        array (
          0 => 
          array (
            'reqType' => 'GET',
            'path' => 
            array (
              0 => 'mostactiveusers',
            ),
            'pathVars' => 
            array (
            ),
            'method' => 'getMostActiveUsers',
            'shortHelp' => 'Returns most active users',
            'longHelp' => 'modules/Home/clients/base/api/help/MostActiveUsersApi.html',
            'file' => 'modules/Home/clients/base/api/MostActiveUsersApi.php',
            'className' => 'MostActiveUsersApi',
            'score' => 7,
          ),
        ),
        'Reports' => 
        array (
          0 => 
          array (
            'reqType' => 'GET',
            'path' => 
            array (
              0 => 'Reports',
            ),
            'pathVars' => 
            array (
              0 => 'module_list',
            ),
            'method' => 'globalSearch',
            'shortHelp' => 'Search Reports',
            'longHelp' => 'include/api/help/getListModule.html',
            'file' => 'modules/Reports/clients/base/api/ReportsSearchApi.php',
            'className' => 'ReportsSearchApi',
            'score' => 7,
          ),
        ),
      ),
      'PUT' => 
      array (
        'me' => 
        array (
          0 => 
          array (
            'reqType' => 'PUT',
            'path' => 
            array (
              0 => 'me',
            ),
            'pathVars' => 
            array (
            ),
            'method' => 'updateCurrentUser',
            'shortHelp' => 'Updates current user',
            'longHelp' => 'include/api/help/me_put_help.html',
            'ignoreMetaHash' => true,
            'file' => 'clients/base/api/CurrentUserApi.php',
            'className' => 'CurrentUserApi',
            'score' => 7,
          ),
        ),
      ),
    ),
  ),
  2 => 
  array (
    'base' => 
    array (
      'GET' => 
      array (
        '<module>' => 
        array (
          'config' => 
          array (
            0 => 
            array (
              'reqType' => 'GET',
              'path' => 
              array (
                0 => '<module>',
                1 => 'config',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => '',
              ),
              'method' => 'config',
              'shortHelp' => 'Retrieves the config settings for a given module',
              'longHelp' => 'include/api/help/module_config_get_help.html',
              'file' => 'clients/base/api/ConfigModuleApi.php',
              'className' => 'ConfigModuleApi',
              'score' => 8,
            ),
          ),
          'filter' => 
          array (
            0 => 
            array (
              'reqType' => 'GET',
              'path' => 
              array (
                0 => '<module>',
                1 => 'filter',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => '',
              ),
              'method' => 'filterList',
              'jsonParams' => 
              array (
                0 => 'filter',
              ),
              'shortHelp' => 'Lists filtered records.',
              'longHelp' => 'include/api/help/module_filter_get_help.html',
              'exceptions' => 
              array (
                0 => 'SugarApiExceptionInvalidParameter',
                1 => 'SugarApiExceptionNotAuthorized',
              ),
              'file' => 'clients/base/api/FilterApi.php',
              'className' => 'FilterApi',
              'score' => 8,
            ),
          ),
          'count' => 
          array (
            0 => 
            array (
              'reqType' => 'GET',
              'path' => 
              array (
                0 => '<module>',
                1 => 'count',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => '',
              ),
              'jsonParams' => 
              array (
                0 => 'filter',
              ),
              'method' => 'filterListCount',
              'shortHelp' => 'List of all records in this module',
              'longHelp' => 'include/api/help/module_filter_get_help.html',
              'exceptions' => 
              array (
                0 => 'SugarApiExceptionNotAuthorized',
              ),
              'file' => 'clients/base/api/FilterApi.php',
              'className' => 'FilterApi',
              'score' => 8,
            ),
          ),
          '?' => 
          array (
            0 => 
            array (
              'reqType' => 'GET',
              'path' => 
              array (
                0 => '<module>',
                1 => '?',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => 'record',
              ),
              'method' => 'retrieveRecord',
              'shortHelp' => 'Returns a single record',
              'longHelp' => 'include/api/help/module_record_get_help.html',
              'file' => 'clients/base/api/ModuleApi.php',
              'className' => 'ModuleApi',
              'score' => 7,
            ),
          ),
          'Activities' => 
          array (
            0 => 
            array (
              'reqType' => 'GET',
              'path' => 
              array (
                0 => '<module>',
                1 => 'Activities',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => '',
              ),
              'method' => 'getModuleActivities',
              'shortHelp' => 'This method retrieves a module\'s activities',
              'longHelp' => 'modules/ActivityStream/clients/base/api/help/moduleActivities.html',
              'file' => 'modules/ActivityStream/clients/base/api/ActivitiesApi.php',
              'className' => 'ActivitiesApi',
              'score' => 8,
            ),
          ),
        ),
        'me' => 
        array (
          'preferences' => 
          array (
            0 => 
            array (
              'reqType' => 'GET',
              'path' => 
              array (
                0 => 'me',
                1 => 'preferences',
              ),
              'pathVars' => 
              array (
              ),
              'method' => 'userPreferences',
              'shortHelp' => 'Returns all the current user\'s stored preferences',
              'longHelp' => 'include/api/help/me_preferences_get_help.html',
              'ignoreMetaHash' => true,
              'file' => 'clients/base/api/CurrentUserApi.php',
              'className' => 'CurrentUserApi',
              'score' => 8.75,
            ),
          ),
          'following' => 
          array (
            0 => 
            array (
              'reqType' => 'GET',
              'path' => 
              array (
                0 => 'me',
                1 => 'following',
              ),
              'pathVars' => 
              array (
                0 => '',
                1 => '',
              ),
              'method' => 'getMyFollowedRecords',
              'shortHelp' => 'This method retrieves all followed methods for the user.',
              'longHelp' => 'include/api/help/me_getfollowed_help.html',
              'file' => 'clients/base/api/CurrentUserApi.php',
              'className' => 'CurrentUserApi',
              'score' => 8.75,
            ),
          ),
        ),
        'help' => 
        array (
          'exceptions' => 
          array (
            0 => 
            array (
              'reqType' => 'GET',
              'path' => 
              array (
                0 => 'help',
                1 => 'exceptions',
              ),
              'pathVars' => 
              array (
                0 => '',
                1 => '',
              ),
              'method' => 'getExceptionsHelp',
              'shortHelp' => 'Shows the exceptions thrown by the API',
              'longHelp' => 'include/api/help/help_get_exceptions.html',
              'rawReply' => true,
              'noLoginRequired' => true,
              'file' => 'clients/base/api/HelpApi.php',
              'className' => 'HelpApi',
              'score' => 8.75,
            ),
          ),
        ),
        'metadata' => 
        array (
          '_hash' => 
          array (
            0 => 
            array (
              'reqType' => 'GET',
              'path' => 
              array (
                0 => 'metadata',
                1 => '_hash',
              ),
              'pathVars' => 
              array (
                0 => '',
              ),
              'method' => 'getAllMetadataHash',
              'shortHelp' => 'This method will return the hash of all metadata for the system',
              'longHelp' => 'include/api/html/metadata_all_help.html',
              'ignoreMetaHash' => true,
              'ignoreSystemStatusError' => true,
              'file' => 'clients/base/api/MetadataApi.php',
              'className' => 'MetadataApi',
              'score' => 8.75,
            ),
          ),
          'public' => 
          array (
            0 => 
            array (
              'reqType' => 'GET',
              'path' => 
              array (
                0 => 'metadata',
                1 => 'public',
              ),
              'pathVars' => 
              array (
                0 => '',
              ),
              'method' => 'getPublicMetadata',
              'shortHelp' => 'This method will return the metadata needed when not logged in',
              'longHelp' => 'include/api/html/metadata_all_help.html',
              'noLoginRequired' => true,
              'noEtag' => true,
              'ignoreMetaHash' => true,
              'ignoreSystemStatusError' => true,
              'file' => 'clients/base/api/MetadataApi.php',
              'className' => 'MetadataApi',
              'score' => 8.75,
            ),
          ),
        ),
        'lang' => 
        array (
          '?' => 
          array (
            0 => 
            array (
              'reqType' => 'GET',
              'path' => 
              array (
                0 => 'lang',
                1 => '?',
              ),
              'pathVars' => 
              array (
                0 => '',
                1 => 'lang',
              ),
              'method' => 'getLanguage',
              'shortHelp' => 'Returns the labels for the application',
              'longHelp' => 'include/api/html/metadata_all_help.html',
              'rawReply' => true,
              'noEtag' => true,
              'ignoreMetaHash' => true,
              'ignoreSystemStatusError' => true,
              'file' => 'clients/base/api/MetadataApi.php',
              'className' => 'MetadataApi',
              'score' => 7.75,
            ),
          ),
        ),
        'password' => 
        array (
          'request' => 
          array (
            0 => 
            array (
              'reqType' => 'GET',
              'path' => 
              array (
                0 => 'password',
                1 => 'request',
              ),
              'pathVars' => 
              array (
                0 => 'module',
              ),
              'method' => 'requestPassword',
              'shortHelp' => 'This method sends email requests to reset passwords',
              'longHelp' => 'include/api/help/password_request_get_help.html',
              'noLoginRequired' => true,
              'file' => 'clients/base/api/PasswordApi.php',
              'className' => 'PasswordApi',
              'score' => 8.75,
            ),
          ),
        ),
        'ping' => 
        array (
          'whattimeisit' => 
          array (
            0 => 
            array (
              'reqType' => 'GET',
              'path' => 
              array (
                0 => 'ping',
                1 => 'whattimeisit',
              ),
              'pathVars' => 
              array (
                0 => '',
                1 => 'sub_method',
              ),
              'method' => 'ping',
              'shortHelp' => 'An example API only responds with the current time in server format.',
              'longHelp' => 'include/api/help/ping_whattimeisit_get_help.html',
              'file' => 'clients/base/api/PingApi.php',
              'className' => 'PingApi',
              'score' => 8.75,
            ),
          ),
        ),
        'css' => 
        array (
          'preview' => 
          array (
            0 => 
            array (
              'reqType' => 'GET',
              'path' => 
              array (
                0 => 'css',
                1 => 'preview',
              ),
              'pathVars' => 
              array (
                0 => '',
                1 => '',
              ),
              'method' => 'previewCSS',
              'shortHelp' => 'Compile the css for a platform and a theme just as a preview',
              'longHelp' => 'include/api/help/css_preview_get_help.html',
              'noLoginRequired' => true,
              'rawReply' => true,
              'file' => 'clients/base/api/ThemeApi.php',
              'className' => 'ThemeApi',
              'score' => 8.75,
            ),
          ),
        ),
        'Activities' => 
        array (
          'filter' => 
          array (
            0 => 
            array (
              'reqType' => 'GET',
              'path' => 
              array (
                0 => 'Activities',
                1 => 'filter',
              ),
              'pathVars' => 
              array (
                0 => '',
              ),
              'method' => 'getHomeActivities',
              'shortHelp' => 'This method gets a filtered list of homepage activities for a user',
              'longHelp' => 'modules/ActivityStream/clients/base/api/help/homeActivities.html',
              'file' => 'modules/ActivityStream/clients/base/api/ActivitiesApi.php',
              'className' => 'ActivitiesApi',
              'score' => 8.75,
            ),
          ),
        ),
        'Dashboards' => 
        array (
          '<module>' => 
          array (
            0 => 
            array (
              'reqType' => 'GET',
              'path' => 
              array (
                0 => 'Dashboards',
                1 => '<module>',
              ),
              'pathVars' => 
              array (
                0 => '',
                1 => 'module',
              ),
              'method' => 'getDashboards',
              'shortHelp' => 'Get dashboards for a module',
              'longHelp' => 'include/api/help/get_dashboards.html',
              'file' => 'modules/Dashboards/clients/base/api/DashboardListApi.php',
              'className' => 'DashboardListApi',
              'score' => 8,
            ),
          ),
          'Activities' => 
          array (
            0 => 
            array (
              'reqType' => 'GET',
              'path' => 
              array (
                0 => 'Dashboards',
                1 => 'Activities',
              ),
              'pathVars' => 
              array (
                0 => '',
                1 => 'module',
              ),
              'method' => 'getDashboards',
              'shortHelp' => 'Get dashboards for home',
              'longHelp' => 'include/api/help/get_dashboards.html',
              'file' => 'modules/Dashboards/clients/base/api/DashboardListApi.php',
              'className' => 'DashboardListApi',
              'score' => 8.75,
            ),
          ),
        ),
        'ExpressionEngine' => 
        array (
          'functions' => 
          array (
            0 => 
            array (
              'reqType' => 'GET',
              'path' => 
              array (
                0 => 'ExpressionEngine',
                1 => 'functions',
              ),
              'pathVars' => 
              array (
                0 => '',
                1 => '',
              ),
              'method' => 'getSugarLogicFunctions',
              'shortHelp' => 'Retrieve the js for SugarLogic Expressions and Actions',
              'longHelp' => '',
              'noLoginRequired' => true,
              'rawReply' => true,
              'noEtag' => true,
              'ignoreMetaHash' => true,
              'ignoreSystemStatusError' => true,
              'file' => 'modules/ExpressionEngine/clients/base/api/SugarLogicFunctionsApi.php',
              'className' => 'SugarLogicFunctionsApi',
              'score' => 8.75,
            ),
          ),
        ),
        'ForecastManagerWorksheets' => 
        array (
          'export' => 
          array (
            0 => 
            array (
              'reqType' => 'GET',
              'path' => 
              array (
                0 => 'ForecastManagerWorksheets',
                1 => 'export',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => '',
              ),
              'method' => 'export',
              'rawReply' => true,
              'allowDownloadCookie' => true,
              'shortHelp' => 'Returns a record set in CSV format along with HTTP headers to indicate content type.',
              'longHelp' => 'include/api/help/module_export_get_help.html',
              'file' => 'modules/ForecastManagerWorksheets/clients/base/api/ForecastManagerWorksheetsExportApi.php',
              'className' => 'ForecastManagerWorksheetsExportApi',
              'score' => 8.75,
            ),
          ),
          '?' => 
          array (
            0 => 
            array (
              'reqType' => 'GET',
              'path' => 
              array (
                0 => 'ForecastManagerWorksheets',
                1 => '?',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => 'timeperiod_id',
              ),
              'method' => 'ForecastManagerWorksheetsGet',
              'jsonParams' => 
              array (
              ),
              'shortHelp' => 'Filter records from a single module',
              'longHelp' => 'modules/Forecasts/clients/base/api/help/ForecastWorksheetGet.html',
              'file' => 'modules/ForecastManagerWorksheets/clients/base/api/ForecastManagerWorksheetsFilterApi.php',
              'className' => 'ForecastManagerWorksheetsFilterApi',
              'score' => 7.75,
            ),
          ),
          'chart' => 
          array (
            0 => 
            array (
              'reqType' => 'GET',
              'path' => 
              array (
                0 => 'ForecastManagerWorksheets',
                1 => 'chart',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => '',
              ),
              'method' => 'forecastManagerWorksheetsChartGet',
              'jsonParams' => 
              array (
              ),
              'shortHelp' => 'Filter records and reformat data for chart presentation',
              'longHelp' => 'modules/Forecasts/clients/base/api/help/forecastManagerWorksheetsChartGet.html',
              'file' => 'modules/ForecastManagerWorksheets/clients/base/api/ForecastManagerWorksheetsFilterApi.php',
              'className' => 'ForecastManagerWorksheetsFilterApi',
              'score' => 8.75,
            ),
          ),
          'filter' => 
          array (
            0 => 
            array (
              'reqType' => 'GET',
              'path' => 
              array (
                0 => 'ForecastManagerWorksheets',
                1 => 'filter',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => '',
              ),
              'method' => 'filterList',
              'jsonParams' => 
              array (
                0 => 'filter',
              ),
              'shortHelp' => 'Filter records from a single module',
              'longHelp' => 'modules/Forecasts/clients/base/api/help/ForecastWorksheetFilter.html',
              'file' => 'modules/ForecastManagerWorksheets/clients/base/api/ForecastManagerWorksheetsFilterApi.php',
              'className' => 'ForecastManagerWorksheetsFilterApi',
              'score' => 8.75,
            ),
          ),
        ),
        'Forecasts' => 
        array (
          'init' => 
          array (
            0 => 
            array (
              'reqType' => 'GET',
              'path' => 
              array (
                0 => 'Forecasts',
                1 => 'init',
              ),
              'pathVars' => 
              array (
              ),
              'method' => 'forecastsInitialization',
              'shortHelp' => 'Returns forecasts initialization data and additional user data',
              'longHelp' => 'modules/Forecasts/clients/base/api/help/ForecastsApiInitGet.html',
              'file' => 'modules/Forecasts/clients/base/api/ForecastsApi.php',
              'className' => 'ForecastsApi',
              'score' => 8.75,
            ),
          ),
          'config' => 
          array (
            0 => 
            array (
              'reqType' => 'GET',
              'path' => 
              array (
                0 => 'Forecasts',
                1 => 'config',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => '',
              ),
              'method' => 'config',
              'shortHelp' => 'Retrieves the config settings for a given module',
              'longHelp' => 'include/api/help/config_get_help.html',
              'file' => 'modules/Forecasts/clients/base/api/ForecastsConfigApi.php',
              'className' => 'ForecastsConfigApi',
              'score' => 8.75,
            ),
          ),
          'filter' => 
          array (
            0 => 
            array (
              'reqType' => 'GET',
              'path' => 
              array (
                0 => 'Forecasts',
                1 => 'filter',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => '',
              ),
              'method' => 'filterList',
              'jsonParams' => 
              array (
                0 => 'filter',
              ),
              'shortHelp' => 'Filter records from a single module',
              'longHelp' => 'modules/Forecasts/clients/base/api/help/ForecastsFilter.html',
              'file' => 'modules/Forecasts/clients/base/api/ForecastsFilterApi.php',
              'className' => 'ForecastsFilterApi',
              'score' => 8.75,
            ),
          ),
        ),
        'ForecastWorksheets' => 
        array (
          'export' => 
          array (
            0 => 
            array (
              'reqType' => 'GET',
              'path' => 
              array (
                0 => 'ForecastWorksheets',
                1 => 'export',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => '',
              ),
              'method' => 'export',
              'rawReply' => true,
              'allowDownloadCookie' => true,
              'shortHelp' => 'Returns a record set in CSV format along with HTTP headers to indicate content type.',
              'longHelp' => 'include/api/help/module_export_get_help.html',
              'file' => 'modules/ForecastWorksheets/clients/base/api/ForecastWorksheetsExportApi.php',
              'className' => 'ForecastWorksheetsExportApi',
              'score' => 8.75,
            ),
          ),
          '?' => 
          array (
            0 => 
            array (
              'reqType' => 'GET',
              'path' => 
              array (
                0 => 'ForecastWorksheets',
                1 => '?',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => 'timeperiod_id',
              ),
              'method' => 'forecastWorksheetsGet',
              'jsonParams' => 
              array (
              ),
              'shortHelp' => 'Filter records from a single module',
              'longHelp' => 'modules/Forecasts/clients/base/api/help/ForecastWorksheetGet.html',
              'file' => 'modules/ForecastWorksheets/clients/base/api/ForecastWorksheetsFilterApi.php',
              'className' => 'ForecastWorksheetsFilterApi',
              'score' => 7.75,
            ),
          ),
          'chart' => 
          array (
            0 => 
            array (
              'reqType' => 'GET',
              'path' => 
              array (
                0 => 'ForecastWorksheets',
                1 => 'chart',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => '',
              ),
              'method' => 'forecastWorksheetsChartGet',
              'jsonParams' => 
              array (
              ),
              'shortHelp' => 'Filter records and reformat data for chart presentation',
              'longHelp' => 'modules/Forecasts/clients/base/api/help/ForecastsWorksheetChartGet.html',
              'file' => 'modules/ForecastWorksheets/clients/base/api/ForecastWorksheetsFilterApi.php',
              'className' => 'ForecastWorksheetsFilterApi',
              'score' => 8.75,
            ),
          ),
          'filter' => 
          array (
            0 => 
            array (
              'reqType' => 'GET',
              'path' => 
              array (
                0 => 'ForecastWorksheets',
                1 => 'filter',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => '',
              ),
              'method' => 'forecastWorksheetsGet',
              'jsonParams' => 
              array (
                0 => 'filter',
              ),
              'shortHelp' => 'Filter records from a single module',
              'longHelp' => 'modules/Forecasts/clients/base/api/help/ForecastWorksheetFilter.html',
              'file' => 'modules/ForecastWorksheets/clients/base/api/ForecastWorksheetsFilterApi.php',
              'className' => 'ForecastWorksheetsFilterApi',
              'score' => 8.75,
            ),
          ),
        ),
        'Meetings' => 
        array (
          'Agenda' => 
          array (
            0 => 
            array (
              'reqType' => 'GET',
              'path' => 
              array (
                0 => 'Meetings',
                1 => 'Agenda',
              ),
              'pathVars' => 
              array (
                0 => '',
                1 => '',
              ),
              'method' => 'getAgenda',
              'shortHelp' => 'Fetch an agenda for a user',
              'longHelp' => 'include/api/html/meetings_agenda_get_help',
              'file' => 'modules/Meetings/clients/base/api/MeetingsApi.php',
              'className' => 'MeetingsApi',
              'score' => 8.75,
            ),
          ),
        ),
        'OutboundEmailConfiguration' => 
        array (
          'list' => 
          array (
            0 => 
            array (
              'reqType' => 'GET',
              'path' => 
              array (
                0 => 'OutboundEmailConfiguration',
                1 => 'list',
              ),
              'pathVars' => 
              array (
                0 => '',
                1 => '',
              ),
              'method' => 'listConfigurations',
              'shortHelp' => 'A list of outbound email configurations',
              'longHelp' => 'include/api/html/modules/OutboundEmailConfiguration/OutboundEmailConfiguration.html#listConfigurations',
              'file' => 'modules/OutboundEmailConfiguration/clients/base/api/OutboundEmailConfigurationApi.php',
              'className' => 'OutboundEmailConfigurationApi',
              'score' => 8.75,
            ),
          ),
        ),
        'Reports' => 
        array (
          'saved_reports' => 
          array (
            0 => 
            array (
              'reqType' => 'GET',
              'path' => 
              array (
                0 => 'Reports',
                1 => 'saved_reports',
              ),
              'pathVars' => 
              array (
                0 => '',
                1 => '',
              ),
              'method' => 'getSavedReports',
              'shortHelp' => 'Returns items from the saved_reports table based on a few criteria',
              'longHelp' => 'modules/Reports/clients/base/api/help/ReportsDashletApiGetSavedReports.html',
              'file' => 'modules/Reports/clients/base/api/ReportsDashletsApi.php',
              'className' => 'ReportsDashletsApi',
              'score' => 8.75,
            ),
          ),
        ),
        'RevenueLineItems' => 
        array (
          'by_country' => 
          array (
            0 => 
            array (
              'reqType' => 'GET',
              'path' => 
              array (
                0 => 'RevenueLineItems',
                1 => 'by_country',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => '',
                2 => '',
              ),
              'method' => 'salesByCountry',
              'shortHelp' => 'Get opportunities won by country',
              'longHelp' => '',
              'file' => 'modules/RevenueLineItems/clients/base/api/RevenueLineItemsGlobeChartApi.php',
              'className' => 'RevenueLineItemsGlobeChartApi',
              'score' => 8.75,
            ),
          ),
        ),
        'TimePeriods' => 
        array (
          'current' => 
          array (
            0 => 
            array (
              'reqType' => 'GET',
              'path' => 
              array (
                0 => 'TimePeriods',
                1 => 'current',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => '',
              ),
              'method' => 'getCurrentTimePeriod',
              'jsonParams' => 
              array (
              ),
              'shortHelp' => 'Return the Current Timeperiod',
              'longHelp' => 'modules/TimePeriods/clients/base/api/help/TimePeriodsCurrentApi.html',
              'file' => 'modules/TimePeriods/clients/base/api/TimePeriodsCurrentApi.php',
              'className' => 'TimePeriodsCurrentApi',
              'score' => 8.75,
            ),
          ),
          '?' => 
          array (
            0 => 
            array (
              'reqType' => 'GET',
              'path' => 
              array (
                0 => 'TimePeriods',
                1 => '?',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => 'date',
              ),
              'method' => 'getTimePeriodByDate',
              'jsonParams' => 
              array (
              ),
              'shortHelp' => 'Return a Timeperiod by a given date',
              'longHelp' => 'modules/TimePeriods/clients/base/api/help/TimePeriodsGetByDateApi.html',
              'file' => 'modules/TimePeriods/clients/base/api/TimePeriodsCurrentApi.php',
              'className' => 'TimePeriodsCurrentApi',
              'score' => 7.75,
            ),
          ),
        ),
      ),
      'POST' => 
      array (
        '<module>' => 
        array (
          'config' => 
          array (
            0 => 
            array (
              'reqType' => 'POST',
              'path' => 
              array (
                0 => '<module>',
                1 => 'config',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => '',
              ),
              'method' => 'configSave',
              'shortHelp' => 'Creates the config entries for the given module',
              'longHelp' => 'include/api/help/module_config_post_help.html',
              'file' => 'clients/base/api/ConfigModuleApi.php',
              'className' => 'ConfigModuleApi',
              'score' => 8,
            ),
          ),
          'duplicateCheck' => 
          array (
            0 => 
            array (
              'reqType' => 'POST',
              'path' => 
              array (
                0 => '<module>',
                1 => 'duplicateCheck',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => '',
              ),
              'method' => 'checkForDuplicates',
              'shortHelp' => 'Check for duplicate records within a module',
              'longHelp' => 'include/api/help/module_duplicatecheck_post_help.html',
              'file' => 'clients/base/api/DuplicateCheckApi.php',
              'className' => 'DuplicateCheckApi',
              'score' => 8,
            ),
          ),
          'filter' => 
          array (
            0 => 
            array (
              'reqType' => 'POST',
              'path' => 
              array (
                0 => '<module>',
                1 => 'filter',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => '',
              ),
              'method' => 'filterList',
              'shortHelp' => 'Lists filtered records.',
              'longHelp' => 'include/api/help/module_filter_post_help.html',
              'exceptions' => 
              array (
                0 => 'SugarApiExceptionInvalidParameter',
                1 => 'SugarApiExceptionNotAuthorized',
              ),
              'file' => 'clients/base/api/FilterApi.php',
              'className' => 'FilterApi',
              'score' => 8,
            ),
          ),
          'record_list' => 
          array (
            0 => 
            array (
              'reqType' => 'POST',
              'path' => 
              array (
                0 => '<module>',
                1 => 'record_list',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => '',
              ),
              'jsonParams' => 
              array (
                0 => 'filter',
              ),
              'method' => 'recordListCreate',
              'shortHelp' => 'An API to create and save lists of records',
              'longHelp' => 'include/api/help/module_recordlist_post.html',
              'file' => 'clients/base/api/RecordListApi.php',
              'className' => 'RecordListApi',
              'score' => 8,
            ),
          ),
        ),
        'me' => 
        array (
          'password' => 
          array (
            0 => 
            array (
              'reqType' => 'POST',
              'path' => 
              array (
                0 => 'me',
                1 => 'password',
              ),
              'pathVars' => 
              array (
                0 => '',
              ),
              'method' => 'verifyPassword',
              'shortHelp' => 'Verifies current user\'s password',
              'longHelp' => 'include/api/help/me_password_post_help.html',
              'file' => 'clients/base/api/CurrentUserApi.php',
              'className' => 'CurrentUserApi',
              'score' => 8.75,
            ),
          ),
        ),
        'oauth2' => 
        array (
          'token' => 
          array (
            0 => 
            array (
              'reqType' => 'POST',
              'path' => 
              array (
                0 => 'oauth2',
                1 => 'token',
              ),
              'pathVars' => 
              array (
                0 => '',
                1 => '',
              ),
              'method' => 'token',
              'shortHelp' => 'OAuth2 token requests.',
              'longHelp' => 'include/api/help/oauth2_token_post_help.html',
              'noLoginRequired' => true,
              'keepSession' => true,
              'ignoreMetaHash' => true,
              'ignoreSystemStatusError' => true,
              'file' => 'clients/base/api/OAuth2Api.php',
              'className' => 'OAuth2Api',
              'score' => 8.75,
            ),
          ),
          'logout' => 
          array (
            0 => 
            array (
              'reqType' => 'POST',
              'path' => 
              array (
                0 => 'oauth2',
                1 => 'logout',
              ),
              'pathVars' => 
              array (
                0 => '',
                1 => '',
              ),
              'method' => 'logout',
              'shortHelp' => 'OAuth2 logout.',
              'longHelp' => 'include/api/help/oauth2_logout_post_help.html',
              'keepSession' => true,
              'ignoreMetaHash' => true,
              'ignoreSystemStatusError' => true,
              'file' => 'clients/base/api/OAuth2Api.php',
              'className' => 'OAuth2Api',
              'score' => 8.75,
            ),
          ),
        ),
        'Leads' => 
        array (
          'register' => 
          array (
            0 => 
            array (
              'reqType' => 'POST',
              'path' => 
              array (
                0 => 'Leads',
                1 => 'register',
              ),
              'pathVars' => 
              array (
                0 => 'module',
              ),
              'method' => 'createLeadRecord',
              'shortHelp' => 'This method registers leads',
              'longHelp' => 'include/api/help/leads_register_post_help.html',
              'noLoginRequired' => true,
              'file' => 'clients/base/api/RegisterLeadApi.php',
              'className' => 'RegisterLeadApi',
              'score' => 8.75,
            ),
          ),
        ),
        'Dashboards' => 
        array (
          '<module>' => 
          array (
            0 => 
            array (
              'reqType' => 'POST',
              'path' => 
              array (
                0 => 'Dashboards',
                1 => '<module>',
              ),
              'pathVars' => 
              array (
                0 => '',
                1 => 'module',
              ),
              'method' => 'createDashboard',
              'shortHelp' => 'Create a new dashboard for a module',
              'longHelp' => 'include/api/help/create_dashboard.html',
              'file' => 'modules/Dashboards/clients/base/api/DashboardApi.php',
              'className' => 'DashboardApi',
              'score' => 8,
            ),
          ),
        ),
        'Mail' => 
        array (
          'archive' => 
          array (
            0 => 
            array (
              'reqType' => 'POST',
              'path' => 
              array (
                0 => 'Mail',
                1 => 'archive',
              ),
              'pathVars' => 
              array (
                0 => '',
              ),
              'method' => 'archiveMail',
              'shortHelp' => 'Archive Mail Item',
              'longHelp' => 'modules/Emails/clients/base/api/help/mail_archive_help.html',
              'file' => 'modules/Emails/clients/base/api/MailApi.php',
              'className' => 'MailApi',
              'score' => 8.75,
            ),
          ),
          'attachment' => 
          array (
            0 => 
            array (
              'reqType' => 'POST',
              'path' => 
              array (
                0 => 'Mail',
                1 => 'attachment',
              ),
              'pathVars' => 
              array (
                0 => '',
                1 => '',
              ),
              'method' => 'saveAttachment',
              'rawPostContents' => true,
              'shortHelp' => 'Saves a mail attachment.',
              'longHelp' => 'modules/Emails/clients/base/api/help/mail_attachment_post_help.html',
              'file' => 'modules/Emails/clients/base/api/MailApi.php',
              'className' => 'MailApi',
              'score' => 8.75,
            ),
          ),
        ),
        'ForecastManagerWorksheets' => 
        array (
          'assignQuota' => 
          array (
            0 => 
            array (
              'reqType' => 'POST',
              'path' => 
              array (
                0 => 'ForecastManagerWorksheets',
                1 => 'assignQuota',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => 'action',
              ),
              'method' => 'assignQuota',
              'shortHelp' => 'Assign the Quota for Users with out actually committing',
              'longHelp' => 'modules/Forecasts/clients/base/api/help/ForecastWorksheetManagerAssignQuota.html',
              'file' => 'modules/ForecastManagerWorksheets/clients/base/api/ForecastManagerWorksheetsApi.php',
              'className' => 'ForecastManagerWorksheetsApi',
              'score' => 8.75,
            ),
          ),
          'filter' => 
          array (
            0 => 
            array (
              'reqType' => 'POST',
              'path' => 
              array (
                0 => 'ForecastManagerWorksheets',
                1 => 'filter',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => '',
              ),
              'method' => 'filterList',
              'jsonParams' => 
              array (
                0 => 'filter',
              ),
              'shortHelp' => 'Filter records from a single module',
              'longHelp' => 'modules/Forecasts/clients/base/api/help/ForecastWorksheetFilter.html',
              'file' => 'modules/ForecastManagerWorksheets/clients/base/api/ForecastManagerWorksheetsFilterApi.php',
              'className' => 'ForecastManagerWorksheetsFilterApi',
              'score' => 8.75,
            ),
          ),
        ),
        'Forecasts' => 
        array (
          'config' => 
          array (
            0 => 
            array (
              'reqType' => 'POST',
              'path' => 
              array (
                0 => 'Forecasts',
                1 => 'config',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => '',
              ),
              'method' => 'forecastsConfigSave',
              'shortHelp' => 'Creates the config entries for the Forecasts module.',
              'longHelp' => 'modules/Forecasts/clients/base/api/help/ForecastsConfigPut.html',
              'file' => 'modules/Forecasts/clients/base/api/ForecastsConfigApi.php',
              'className' => 'ForecastsConfigApi',
              'score' => 8.75,
            ),
          ),
          'filter' => 
          array (
            0 => 
            array (
              'reqType' => 'POST',
              'path' => 
              array (
                0 => 'Forecasts',
                1 => 'filter',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => '',
              ),
              'method' => 'filterList',
              'shortHelp' => 'Filter records from a single module',
              'longHelp' => 'modules/Forecasts/clients/base/api/help/ForecastsFilter.html',
              'file' => 'modules/Forecasts/clients/base/api/ForecastsFilterApi.php',
              'className' => 'ForecastsFilterApi',
              'score' => 8.75,
            ),
          ),
        ),
        'ForecastWorksheets' => 
        array (
          'filter' => 
          array (
            0 => 
            array (
              'reqType' => 'POST',
              'path' => 
              array (
                0 => 'ForecastWorksheets',
                1 => 'filter',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => '',
              ),
              'method' => 'forecastWorksheetsGet',
              'shortHelp' => 'Filter records from a single module',
              'longHelp' => 'modules/Forecasts/clients/base/api/help/ForecastWorksheetFilter.html',
              'file' => 'modules/ForecastWorksheets/clients/base/api/ForecastWorksheetsFilterApi.php',
              'className' => 'ForecastWorksheetsFilterApi',
              'score' => 8.75,
            ),
          ),
        ),
        'RevenueLineItems' => 
        array (
          'multi-quote' => 
          array (
            0 => 
            array (
              'reqType' => 'POST',
              'path' => 
              array (
                0 => 'RevenueLineItems',
                1 => 'multi-quote',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => 'action',
              ),
              'method' => 'multiConvertToQuote',
              'shortHelp' => 'Convert a Revenue Line Item Into A Quote Record',
              'longHelp' => 'modules/RevenueLineItems/clients/base/api/help/multi_convert_to_quote.html',
              'file' => 'modules/RevenueLineItems/clients/base/api/RevenueLineItemToQuoteConvertApi.php',
              'className' => 'RevenueLineItemToQuoteConvertApi',
              'score' => 8.75,
            ),
          ),
        ),
      ),
      'PUT' => 
      array (
        '<module>' => 
        array (
          'config' => 
          array (
            0 => 
            array (
              'reqType' => 'PUT',
              'path' => 
              array (
                0 => '<module>',
                1 => 'config',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => '',
              ),
              'method' => 'configSave',
              'shortHelp' => 'Updates the config entries for given module',
              'longHelp' => 'include/api/help/module_config_put_help.html',
              'file' => 'clients/base/api/ConfigModuleApi.php',
              'className' => 'ConfigModuleApi',
              'score' => 8,
            ),
          ),
          'MassUpdate' => 
          array (
            0 => 
            array (
              'reqType' => 'PUT',
              'path' => 
              array (
                0 => '<module>',
                1 => 'MassUpdate',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => '',
              ),
              'jsonParams' => 
              array (
                0 => 'filter',
              ),
              'method' => 'massUpdate',
              'shortHelp' => 'An API to handle mass update.',
              'longHelp' => 'include/api/help/module_massupdate_put_help.html',
              'file' => 'clients/base/api/MassUpdateApi.php',
              'className' => 'MassUpdateApi',
              'score' => 8,
            ),
          ),
          '?' => 
          array (
            0 => 
            array (
              'reqType' => 'PUT',
              'path' => 
              array (
                0 => '<module>',
                1 => '?',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => 'record',
              ),
              'method' => 'updateRecord',
              'shortHelp' => 'This method updates a record of the specified type',
              'longHelp' => 'include/api/help/module_record_put_help.html',
              'file' => 'clients/base/api/ModuleApi.php',
              'className' => 'ModuleApi',
              'score' => 7,
            ),
          ),
        ),
        'me' => 
        array (
          'password' => 
          array (
            0 => 
            array (
              'reqType' => 'PUT',
              'path' => 
              array (
                0 => 'me',
                1 => 'password',
              ),
              'pathVars' => 
              array (
                0 => '',
              ),
              'method' => 'updatePassword',
              'shortHelp' => 'Updates current user\'s password',
              'longHelp' => 'include/api/help/me_password_put_help.html',
              'file' => 'clients/base/api/CurrentUserApi.php',
              'className' => 'CurrentUserApi',
              'score' => 8.75,
            ),
          ),
          'preferences' => 
          array (
            0 => 
            array (
              'reqType' => 'PUT',
              'path' => 
              array (
                0 => 'me',
                1 => 'preferences',
              ),
              'pathVars' => 
              array (
              ),
              'method' => 'userPreferencesSave',
              'shortHelp' => 'Mass Save Updated Preferences For a User',
              'longHelp' => 'include/api/help/me_preferences_put_help.html',
              'keepSession' => true,
              'file' => 'clients/base/api/CurrentUserApi.php',
              'className' => 'CurrentUserApi',
              'score' => 8.75,
            ),
          ),
        ),
        'Forecasts' => 
        array (
          'config' => 
          array (
            0 => 
            array (
              'reqType' => 'PUT',
              'path' => 
              array (
                0 => 'Forecasts',
                1 => 'config',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => '',
              ),
              'method' => 'forecastsConfigSave',
              'shortHelp' => 'Updates the config entries for the Forecasts module',
              'longHelp' => 'modules/Forecasts/clients/base/api/help/ForecastsConfigPut.html',
              'file' => 'modules/Forecasts/clients/base/api/ForecastsConfigApi.php',
              'className' => 'ForecastsConfigApi',
              'score' => 8.75,
            ),
          ),
        ),
        'ForecastSchedule' => 
        array (
          '?' => 
          array (
            0 => 
            array (
              'reqType' => 'PUT',
              'path' => 
              array (
                0 => 'ForecastSchedule',
                1 => '?',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => 'record',
              ),
              'method' => 'forecastScheduleSave',
              'shortHelp' => 'Deprecated - Updates a ForecastSchedule model',
              'longHelp' => 'modules/ForecastSchedule/clients/base/api/help/ForecastScheduleApi.html',
              'file' => 'modules/ForecastSchedule/clients/base/api/ForecastScheduleApi.php',
              'className' => 'ForecastScheduleApi',
              'score' => 7.75,
            ),
          ),
        ),
        'ForecastWorksheets' => 
        array (
          '?' => 
          array (
            0 => 
            array (
              'reqType' => 'PUT',
              'path' => 
              array (
                0 => 'ForecastWorksheets',
                1 => '?',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => 'record',
              ),
              'method' => 'forecastWorksheetSave',
              'shortHelp' => 'Updates a ForecastWorksheet model',
              'longHelp' => 'modules/Forecasts/clients/base/api/help/ForecastWorksheetPut.html',
              'file' => 'modules/ForecastWorksheets/clients/base/api/ForecastWorksheetsApi.php',
              'className' => 'ForecastWorksheetsApi',
              'score' => 7.75,
            ),
          ),
        ),
      ),
      'DELETE' => 
      array (
        '<module>' => 
        array (
          'MassUpdate' => 
          array (
            0 => 
            array (
              'reqType' => 'DELETE',
              'path' => 
              array (
                0 => '<module>',
                1 => 'MassUpdate',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => '',
              ),
              'jsonParams' => 
              array (
                0 => 'filter',
              ),
              'method' => 'massDelete',
              'shortHelp' => 'An API to handle mass delete.',
              'longHelp' => 'include/api/help/module_massupdate_delete_help.html',
              'file' => 'clients/base/api/MassUpdateApi.php',
              'className' => 'MassUpdateApi',
              'score' => 8,
            ),
          ),
          '?' => 
          array (
            0 => 
            array (
              'reqType' => 'DELETE',
              'path' => 
              array (
                0 => '<module>',
                1 => '?',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => 'record',
              ),
              'method' => 'deleteRecord',
              'shortHelp' => 'This method deletes a record of the specified type',
              'longHelp' => 'include/api/help/module_record_delete_help.html',
              'file' => 'clients/base/api/ModuleApi.php',
              'className' => 'ModuleApi',
              'score' => 7,
            ),
          ),
        ),
        'Users' => 
        array (
          '?' => 
          array (
            0 => 
            array (
              'reqType' => 'DELETE',
              'path' => 
              array (
                0 => 'Users',
                1 => '?',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => 'record',
              ),
              'method' => 'deleteUser',
              'shortHelp' => 'This method deletes a User record',
              'longHelp' => 'modules/Users/api/help/UsersApi.html',
              'file' => 'modules/Users/clients/base/api/UsersApi.php',
              'className' => 'UsersApi',
              'score' => 7.75,
            ),
          ),
        ),
      ),
    ),
    'mobile' => 
    array (
      'POST' => 
      array (
        'oauth2' => 
        array (
          'token' => 
          array (
            0 => 
            array (
              'reqType' => 'POST',
              'path' => 
              array (
                0 => 'oauth2',
                1 => 'token',
              ),
              'pathVars' => 
              array (
                0 => '',
                1 => '',
              ),
              'method' => 'token',
              'shortHelp' => 'OAuth2 token requests.',
              'longHelp' => 'include/api/help/oauth2_token_post_help.html',
              'noLoginRequired' => true,
              'keepSession' => true,
              'ignoreMetaHash' => true,
              'ignoreSystemStatusError' => true,
              'file' => 'clients/mobile/api/OAuth2MobileApi.php',
              'className' => 'OAuth2MobileApi',
              'score' => 8.75,
            ),
          ),
          'logout' => 
          array (
            0 => 
            array (
              'reqType' => 'POST',
              'path' => 
              array (
                0 => 'oauth2',
                1 => 'logout',
              ),
              'pathVars' => 
              array (
                0 => '',
                1 => '',
              ),
              'method' => 'logout',
              'shortHelp' => 'OAuth2 logout.',
              'longHelp' => 'include/api/help/oauth2_logout_post_help.html',
              'keepSession' => true,
              'ignoreMetaHash' => true,
              'ignoreSystemStatusError' => true,
              'file' => 'clients/mobile/api/OAuth2MobileApi.php',
              'className' => 'OAuth2MobileApi',
              'score' => 8.75,
            ),
          ),
        ),
      ),
    ),
  ),
  3 => 
  array (
    'base' => 
    array (
      'GET' => 
      array (
        'me' => 
        array (
          'preference' => 
          array (
            '?' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => 'me',
                  1 => 'preference',
                  2 => '?',
                ),
                'pathVars' => 
                array (
                  0 => '',
                  1 => '',
                  2 => 'preference_name',
                ),
                'method' => 'userPreference',
                'shortHelp' => 'Returns a specific preference for the current user',
                'longHelp' => 'include/api/help/me_preference_preference_name_get_help.html',
                'file' => 'clients/base/api/CurrentUserApi.php',
                'className' => 'CurrentUserApi',
                'score' => 9.5,
              ),
            ),
          ),
        ),
        '<module>' => 
        array (
          'export' => 
          array (
            '?' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => '<module>',
                  1 => 'export',
                  2 => '?',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => '',
                  2 => 'record_list_id',
                ),
                'method' => 'export',
                'rawReply' => true,
                'allowDownloadCookie' => true,
                'shortHelp' => 'Returns a record set in CSV format along with HTTP headers to indicate content type.',
                'longHelp' => 'include/api/help/module_export_get_help.html',
                'file' => 'clients/base/api/ExportApi.php',
                'className' => 'ExportApi',
                'score' => 8.75,
              ),
            ),
          ),
          '?' => 
          array (
            'file' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => '<module>',
                  1 => '?',
                  2 => 'file',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => 'record',
                  2 => '',
                ),
                'method' => 'getFileList',
                'shortHelp' => 'Gets a listing of files related to a field for a module record.',
                'longHelp' => 'include/api/help/module_record_file_get_help.html',
                'file' => 'clients/base/api/FileApi.php',
                'className' => 'FileApi',
                'score' => 8.75,
              ),
            ),
            'vcard' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => '<module>',
                  1 => '?',
                  2 => 'vcard',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => 'record',
                  2 => '',
                ),
                'method' => 'vCardDownload',
                'rawReply' => true,
                'allowDownloadCookie' => true,
                'shortHelp' => 'An API to download a contact as a vCard.',
                'longHelp' => 'include/api/help/module_vcarddownload_get_help.html',
                'file' => 'clients/base/api/vCardApi.php',
                'className' => 'vCardApi',
                'score' => 8.75,
              ),
            ),
            'audit' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => '<module>',
                  1 => '?',
                  2 => 'audit',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => 'record',
                  2 => 'audit',
                ),
                'method' => 'viewChangeLog',
                'shortHelp' => 'View change log in record view',
                'longHelp' => 'include/api/help/audit_get_help.html',
                'file' => 'modules/Audit/clients/base/api/AuditApi.php',
                'className' => 'AuditApi',
                'score' => 8.75,
              ),
            ),
          ),
          'filter' => 
          array (
            '?' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => '<module>',
                  1 => 'filter',
                  2 => '?',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => '',
                  2 => 'record',
                ),
                'method' => 'filterById',
                'shortHelp' => 'Filter records for a module by a predefined filter id.',
                'longHelp' => 'include/api/help/module_filter_record_get_help.html',
                'exceptions' => 
                array (
                  0 => 'SugarApiExceptionNotFound',
                  1 => 'SugarApiExceptionInvalidParameter',
                  2 => 'SugarApiExceptionNotAuthorized',
                ),
                'file' => 'clients/base/api/FilterApi.php',
                'className' => 'FilterApi',
                'score' => 8.75,
              ),
            ),
          ),
          'enum' => 
          array (
            '?' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => '<module>',
                  1 => 'enum',
                  2 => '?',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => 'enum',
                  2 => 'field',
                ),
                'method' => 'getEnumValues',
                'shortHelp' => 'This method returns enum values for a specified field',
                'longHelp' => 'include/api/help/module_enum_get_help.html',
                'file' => 'clients/base/api/ModuleApi.php',
                'className' => 'ModuleApi',
                'score' => 8.75,
              ),
            ),
          ),
          'record_list' => 
          array (
            '?' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => '<module>',
                  1 => 'record_list',
                  2 => '?',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => '',
                  2 => 'record_list_id',
                ),
                'method' => 'recordListGet',
                'shortHelp' => 'An API to fetch a previously created record list',
                'longHelp' => 'include/api/help/module_recordlist_get.html',
                'file' => 'clients/base/api/RecordListApi.php',
                'className' => 'RecordListApi',
                'score' => 8.75,
              ),
            ),
          ),
          'Activities' => 
          array (
            'filter' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => '<module>',
                  1 => 'Activities',
                  2 => 'filter',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => '',
                ),
                'method' => 'getModuleActivities',
                'shortHelp' => 'This method retrieves a filtered list of a module\'s activities',
                'longHelp' => 'modules/ActivityStream/clients/base/api/help/moduleActivities.html',
                'file' => 'modules/ActivityStream/clients/base/api/ActivitiesApi.php',
                'className' => 'ActivitiesApi',
                'score' => 9.75,
              ),
            ),
          ),
        ),
        'lang' => 
        array (
          'public' => 
          array (
            '?' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => 'lang',
                  1 => 'public',
                  2 => '?',
                ),
                'pathVars' => 
                array (
                  0 => '',
                  1 => '',
                  2 => 'lang',
                ),
                'method' => 'getPublicLanguage',
                'shortHelp' => 'Returns the public labels for the application',
                'longHelp' => 'include/api/html/metadata_all_help.html',
                'noLoginRequired' => true,
                'rawReply' => true,
                'noEtag' => true,
                'ignoreMetaHash' => true,
                'ignoreSystemStatusError' => true,
                'file' => 'clients/base/api/MetadataApi.php',
                'className' => 'MetadataApi',
                'score' => 9.5,
              ),
            ),
          ),
        ),
        'connector' => 
        array (
          'twitter' => 
          array (
            'currentUser' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => 'connector',
                  1 => 'twitter',
                  2 => 'currentUser',
                ),
                'pathVars' => 
                array (
                  0 => 'connector',
                  1 => 'module',
                  2 => 'twitterId',
                ),
                'method' => 'getCurrentUser',
                'shortHelp' => 'Gets current tweets for a user',
                'longHelp' => 'include/api/help/twitter_get_help.html',
                'file' => 'clients/base/api/TwitterApi.php',
                'className' => 'TwitterApi',
                'score' => 10.5,
              ),
            ),
            '?' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => 'connector',
                  1 => 'twitter',
                  2 => '?',
                ),
                'pathVars' => 
                array (
                  0 => 'connector',
                  1 => 'module',
                  2 => 'twitterId',
                ),
                'method' => 'getTweets',
                'shortHelp' => 'Gets current tweets for a user',
                'longHelp' => 'include/api/help/twitter_get_help.html',
                'file' => 'clients/base/api/TwitterApi.php',
                'className' => 'TwitterApi',
                'score' => 9.5,
              ),
            ),
          ),
        ),
        'Accounts' => 
        array (
          '?' => 
          array (
            'opportunity_stats' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => 'Accounts',
                  1 => '?',
                  2 => 'opportunity_stats',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => 'record',
                ),
                'method' => 'opportunityStats',
                'shortHelp' => 'Get opportunity statistics for current record',
                'longHelp' => '',
                'file' => 'modules/Accounts/clients/base/api/AccountsApi.php',
                'className' => 'AccountsApi',
                'score' => 9.5,
              ),
            ),
          ),
        ),
        'Contacts' => 
        array (
          '?' => 
          array (
            'opportunity_stats' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => 'Contacts',
                  1 => '?',
                  2 => 'opportunity_stats',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => 'record',
                ),
                'method' => 'opportunityStats',
                'shortHelp' => 'Get opportunity statistics for current record',
                'longHelp' => '',
                'file' => 'modules/Contacts/clients/base/api/ContactsApi.php',
                'className' => 'ContactsApi',
                'score' => 9.5,
              ),
            ),
            'influencers' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => 'Contacts',
                  1 => '?',
                  2 => 'influencers',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => 'record',
                ),
                'method' => 'influencers',
                'shortHelp' => '',
                'longHelp' => '',
                'file' => 'modules/Contacts/clients/base/api/ContactsApi.php',
                'className' => 'ContactsApi',
                'score' => 9.5,
              ),
            ),
          ),
        ),
        'Mail' => 
        array (
          'recipients' => 
          array (
            'find' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => 'Mail',
                  1 => 'recipients',
                  2 => 'find',
                ),
                'pathVars' => 
                array (
                  0 => '',
                ),
                'method' => 'findRecipients',
                'shortHelp' => 'Search For Email Recipients',
                'longHelp' => 'modules/Emails/clients/base/api/help/mail_recipients_find_get_help.html',
                'file' => 'modules/Emails/clients/base/api/MailApi.php',
                'className' => 'MailApi',
                'score' => 10.5,
              ),
            ),
          ),
        ),
        'ExpressionEngine' => 
        array (
          '?' => 
          array (
            'related' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => 'ExpressionEngine',
                  1 => '?',
                  2 => 'related',
                ),
                'pathVars' => 
                array (
                  0 => '',
                  1 => 'record',
                  2 => '',
                ),
                'method' => 'getRelatedValues',
                'shortHelp' => 'Retrieve the Chart data for the given data in the Forecast Module',
                'longHelp' => 'modules/Forecasts/clients/base/api/help/ForecastChartApi.html',
                'file' => 'modules/ExpressionEngine/clients/base/api/RelatedValueApi.php',
                'className' => 'RelatedValueApi',
                'score' => 9.5,
              ),
            ),
          ),
        ),
        'Filters' => 
        array (
          '?' => 
          array (
            'used' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => 'Filters',
                  1 => '?',
                  2 => 'used',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => 'module_name',
                  2 => 'used',
                ),
                'method' => 'getUsed',
                'shortHelp' => 'This method gets the used filter for the current user',
                'longHelp' => '',
                'file' => 'modules/Filters/clients/base/api/PreviouslyUsedFiltersApi.php',
                'className' => 'PreviouslyUsedFiltersApi',
                'score' => 9.5,
              ),
            ),
          ),
        ),
        'ForecastManagerWorksheets' => 
        array (
          '?' => 
          array (
            '?' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => 'ForecastManagerWorksheets',
                  1 => '?',
                  2 => '?',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => 'timeperiod_id',
                  2 => 'user_id',
                ),
                'method' => 'ForecastManagerWorksheetsGet',
                'jsonParams' => 
                array (
                ),
                'shortHelp' => 'Filter records from a single module',
                'longHelp' => 'modules/Forecasts/clients/base/api/help/ForecastWorksheetGet.html',
                'file' => 'modules/ForecastManagerWorksheets/clients/base/api/ForecastManagerWorksheetsFilterApi.php',
                'className' => 'ForecastManagerWorksheetsFilterApi',
                'score' => 8.5,
              ),
            ),
          ),
          'chart' => 
          array (
            '?' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => 'ForecastManagerWorksheets',
                  1 => 'chart',
                  2 => '?',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => '',
                  2 => 'timeperiod_id',
                ),
                'method' => 'forecastManagerWorksheetsChartGet',
                'jsonParams' => 
                array (
                ),
                'shortHelp' => 'Filter records and reformat data for chart presentation',
                'longHelp' => 'modules/Forecasts/clients/base/api/help/forecastManagerWorksheetsChartGet.html',
                'file' => 'modules/ForecastManagerWorksheets/clients/base/api/ForecastManagerWorksheetsFilterApi.php',
                'className' => 'ForecastManagerWorksheetsFilterApi',
                'score' => 9.5,
              ),
            ),
          ),
        ),
        'Forecasts' => 
        array (
          'user' => 
          array (
            '?' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => 'Forecasts',
                  1 => 'user',
                  2 => '?',
                ),
                'pathVars' => 
                array (
                  0 => '',
                  1 => '',
                  2 => 'user_id',
                ),
                'method' => 'retrieveSelectedUser',
                'shortHelp' => 'Returns selectedUser object for given user',
                'longHelp' => 'modules/Forecasts/clients/base/api/help/ForecastsApiUserGet.html',
                'file' => 'modules/Forecasts/clients/base/api/ForecastsApi.php',
                'className' => 'ForecastsApi',
                'score' => 9.5,
              ),
            ),
          ),
          'enum' => 
          array (
            'selectedTimePeriod' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => 'Forecasts',
                  1 => 'enum',
                  2 => 'selectedTimePeriod',
                ),
                'pathVars' => 
                array (
                  0 => '',
                  1 => '',
                  2 => '',
                ),
                'method' => 'timeperiod',
                'shortHelp' => 'forecast timeperiod',
                'longHelp' => 'modules/Forecasts/clients/base/api/help/ForecastApiTimePeriodGet.html',
                'file' => 'modules/Forecasts/clients/base/api/ForecastsApi.php',
                'className' => 'ForecastsApi',
                'score' => 10.5,
              ),
            ),
          ),
          'reportees' => 
          array (
            '?' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => 'Forecasts',
                  1 => 'reportees',
                  2 => '?',
                ),
                'pathVars' => 
                array (
                  0 => '',
                  1 => '',
                  2 => 'user_id',
                ),
                'method' => 'getReportees',
                'shortHelp' => 'Gets reportees to a user by id',
                'longHelp' => 'modules/Forecasts/clients/base/api/help/ForecastApiReporteesGet.html',
                'file' => 'modules/Forecasts/clients/base/api/ForecastsApi.php',
                'className' => 'ForecastsApi',
                'score' => 9.5,
              ),
            ),
          ),
          'orgtree' => 
          array (
            '?' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => 'Forecasts',
                  1 => 'orgtree',
                  2 => '?',
                ),
                'pathVars' => 
                array (
                  0 => '',
                  1 => '',
                  2 => 'user_id',
                ),
                'method' => 'getOrgTree',
                'shortHelp' => 'Gets managers and reportees of user',
                'longHelp' => 'modules/Forecasts/clients/base/api/help/ForecastApiOrgetreeGet.html',
                'file' => 'modules/Forecasts/clients/base/api/ForecastsApi.php',
                'className' => 'ForecastsApi',
                'score' => 9.5,
              ),
            ),
          ),
        ),
        'ForecastWorksheets' => 
        array (
          '?' => 
          array (
            '?' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => 'ForecastWorksheets',
                  1 => '?',
                  2 => '?',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => 'timeperiod_id',
                  2 => 'user_id',
                ),
                'method' => 'forecastWorksheetsGet',
                'jsonParams' => 
                array (
                ),
                'shortHelp' => 'Filter records from a single module',
                'longHelp' => 'modules/Forecasts/clients/base/api/help/ForecastWorksheetGet.html',
                'file' => 'modules/ForecastWorksheets/clients/base/api/ForecastWorksheetsFilterApi.php',
                'className' => 'ForecastWorksheetsFilterApi',
                'score' => 8.5,
              ),
            ),
          ),
          'chart' => 
          array (
            '?' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => 'ForecastWorksheets',
                  1 => 'chart',
                  2 => '?',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => '',
                  2 => 'timeperiod_id',
                ),
                'method' => 'forecastWorksheetsChartGet',
                'jsonParams' => 
                array (
                ),
                'shortHelp' => 'Filter records and reformat data for chart presentation',
                'longHelp' => 'modules/Forecasts/clients/base/api/help/ForecastsWorksheetChartGet.html',
                'file' => 'modules/ForecastWorksheets/clients/base/api/ForecastWorksheetsFilterApi.php',
                'className' => 'ForecastWorksheetsFilterApi',
                'score' => 9.5,
              ),
            ),
          ),
        ),
        'Notifications' => 
        array (
          'pull' => 
          array (
            'filter' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => 'Notifications',
                  1 => 'pull',
                  2 => 'filter',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                ),
                'method' => 'filterList',
                'ignoreMetaHash' => true,
                'file' => 'modules/Notifications/clients/base/api/NotificationsApi.php',
                'className' => 'NotificationsApi',
                'score' => 10.5,
              ),
            ),
          ),
        ),
        'Opportunities' => 
        array (
          '?' => 
          array (
            'influencers' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => 'Opportunities',
                  1 => '?',
                  2 => 'influencers',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => 'record',
                ),
                'method' => 'influencers',
                'shortHelp' => '',
                'longHelp' => '',
                'file' => 'modules/Opportunities/clients/base/api/OpportunitiesApi.php',
                'className' => 'OpportunitiesApi',
                'score' => 9.5,
              ),
            ),
            'experts' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => 'Opportunities',
                  1 => '?',
                  2 => 'experts',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => 'record',
                ),
                'method' => 'recommendExperts',
                'shortHelp' => 'Recommend users to help with a particular record',
                'longHelp' => 'Test',
                'file' => 'modules/Opportunities/clients/base/api/OpportunitiesApi.php',
                'className' => 'OpportunitiesApi',
                'score' => 9.5,
              ),
            ),
            'expertsTypeahead' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => 'Opportunities',
                  1 => '?',
                  2 => 'expertsTypeahead',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => 'record',
                ),
                'method' => 'recommendExpertsTypeahead',
                'shortHelp' => 'Typeahead provider for recommended users',
                'longHelp' => '',
                'file' => 'modules/Opportunities/clients/base/api/OpportunitiesApi.php',
                'className' => 'OpportunitiesApi',
                'score' => 9.5,
              ),
            ),
            'similar' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => 'Opportunities',
                  1 => '?',
                  2 => 'similar',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => 'record',
                ),
                'method' => 'similarDeals',
                'shortHelp' => 'Show deals similar to the current record',
                'longHelp' => '',
                'file' => 'modules/Opportunities/clients/base/api/OpportunitiesApi.php',
                'className' => 'OpportunitiesApi',
                'score' => 9.5,
              ),
            ),
          ),
          'chart' => 
          array (
            'pipeline' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => 'Opportunities',
                  1 => 'chart',
                  2 => 'pipeline',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => '',
                  2 => '',
                ),
                'method' => 'pipeline',
                'shortHelp' => 'Get the current opportunity pipeline data for the current timeperiod',
                'longHelp' => 'modules/Opportunities/clients/base/api/help/OpportunitiesPipelineChartApi.html',
                'file' => 'modules/Opportunities/clients/base/api/OpportunitiesPipelineChartApi.php',
                'className' => 'OpportunitiesPipelineChartApi',
                'score' => 10.5,
              ),
            ),
          ),
        ),
        'Products' => 
        array (
          'chart' => 
          array (
            'pipeline' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => 'Products',
                  1 => 'chart',
                  2 => 'pipeline',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => '',
                  2 => '',
                ),
                'method' => 'pipeline',
                'shortHelp' => 'Get the current revenue line items pipeline data for the current timeperiod',
                'longHelp' => 'modules/Opportunities/clients/base/api/help/OpportunitiesPipelineChartApi.html',
                'file' => 'modules/Products/clients/base/api/ProductsPipelineChartApi.php',
                'className' => 'ProductsPipelineChartApi',
                'score' => 10.5,
              ),
            ),
          ),
        ),
        'Reports' => 
        array (
          '?' => 
          array (
            '?' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => 'Reports',
                  1 => '?',
                  2 => '?',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => 'record',
                  2 => 'export_type',
                ),
                'method' => 'exportRecord',
                'rawReply' => true,
                'shortHelp' => 'This method exports a record in the specified type',
                'longHelp' => '',
                'file' => 'modules/Reports/clients/base/api/ReportsExportApi.php',
                'className' => 'ReportsExportApi',
                'score' => 8.5,
              ),
            ),
          ),
        ),
        'RevenueLineItems' => 
        array (
          'chart' => 
          array (
            'pipeline' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => 'RevenueLineItems',
                  1 => 'chart',
                  2 => 'pipeline',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => '',
                  2 => '',
                ),
                'method' => 'pipeline',
                'shortHelp' => 'Get the current revenue line items pipeline data for the current timeperiod',
                'longHelp' => 'modules/Opportunities/clients/base/api/help/OpportunitiesPipelineChartApi.html',
                'file' => 'modules/RevenueLineItems/clients/base/api/RevenueLineItemsPipelineChartApi.php',
                'className' => 'RevenueLineItemsPipelineChartApi',
                'score' => 10.5,
              ),
            ),
          ),
        ),
      ),
      'POST' => 
      array (
        'me' => 
        array (
          'preference' => 
          array (
            '?' => 
            array (
              0 => 
              array (
                'reqType' => 'POST',
                'path' => 
                array (
                  0 => 'me',
                  1 => 'preference',
                  2 => '?',
                ),
                'pathVars' => 
                array (
                  0 => '',
                  1 => '',
                  2 => 'preference_name',
                ),
                'method' => 'userPreferenceSave',
                'shortHelp' => 'Create a preference for the current user',
                'longHelp' => 'include/api/help/me_preference_preference_name_post_help.html',
                'keepSession' => true,
                'file' => 'clients/base/api/CurrentUserApi.php',
                'className' => 'CurrentUserApi',
                'score' => 9.5,
              ),
            ),
          ),
        ),
        'connector' => 
        array (
          'dnb' => 
          array (
            '?' => 
            array (
              0 => 
              array (
                'reqType' => 'POST',
                'path' => 
                array (
                  0 => 'connector',
                  1 => 'dnb',
                  2 => '?',
                ),
                'pathVars' => 
                array (
                  0 => 'connector',
                  1 => 'dnb',
                  2 => 'qtype',
                ),
                'method' => 'dnbDirectPost',
                'shortHelp' => 'Invoke DNB API using POST',
                'longHelp' => 'include/api/help/dnb_post_help.html',
                'keepSession' => true,
                'file' => 'clients/base/api/DnbApi.php',
                'className' => 'DnbApi',
                'score' => 9.5,
              ),
            ),
          ),
        ),
        '<module>' => 
        array (
          'filter' => 
          array (
            'count' => 
            array (
              0 => 
              array (
                'reqType' => 'POST',
                'path' => 
                array (
                  0 => '<module>',
                  1 => 'filter',
                  2 => 'count',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => '',
                  2 => '',
                ),
                'method' => 'filterListCount',
                'shortHelp' => 'Lists filtered records.',
                'longHelp' => 'include/api/help/module_filter_post_help.html',
                'exceptions' => 
                array (
                  0 => 'SugarApiExceptionNotAuthorized',
                ),
                'file' => 'clients/base/api/FilterApi.php',
                'className' => 'FilterApi',
                'score' => 9.75,
              ),
            ),
          ),
          '?' => 
          array (
            'link' => 
            array (
              0 => 
              array (
                'reqType' => 'POST',
                'path' => 
                array (
                  0 => '<module>',
                  1 => '?',
                  2 => 'link',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => 'record',
                  2 => '',
                ),
                'method' => 'createRelatedLinks',
                'shortHelp' => 'Relates existing records to this module.',
                'longHelp' => 'include/api/help/module_record_link_post_help.html',
                'file' => 'clients/base/api/RelateRecordApi.php',
                'className' => 'RelateRecordApi',
                'score' => 8.75,
              ),
            ),
            'subscribe' => 
            array (
              0 => 
              array (
                'reqType' => 'POST',
                'path' => 
                array (
                  0 => '<module>',
                  1 => '?',
                  2 => 'subscribe',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => 'record',
                ),
                'method' => 'subscribeToRecord',
                'shortHelp' => 'This method subscribes the user to the current record, for activity stream updates.',
                'longHelp' => 'modules/ActivityStream/clients/base/api/help/recordSubscribe.html',
                'file' => 'modules/ActivityStream/clients/base/api/SubscriptionsApi.php',
                'className' => 'SubscriptionsApi',
                'score' => 8.75,
              ),
            ),
          ),
          'file' => 
          array (
            'vcard_import' => 
            array (
              0 => 
              array (
                'reqType' => 'POST',
                'path' => 
                array (
                  0 => '<module>',
                  1 => 'file',
                  2 => 'vcard_import',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => '',
                  2 => '',
                ),
                'method' => 'vCardImport',
                'rawPostContents' => true,
                'shortHelp' => 'Imports a person record from a vcard',
                'longHelp' => 'include/api/help/module_file_vcard_import_post_help.html',
                'file' => 'clients/base/api/vCardApi.php',
                'className' => 'vCardApi',
                'score' => 9.75,
              ),
            ),
          ),
        ),
        'oauth2' => 
        array (
          'bwc' => 
          array (
            'login' => 
            array (
              0 => 
              array (
                'reqType' => 'POST',
                'path' => 
                array (
                  0 => 'oauth2',
                  1 => 'bwc',
                  2 => 'login',
                ),
                'pathVars' => 
                array (
                  0 => '',
                  1 => '',
                  2 => '',
                ),
                'method' => 'bwcLogin',
                'shortHelp' => 'Bwc login for bwc modules. Internal usage only.',
                'longHelp' => 'include/api/help/oauth2_bwc_login_post_help.html',
                'keepSession' => true,
                'ignoreMetaHash' => true,
                'ignoreSystemStatusError' => true,
                'file' => 'clients/base/api/OAuth2Api.php',
                'className' => 'OAuth2Api',
                'score' => 10.5,
              ),
            ),
          ),
          'sudo' => 
          array (
            '?' => 
            array (
              0 => 
              array (
                'reqType' => 'POST',
                'path' => 
                array (
                  0 => 'oauth2',
                  1 => 'sudo',
                  2 => '?',
                ),
                'pathVars' => 
                array (
                  0 => '',
                  1 => '',
                  2 => 'user_name',
                ),
                'method' => 'sudo',
                'shortHelp' => 'Get an access token for another user',
                'longHelp' => 'include/api/help/oauth2_sudo_post_help.html',
                'ignoreMetaHash' => true,
                'file' => 'clients/base/api/OAuth2Api.php',
                'className' => 'OAuth2Api',
                'score' => 9.5,
              ),
            ),
          ),
        ),
        'Mail' => 
        array (
          'recipients' => 
          array (
            'lookup' => 
            array (
              0 => 
              array (
                'reqType' => 'POST',
                'path' => 
                array (
                  0 => 'Mail',
                  1 => 'recipients',
                  2 => 'lookup',
                ),
                'pathVars' => 
                array (
                  0 => '',
                ),
                'method' => 'recipientLookup',
                'shortHelp' => 'Lookup Email Recipient Info',
                'longHelp' => 'modules/Emails/clients/base/api/help/mail_recipients_lookup_post_help.html',
                'file' => 'modules/Emails/clients/base/api/MailApi.php',
                'className' => 'MailApi',
                'score' => 10.5,
              ),
            ),
          ),
          'address' => 
          array (
            'validate' => 
            array (
              0 => 
              array (
                'reqType' => 'POST',
                'path' => 
                array (
                  0 => 'Mail',
                  1 => 'address',
                  2 => 'validate',
                ),
                'pathVars' => 
                array (
                  0 => '',
                ),
                'method' => 'validateEmailAddresses',
                'shortHelp' => 'Validate One Or More Email Address',
                'longHelp' => 'modules/Emails/clients/base/api/help/mail_address_validate_post_help.html',
                'file' => 'modules/Emails/clients/base/api/MailApi.php',
                'className' => 'MailApi',
                'score' => 10.5,
              ),
            ),
          ),
        ),
        'Leads' => 
        array (
          '?' => 
          array (
            'convert' => 
            array (
              0 => 
              array (
                'reqType' => 'POST',
                'path' => 
                array (
                  0 => 'Leads',
                  1 => '?',
                  2 => 'convert',
                ),
                'pathVars' => 
                array (
                  0 => '',
                  1 => 'leadId',
                  2 => '',
                ),
                'method' => 'convertLead',
                'shortHelp' => 'Convert Lead to a Contact and optionally link it to a new or existing module such as an Account or Opportunity',
                'longHelp' => 'modules/Leads/clients/base/api/help/LeadConvertApi.html',
                'file' => 'modules/Leads/clients/base/api/LeadConvertApi.php',
                'className' => 'LeadConvertApi',
                'score' => 9.5,
              ),
            ),
          ),
        ),
        'Reports' => 
        array (
          '?' => 
          array (
            'record_list' => 
            array (
              0 => 
              array (
                'reqType' => 'POST',
                'path' => 
                array (
                  0 => 'Reports',
                  1 => '?',
                  2 => 'record_list',
                ),
                'pathVars' => 
                array (
                  0 => '',
                  1 => 'record',
                  2 => '',
                ),
                'method' => 'createRecordList',
                'shortHelp' => 'An API to create a record list from a saved report',
                'longHelp' => 'modules/Reports/api/help/module_recordlist_post.html',
                'file' => 'modules/Reports/clients/base/api/ReportsApi.php',
                'className' => 'ReportsApi',
                'score' => 9.5,
              ),
            ),
          ),
          'chart' => 
          array (
            '?' => 
            array (
              0 => 
              array (
                'reqType' => 'POST',
                'path' => 
                array (
                  0 => 'Reports',
                  1 => 'chart',
                  2 => '?',
                ),
                'pathVars' => 
                array (
                  0 => '',
                  1 => '',
                  2 => 'reportId',
                ),
                'method' => 'getSavedReportChartById',
                'shortHelp' => 'Updates a ForecastWorksheet model',
                'longHelp' => 'modules/Reports/clients/base/api/help/ReportsDashletApiGetSavedReportById.html',
                'file' => 'modules/Reports/clients/base/api/ReportsDashletsApi.php',
                'className' => 'ReportsDashletsApi',
                'score' => 9.5,
              ),
            ),
          ),
        ),
        'RevenueLineItems' => 
        array (
          '?' => 
          array (
            'quote' => 
            array (
              0 => 
              array (
                'reqType' => 'POST',
                'path' => 
                array (
                  0 => 'RevenueLineItems',
                  1 => '?',
                  2 => 'quote',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => 'record',
                  2 => 'action',
                ),
                'method' => 'convertToQuote',
                'shortHelp' => 'Convert a Revenue Line Item Into A Quote Record',
                'longHelp' => 'modules/RevenueLineItems/clients/base/api/help/convert_to_quote.html',
                'file' => 'modules/RevenueLineItems/clients/base/api/RevenueLineItemToQuoteConvertApi.php',
                'className' => 'RevenueLineItemToQuoteConvertApi',
                'score' => 9.5,
              ),
            ),
          ),
        ),
      ),
      'PUT' => 
      array (
        'me' => 
        array (
          'preference' => 
          array (
            '?' => 
            array (
              0 => 
              array (
                'reqType' => 'PUT',
                'path' => 
                array (
                  0 => 'me',
                  1 => 'preference',
                  2 => '?',
                ),
                'pathVars' => 
                array (
                  0 => '',
                  1 => '',
                  2 => 'preference_name',
                ),
                'method' => 'userPreferenceSave',
                'shortHelp' => 'Update a specific preference for the current user',
                'longHelp' => 'include/api/help/me_preference_preference_name_put_help.html',
                'keepSession' => true,
                'file' => 'clients/base/api/CurrentUserApi.php',
                'className' => 'CurrentUserApi',
                'score' => 9.5,
              ),
            ),
          ),
        ),
        '<module>' => 
        array (
          '?' => 
          array (
            'favorite' => 
            array (
              0 => 
              array (
                'reqType' => 'PUT',
                'path' => 
                array (
                  0 => '<module>',
                  1 => '?',
                  2 => 'favorite',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => 'record',
                  2 => 'favorite',
                ),
                'method' => 'setFavorite',
                'shortHelp' => 'This method sets a record of the specified type as a favorite',
                'longHelp' => 'include/api/help/module_record_favorite_put_help.html',
                'file' => 'clients/base/api/ModuleApi.php',
                'className' => 'ModuleApi',
                'score' => 8.75,
              ),
            ),
            'unfavorite' => 
            array (
              0 => 
              array (
                'reqType' => 'PUT',
                'path' => 
                array (
                  0 => '<module>',
                  1 => '?',
                  2 => 'unfavorite',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => 'record',
                  2 => 'unfavorite',
                ),
                'method' => 'unsetFavorite',
                'shortHelp' => 'This method unsets a record of the specified type as a favorite',
                'longHelp' => 'include/api/help/module_record_favorite_delete_help.html',
                'file' => 'clients/base/api/ModuleApi.php',
                'className' => 'ModuleApi',
                'score' => 8.75,
              ),
            ),
          ),
        ),
        'Filters' => 
        array (
          '?' => 
          array (
            'used' => 
            array (
              0 => 
              array (
                'reqType' => 'PUT',
                'path' => 
                array (
                  0 => 'Filters',
                  1 => '?',
                  2 => 'used',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => 'module_name',
                  2 => 'used',
                ),
                'method' => 'setUsed',
                'shortHelp' => 'This method sets the filter as used for the current user',
                'longHelp' => '',
                'file' => 'modules/Filters/clients/base/api/PreviouslyUsedFiltersApi.php',
                'className' => 'PreviouslyUsedFiltersApi',
                'score' => 9.5,
              ),
            ),
          ),
        ),
      ),
      'DELETE' => 
      array (
        'me' => 
        array (
          'preference' => 
          array (
            '?' => 
            array (
              0 => 
              array (
                'reqType' => 'DELETE',
                'path' => 
                array (
                  0 => 'me',
                  1 => 'preference',
                  2 => '?',
                ),
                'pathVars' => 
                array (
                  0 => '',
                  1 => '',
                  2 => 'preference_name',
                ),
                'method' => 'userPreferenceDelete',
                'shortHelp' => 'Delete a specific preference for the current user',
                'longHelp' => 'include/api/help/me_preference_preference_name_delete_help.html',
                'keepSession' => true,
                'file' => 'clients/base/api/CurrentUserApi.php',
                'className' => 'CurrentUserApi',
                'score' => 9.5,
              ),
            ),
          ),
        ),
        '<module>' => 
        array (
          '?' => 
          array (
            'favorite' => 
            array (
              0 => 
              array (
                'reqType' => 'DELETE',
                'path' => 
                array (
                  0 => '<module>',
                  1 => '?',
                  2 => 'favorite',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => 'record',
                  2 => 'favorite',
                ),
                'method' => 'unsetFavorite',
                'shortHelp' => 'This method unsets a record of the specified type as a favorite',
                'longHelp' => 'include/api/help/module_record_favorite_delete_help.html',
                'file' => 'clients/base/api/ModuleApi.php',
                'className' => 'ModuleApi',
                'score' => 8.75,
              ),
            ),
            'unsubscribe' => 
            array (
              0 => 
              array (
                'reqType' => 'DELETE',
                'path' => 
                array (
                  0 => '<module>',
                  1 => '?',
                  2 => 'unsubscribe',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => 'record',
                ),
                'method' => 'unsubscribeFromRecord',
                'shortHelp' => 'This method unsubscribes the user from the current record, for activity stream updates.',
                'longHelp' => 'modules/ActivityStream/clients/base/api/help/recordUnsubscribe.html',
                'file' => 'modules/ActivityStream/clients/base/api/SubscriptionsApi.php',
                'className' => 'SubscriptionsApi',
                'score' => 8.75,
              ),
            ),
          ),
          'record_list' => 
          array (
            '?' => 
            array (
              0 => 
              array (
                'reqType' => 'DELETE',
                'path' => 
                array (
                  0 => '<module>',
                  1 => 'record_list',
                  2 => '?',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => '',
                  2 => 'record_list_id',
                ),
                'method' => 'recordListDelete',
                'shortHelp' => 'An API to delete an old record list',
                'longHelp' => 'include/api/help/module_recordlist_delete.html',
                'file' => 'clients/base/api/RecordListApi.php',
                'className' => 'RecordListApi',
                'score' => 8.75,
              ),
            ),
          ),
        ),
        'Mail' => 
        array (
          'attachment' => 
          array (
            '?' => 
            array (
              0 => 
              array (
                'reqType' => 'DELETE',
                'path' => 
                array (
                  0 => 'Mail',
                  1 => 'attachment',
                  2 => '?',
                ),
                'pathVars' => 
                array (
                  0 => '',
                  1 => '',
                  2 => 'file_guid',
                ),
                'method' => 'removeAttachment',
                'rawPostContents' => true,
                'shortHelp' => 'Removes a mail attachment',
                'longHelp' => 'modules/Emails/clients/base/api/help/mail_attachment_record_delete_help.html',
                'file' => 'modules/Emails/clients/base/api/MailApi.php',
                'className' => 'MailApi',
                'score' => 9.5,
              ),
            ),
            'cache' => 
            array (
              0 => 
              array (
                'reqType' => 'DELETE',
                'path' => 
                array (
                  0 => 'Mail',
                  1 => 'attachment',
                  2 => 'cache',
                ),
                'pathVars' => 
                array (
                  0 => '',
                  1 => '',
                  2 => '',
                ),
                'method' => 'clearUserCache',
                'rawPostContents' => true,
                'shortHelp' => 'Clears the user\'s attachment cache directory',
                'longHelp' => 'modules/Emails/clients/base/api/help/mail_attachment_cache_delete_help.html',
                'file' => 'modules/Emails/clients/base/api/MailApi.php',
                'className' => 'MailApi',
                'score' => 10.5,
              ),
            ),
          ),
        ),
        'Filters' => 
        array (
          '?' => 
          array (
            'used' => 
            array (
              0 => 
              array (
                'reqType' => 'DELETE',
                'path' => 
                array (
                  0 => 'Filters',
                  1 => '?',
                  2 => 'used',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => 'module_name',
                  2 => 'used',
                ),
                'method' => 'deleteUsed',
                'shortHelp' => 'This method deletes all used filters for the current user',
                'longHelp' => '',
                'file' => 'modules/Filters/clients/base/api/PreviouslyUsedFiltersApi.php',
                'className' => 'PreviouslyUsedFiltersApi',
                'score' => 9.5,
              ),
            ),
          ),
        ),
      ),
    ),
    'mobile' => 
    array (
      'POST' => 
      array (
        'oauth2' => 
        array (
          'bwc' => 
          array (
            'login' => 
            array (
              0 => 
              array (
                'reqType' => 'POST',
                'path' => 
                array (
                  0 => 'oauth2',
                  1 => 'bwc',
                  2 => 'login',
                ),
                'pathVars' => 
                array (
                  0 => '',
                  1 => '',
                  2 => '',
                ),
                'method' => 'bwcLogin',
                'shortHelp' => 'Bwc login for bwc modules. Internal usage only.',
                'longHelp' => 'include/api/help/oauth2_bwc_login_post_help.html',
                'keepSession' => true,
                'ignoreMetaHash' => true,
                'ignoreSystemStatusError' => true,
                'file' => 'clients/mobile/api/OAuth2MobileApi.php',
                'className' => 'OAuth2MobileApi',
                'score' => 10.5,
              ),
            ),
          ),
          'sudo' => 
          array (
            '?' => 
            array (
              0 => 
              array (
                'reqType' => 'POST',
                'path' => 
                array (
                  0 => 'oauth2',
                  1 => 'sudo',
                  2 => '?',
                ),
                'pathVars' => 
                array (
                  0 => '',
                  1 => '',
                  2 => 'user_name',
                ),
                'method' => 'sudo',
                'shortHelp' => 'Get an access token for another user',
                'longHelp' => 'include/api/help/oauth2_sudo_post_help.html',
                'ignoreMetaHash' => true,
                'file' => 'clients/mobile/api/OAuth2MobileApi.php',
                'className' => 'OAuth2MobileApi',
                'score' => 9.5,
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  4 => 
  array (
    'base' => 
    array (
      'GET' => 
      array (
        'connector' => 
        array (
          'dnb' => 
          array (
            '?' => 
            array (
              '?' => 
              array (
                0 => 
                array (
                  'reqType' => 'GET',
                  'path' => 
                  array (
                    0 => 'connector',
                    1 => 'dnb',
                    2 => '?',
                    3 => '?',
                  ),
                  'pathVars' => 
                  array (
                    0 => 'connector',
                    1 => 'dnb',
                    2 => 'qtype',
                    3 => 'qparam',
                  ),
                  'method' => 'dnbDirectGet',
                  'shortHelp' => 'Invoke DNB API using GET',
                  'longHelp' => 'include/api/help/dnb_get_help.html',
                  'keepSession' => true,
                  'file' => 'clients/base/api/DnbApi.php',
                  'className' => 'DnbApi',
                  'score' => 10.25,
                ),
              ),
            ),
          ),
        ),
        '<module>' => 
        array (
          '?' => 
          array (
            'file' => 
            array (
              '?' => 
              array (
                0 => 
                array (
                  'reqType' => 'GET',
                  'path' => 
                  array (
                    0 => '<module>',
                    1 => '?',
                    2 => 'file',
                    3 => '?',
                  ),
                  'pathVars' => 
                  array (
                    0 => 'module',
                    1 => 'record',
                    2 => '',
                    3 => 'field',
                  ),
                  'method' => 'getFile',
                  'rawReply' => true,
                  'allowDownloadCookie' => true,
                  'shortHelp' => 'Gets the contents of a single file related to a field for a module record.',
                  'longHelp' => 'include/api/help/module_record_file_field_get_help.html',
                  'file' => 'clients/base/api/FileApi.php',
                  'className' => 'FileApi',
                  'score' => 9.5,
                ),
              ),
            ),
            'link' => 
            array (
              '?' => 
              array (
                0 => 
                array (
                  'reqType' => 'GET',
                  'path' => 
                  array (
                    0 => '<module>',
                    1 => '?',
                    2 => 'link',
                    3 => '?',
                  ),
                  'pathVars' => 
                  array (
                    0 => 'module',
                    1 => 'record',
                    2 => '',
                    3 => 'link_name',
                  ),
                  'jsonParams' => 
                  array (
                    0 => 'filter',
                  ),
                  'method' => 'filterRelated',
                  'shortHelp' => 'Lists related records.',
                  'longHelp' => 'include/api/help/module_record_link_link_name_filter_get_help.html',
                  'file' => 'clients/base/api/RelateApi.php',
                  'className' => 'RelateApi',
                  'score' => 9.5,
                ),
              ),
              'activities' => 
              array (
                0 => 
                array (
                  'reqType' => 'GET',
                  'path' => 
                  array (
                    0 => '<module>',
                    1 => '?',
                    2 => 'link',
                    3 => 'activities',
                  ),
                  'pathVars' => 
                  array (
                    0 => 'module',
                    1 => 'record',
                    2 => '',
                  ),
                  'method' => 'getRecordActivities',
                  'shortHelp' => 'This method retrieves a record\'s activities',
                  'longHelp' => 'modules/ActivityStream/clients/base/api/help/recordActivities.html',
                  'file' => 'modules/ActivityStream/clients/base/api/ActivitiesApi.php',
                  'className' => 'ActivitiesApi',
                  'score' => 10.5,
                ),
              ),
              'history' => 
              array (
                0 => 
                array (
                  'reqType' => 'GET',
                  'path' => 
                  array (
                    0 => '<module>',
                    1 => '?',
                    2 => 'link',
                    3 => 'history',
                  ),
                  'pathVars' => 
                  array (
                    0 => 'module',
                    1 => 'record',
                    2 => '',
                  ),
                  'method' => 'filterModuleList',
                  'jsonParams' => 
                  array (
                    0 => 'filter',
                  ),
                  'shortHelp' => 'Get the history records for a specific record',
                  'longHelp' => 'include/api/help/history_filter.html',
                  'exceptions' => 
                  array (
                    0 => 'SugarApiExceptionInvalidParameter',
                    1 => 'SugarApiExceptionNotAuthorized',
                  ),
                  'file' => 'modules/History/clients/base/api/HistoryApi.php',
                  'className' => 'HistoryApi',
                  'score' => 10.5,
                ),
              ),
            ),
          ),
        ),
        'ForecastManagerWorksheets' => 
        array (
          'chart' => 
          array (
            '?' => 
            array (
              '?' => 
              array (
                0 => 
                array (
                  'reqType' => 'GET',
                  'path' => 
                  array (
                    0 => 'ForecastManagerWorksheets',
                    1 => 'chart',
                    2 => '?',
                    3 => '?',
                  ),
                  'pathVars' => 
                  array (
                    0 => 'module',
                    1 => '',
                    2 => 'timeperiod_id',
                    3 => 'user_id',
                  ),
                  'method' => 'forecastManagerWorksheetsChartGet',
                  'jsonParams' => 
                  array (
                  ),
                  'shortHelp' => 'Filter records and reformat data for chart presentation',
                  'longHelp' => 'modules/Forecasts/clients/base/api/help/forecastManagerWorksheetsChartGet.html',
                  'file' => 'modules/ForecastManagerWorksheets/clients/base/api/ForecastManagerWorksheetsFilterApi.php',
                  'className' => 'ForecastManagerWorksheetsFilterApi',
                  'score' => 10.25,
                ),
              ),
            ),
          ),
        ),
        'Forecasts' => 
        array (
          '?' => 
          array (
            'progressRep' => 
            array (
              '?' => 
              array (
                0 => 
                array (
                  'reqType' => 'GET',
                  'path' => 
                  array (
                    0 => 'Forecasts',
                    1 => '?',
                    2 => 'progressRep',
                    3 => '?',
                  ),
                  'pathVars' => 
                  array (
                    0 => '',
                    1 => 'timeperiod_id',
                    2 => '',
                    3 => 'user_id',
                  ),
                  'method' => 'progressRep',
                  'shortHelp' => 'Projected Rep data',
                  'longHelp' => 'modules/Forecasts/clients/base/api/help/ForecastProgressRepApi.html',
                  'file' => 'modules/Forecasts/clients/base/api/ForecastsProgressApi.php',
                  'className' => 'ForecastsProgressApi',
                  'score' => 10.25,
                ),
              ),
            ),
            'progressManager' => 
            array (
              '?' => 
              array (
                0 => 
                array (
                  'reqType' => 'GET',
                  'path' => 
                  array (
                    0 => 'Forecasts',
                    1 => '?',
                    2 => 'progressManager',
                    3 => '?',
                  ),
                  'pathVars' => 
                  array (
                    0 => '',
                    1 => 'timeperiod_id',
                    2 => '',
                    3 => 'user_id',
                  ),
                  'method' => 'progressManager',
                  'shortHelp' => 'Progress Manager data',
                  'longHelp' => 'modules/Forecasts/clients/base/api/help/ForecastProgressManagerApi.html',
                  'file' => 'modules/Forecasts/clients/base/api/ForecastsProgressApi.php',
                  'className' => 'ForecastsProgressApi',
                  'score' => 10.25,
                ),
              ),
            ),
          ),
        ),
        'ForecastWorksheets' => 
        array (
          'chart' => 
          array (
            '?' => 
            array (
              '?' => 
              array (
                0 => 
                array (
                  'reqType' => 'GET',
                  'path' => 
                  array (
                    0 => 'ForecastWorksheets',
                    1 => 'chart',
                    2 => '?',
                    3 => '?',
                  ),
                  'pathVars' => 
                  array (
                    0 => 'module',
                    1 => '',
                    2 => 'timeperiod_id',
                    3 => 'user_id',
                  ),
                  'method' => 'forecastWorksheetsChartGet',
                  'jsonParams' => 
                  array (
                  ),
                  'shortHelp' => 'Filter records and reformat data for chart presentation',
                  'longHelp' => 'modules/Forecasts/clients/base/api/help/ForecastsWorksheetChartGet.html',
                  'file' => 'modules/ForecastWorksheets/clients/base/api/ForecastWorksheetsFilterApi.php',
                  'className' => 'ForecastWorksheetsFilterApi',
                  'score' => 10.25,
                ),
              ),
            ),
          ),
        ),
        'Opportunities' => 
        array (
          'chart' => 
          array (
            'pipeline' => 
            array (
              '?' => 
              array (
                0 => 
                array (
                  'reqType' => 'GET',
                  'path' => 
                  array (
                    0 => 'Opportunities',
                    1 => 'chart',
                    2 => 'pipeline',
                    3 => '?',
                  ),
                  'pathVars' => 
                  array (
                    0 => 'module',
                    1 => '',
                    2 => '',
                    3 => 'timeperiod_id',
                  ),
                  'method' => 'pipeline',
                  'shortHelp' => 'Get the current opportunity pipeline data for a specific timeperiod',
                  'longHelp' => 'modules/Opportunities/clients/base/api/help/OpportunitiesPipelineChartApi.html',
                  'file' => 'modules/Opportunities/clients/base/api/OpportunitiesPipelineChartApi.php',
                  'className' => 'OpportunitiesPipelineChartApi',
                  'score' => 11.25,
                ),
              ),
            ),
          ),
        ),
        'Products' => 
        array (
          'chart' => 
          array (
            'pipeline' => 
            array (
              '?' => 
              array (
                0 => 
                array (
                  'reqType' => 'GET',
                  'path' => 
                  array (
                    0 => 'Products',
                    1 => 'chart',
                    2 => 'pipeline',
                    3 => '?',
                  ),
                  'pathVars' => 
                  array (
                    0 => 'module',
                    1 => '',
                    2 => '',
                    3 => 'timeperiod_id',
                  ),
                  'method' => 'pipeline',
                  'shortHelp' => 'Get the current revenue line items pipeline data for a specific timeperiod',
                  'longHelp' => 'modules/Opportunities/clients/base/api/help/OpportunitiesPipelineChartApi.html',
                  'file' => 'modules/Products/clients/base/api/ProductsPipelineChartApi.php',
                  'className' => 'ProductsPipelineChartApi',
                  'score' => 11.25,
                ),
              ),
            ),
          ),
        ),
        'RevenueLineItems' => 
        array (
          'chart' => 
          array (
            'pipeline' => 
            array (
              '?' => 
              array (
                0 => 
                array (
                  'reqType' => 'GET',
                  'path' => 
                  array (
                    0 => 'RevenueLineItems',
                    1 => 'chart',
                    2 => 'pipeline',
                    3 => '?',
                  ),
                  'pathVars' => 
                  array (
                    0 => 'module',
                    1 => '',
                    2 => '',
                    3 => 'timeperiod_id',
                  ),
                  'method' => 'pipeline',
                  'shortHelp' => 'Get the current revenue line items pipeline data for a specific timeperiod',
                  'longHelp' => 'modules/Opportunities/clients/base/api/help/OpportunitiesPipelineChartApi.html',
                  'file' => 'modules/RevenueLineItems/clients/base/api/RevenueLineItemsPipelineChartApi.php',
                  'className' => 'RevenueLineItemsPipelineChartApi',
                  'score' => 11.25,
                ),
              ),
            ),
          ),
        ),
      ),
      'POST' => 
      array (
        'connector' => 
        array (
          'dnb' => 
          array (
            'Accounts' => 
            array (
              'bal' => 
              array (
                0 => 
                array (
                  'reqType' => 'POST',
                  'path' => 
                  array (
                    0 => 'connector',
                    1 => 'dnb',
                    2 => 'Accounts',
                    3 => 'bal',
                  ),
                  'pathVars' => 
                  array (
                    0 => 'connector',
                    1 => 'dnb',
                    2 => 'Accounts',
                    3 => 'bal',
                  ),
                  'method' => 'dnbAccountsBAL',
                  'shortHelp' => 'Invoke BAL For Accounts',
                  'longHelp' => 'include/api/help/dnb_post_help.html',
                  'keepSession' => true,
                  'file' => 'clients/base/api/DnbApi.php',
                  'className' => 'DnbApi',
                  'score' => 12.25,
                ),
              ),
            ),
            'Contacts' => 
            array (
              'bal' => 
              array (
                0 => 
                array (
                  'reqType' => 'POST',
                  'path' => 
                  array (
                    0 => 'connector',
                    1 => 'dnb',
                    2 => 'Contacts',
                    3 => 'bal',
                  ),
                  'pathVars' => 
                  array (
                    0 => 'connector',
                    1 => 'dnb',
                    2 => 'Contacts',
                    3 => 'bal',
                  ),
                  'method' => 'dnbContactsBAL',
                  'shortHelp' => 'Invoke BAL For Contacts',
                  'longHelp' => 'include/api/help/dnb_post_help.html',
                  'keepSession' => true,
                  'file' => 'clients/base/api/DnbApi.php',
                  'className' => 'DnbApi',
                  'score' => 12.25,
                ),
              ),
            ),
          ),
        ),
        '<module>' => 
        array (
          '?' => 
          array (
            'file' => 
            array (
              '?' => 
              array (
                0 => 
                array (
                  'reqType' => 'POST',
                  'path' => 
                  array (
                    0 => '<module>',
                    1 => '?',
                    2 => 'file',
                    3 => '?',
                  ),
                  'pathVars' => 
                  array (
                    0 => 'module',
                    1 => 'record',
                    2 => '',
                    3 => 'field',
                  ),
                  'method' => 'saveFilePost',
                  'rawPostContents' => true,
                  'shortHelp' => 'Saves a file. The file can be a new file or a file override.',
                  'longHelp' => 'include/api/help/module_record_file_field_post_help.html',
                  'file' => 'clients/base/api/FileApi.php',
                  'className' => 'FileApi',
                  'score' => 9.5,
                ),
              ),
            ),
            'link' => 
            array (
              '?' => 
              array (
                0 => 
                array (
                  'reqType' => 'POST',
                  'path' => 
                  array (
                    0 => '<module>',
                    1 => '?',
                    2 => 'link',
                    3 => '?',
                  ),
                  'pathVars' => 
                  array (
                    0 => 'module',
                    1 => 'record',
                    2 => '',
                    3 => 'link_name',
                  ),
                  'method' => 'createRelatedRecord',
                  'shortHelp' => 'Create a single record and relate it to this module',
                  'longHelp' => 'include/api/help/module_record_link_link_name_post_help.html',
                  'file' => 'clients/base/api/RelateRecordApi.php',
                  'className' => 'RelateRecordApi',
                  'score' => 9.5,
                ),
              ),
            ),
          ),
          'temp' => 
          array (
            'file' => 
            array (
              '?' => 
              array (
                0 => 
                array (
                  'reqType' => 'POST',
                  'path' => 
                  array (
                    0 => '<module>',
                    1 => 'temp',
                    2 => 'file',
                    3 => '?',
                  ),
                  'pathVars' => 
                  array (
                    0 => 'module',
                    1 => 'temp',
                    2 => '',
                    3 => 'field',
                  ),
                  'method' => 'saveTempImagePost',
                  'rawPostContents' => true,
                  'shortHelp' => 'Saves an image to a temporary folder.',
                  'longHelp' => 'include/api/help/module_temp_file_field_post_help.html',
                  'file' => 'clients/base/api/FileTempApi.php',
                  'className' => 'FileTempApi',
                  'score' => 10.5,
                ),
              ),
            ),
          ),
        ),
        'Documents' => 
        array (
          '?' => 
          array (
            'file' => 
            array (
              '?' => 
              array (
                0 => 
                array (
                  'reqType' => 'POST',
                  'path' => 
                  array (
                    0 => 'Documents',
                    1 => '?',
                    2 => 'file',
                    3 => '?',
                  ),
                  'pathVars' => 
                  array (
                    0 => 'module',
                    1 => 'record',
                    2 => '',
                    3 => 'field',
                  ),
                  'method' => 'saveFilePost',
                  'rawPostContents' => true,
                  'shortHelp' => 'Saves a file. The file can be a new file or a file override.',
                  'longHelp' => 'include/api/help/module_record_file_field_post_help.html',
                  'file' => 'modules/Documents/clients/base/api/DocumentsFileApi.php',
                  'className' => 'DocumentsFileApi',
                  'score' => 10.25,
                ),
              ),
            ),
          ),
        ),
      ),
      'PUT' => 
      array (
        '<module>' => 
        array (
          '?' => 
          array (
            'file' => 
            array (
              '?' => 
              array (
                0 => 
                array (
                  'reqType' => 'PUT',
                  'path' => 
                  array (
                    0 => '<module>',
                    1 => '?',
                    2 => 'file',
                    3 => '?',
                  ),
                  'pathVars' => 
                  array (
                    0 => 'module',
                    1 => 'record',
                    2 => '',
                    3 => 'field',
                  ),
                  'method' => 'saveFilePut',
                  'rawPostContents' => true,
                  'shortHelp' => 'Saves a file. The file can be a new file or a file override. (This is an alias of the POST method save.)',
                  'longHelp' => 'include/api/help/module_record_file_field_put_help.html',
                  'file' => 'clients/base/api/FileApi.php',
                  'className' => 'FileApi',
                  'score' => 9.5,
                ),
              ),
            ),
          ),
        ),
        'Documents' => 
        array (
          '?' => 
          array (
            'file' => 
            array (
              '?' => 
              array (
                0 => 
                array (
                  'reqType' => 'PUT',
                  'path' => 
                  array (
                    0 => 'Documents',
                    1 => '?',
                    2 => 'file',
                    3 => '?',
                  ),
                  'pathVars' => 
                  array (
                    0 => 'module',
                    1 => 'record',
                    2 => '',
                    3 => 'field',
                  ),
                  'method' => 'saveFilePut',
                  'rawPostContents' => true,
                  'shortHelp' => 'Saves a file. The file can be a new file or a file override. (This is an alias of the POST method save.)',
                  'longHelp' => 'include/api/help/module_record_file_field_put_help.html',
                  'file' => 'modules/Documents/clients/base/api/DocumentsFileApi.php',
                  'className' => 'DocumentsFileApi',
                  'score' => 10.25,
                ),
              ),
            ),
          ),
        ),
      ),
      'DELETE' => 
      array (
        '<module>' => 
        array (
          '?' => 
          array (
            'file' => 
            array (
              '?' => 
              array (
                0 => 
                array (
                  'reqType' => 'DELETE',
                  'path' => 
                  array (
                    0 => '<module>',
                    1 => '?',
                    2 => 'file',
                    3 => '?',
                  ),
                  'pathVars' => 
                  array (
                    0 => 'module',
                    1 => 'record',
                    2 => '',
                    3 => 'field',
                  ),
                  'method' => 'removeFile',
                  'rawPostContents' => true,
                  'shortHelp' => 'Removes a file from a field.',
                  'longHelp' => 'include/api/help/module_record_file_field_delete_help.html',
                  'file' => 'clients/base/api/FileApi.php',
                  'className' => 'FileApi',
                  'score' => 9.5,
                ),
              ),
            ),
          ),
        ),
        'Filters' => 
        array (
          '?' => 
          array (
            'used' => 
            array (
              '?' => 
              array (
                0 => 
                array (
                  'reqType' => 'DELETE',
                  'path' => 
                  array (
                    0 => 'Filters',
                    1 => '?',
                    2 => 'used',
                    3 => '?',
                  ),
                  'pathVars' => 
                  array (
                    0 => 'module',
                    1 => 'module_name',
                    2 => 'used',
                    3 => 'record',
                  ),
                  'method' => 'deleteUsed',
                  'shortHelp' => 'This method deletes the used filter for the current user',
                  'longHelp' => '',
                  'file' => 'modules/Filters/clients/base/api/PreviouslyUsedFiltersApi.php',
                  'className' => 'PreviouslyUsedFiltersApi',
                  'score' => 10.25,
                ),
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  5 => 
  array (
    'base' => 
    array (
      'GET' => 
      array (
        '<module>' => 
        array (
          'temp' => 
          array (
            'file' => 
            array (
              '?' => 
              array (
                '?' => 
                array (
                  0 => 
                  array (
                    'reqType' => 'GET',
                    'path' => 
                    array (
                      0 => '<module>',
                      1 => 'temp',
                      2 => 'file',
                      3 => '?',
                      4 => '?',
                    ),
                    'pathVars' => 
                    array (
                      0 => 'module',
                      1 => 'record',
                      2 => '',
                      3 => 'field',
                      4 => 'temp_id',
                    ),
                    'method' => 'getTempImage',
                    'rawReply' => true,
                    'allowDownloadCookie' => true,
                    'shortHelp' => 'Reads a temporary image and deletes it.',
                    'longHelp' => 'include/api/help/module_temp_file_field_temp_id_get_help.html',
                    'file' => 'clients/base/api/FileTempApi.php',
                    'className' => 'FileTempApi',
                    'score' => 11.25,
                  ),
                ),
              ),
            ),
          ),
          '?' => 
          array (
            'link' => 
            array (
              '?' => 
              array (
                'filter' => 
                array (
                  0 => 
                  array (
                    'reqType' => 'GET',
                    'path' => 
                    array (
                      0 => '<module>',
                      1 => '?',
                      2 => 'link',
                      3 => '?',
                      4 => 'filter',
                    ),
                    'pathVars' => 
                    array (
                      0 => 'module',
                      1 => 'record',
                      2 => '',
                      3 => 'link_name',
                      4 => '',
                    ),
                    'jsonParams' => 
                    array (
                      0 => 'filter',
                    ),
                    'method' => 'filterRelated',
                    'shortHelp' => 'Lists related filtered records.',
                    'longHelp' => 'include/api/help/module_record_link_link_name_filter_get_help.html',
                    'file' => 'clients/base/api/RelateApi.php',
                    'className' => 'RelateApi',
                    'score' => 11.25,
                  ),
                ),
                '?' => 
                array (
                  0 => 
                  array (
                    'reqType' => 'GET',
                    'path' => 
                    array (
                      0 => '<module>',
                      1 => '?',
                      2 => 'link',
                      3 => '?',
                      4 => '?',
                    ),
                    'pathVars' => 
                    array (
                      0 => 'module',
                      1 => 'record',
                      2 => '',
                      3 => 'link_name',
                      4 => 'remote_id',
                    ),
                    'method' => 'getRelatedRecord',
                    'shortHelp' => 'Fetch a single record related to this module',
                    'longHelp' => 'include/api/help/module_record_link_link_name_remote_id_get_help.html',
                    'file' => 'clients/base/api/RelateRecordApi.php',
                    'className' => 'RelateRecordApi',
                    'score' => 10.25,
                  ),
                ),
              ),
              'activities' => 
              array (
                'filter' => 
                array (
                  0 => 
                  array (
                    'reqType' => 'GET',
                    'path' => 
                    array (
                      0 => '<module>',
                      1 => '?',
                      2 => 'link',
                      3 => 'activities',
                      4 => 'filter',
                    ),
                    'pathVars' => 
                    array (
                      0 => 'module',
                      1 => 'record',
                      2 => '',
                    ),
                    'method' => 'getRecordActivities',
                    'shortHelp' => 'This method retrieves a filtered list of a record\'s activities',
                    'longHelp' => 'modules/ActivityStream/clients/base/api/help/recordActivities.html',
                    'file' => 'modules/ActivityStream/clients/base/api/ActivitiesApi.php',
                    'className' => 'ActivitiesApi',
                    'score' => 12.25,
                  ),
                ),
              ),
            ),
          ),
        ),
        'Accounts' => 
        array (
          '?' => 
          array (
            'link' => 
            array (
              '?' => 
              array (
                'filter' => 
                array (
                  0 => 
                  array (
                    'reqType' => 'GET',
                    'path' => 
                    array (
                      0 => 'Accounts',
                      1 => '?',
                      2 => 'link',
                      3 => '?',
                      4 => 'filter',
                    ),
                    'pathVars' => 
                    array (
                      0 => 'module',
                      1 => 'record',
                      2 => '',
                      3 => 'link_name',
                      4 => '',
                    ),
                    'jsonParams' => 
                    array (
                      0 => 'filter',
                    ),
                    'method' => 'filterRelated',
                    'shortHelp' => 'Lists related filtered records.',
                    'longHelp' => 'include/api/help/module_record_link_link_name_filter_get_help.html',
                    'file' => 'modules/Accounts/clients/base/api/AccountsRelateApi.php',
                    'className' => 'AccountsRelateApi',
                    'score' => 12,
                  ),
                ),
              ),
            ),
          ),
        ),
        'Forecasts' => 
        array (
          '?' => 
          array (
            'quotas' => 
            array (
              'rollup' => 
              array (
                '?' => 
                array (
                  0 => 
                  array (
                    'reqType' => 'GET',
                    'path' => 
                    array (
                      0 => 'Forecasts',
                      1 => '?',
                      2 => 'quotas',
                      3 => 'rollup',
                      4 => '?',
                    ),
                    'pathVars' => 
                    array (
                      0 => '',
                      1 => 'timeperiod_id',
                      2 => '',
                      3 => 'quota_type',
                      4 => 'user_id',
                    ),
                    'method' => 'getQuota',
                    'shortHelp' => 'Returns the rollup quota for the user by timeperiod',
                    'longHelp' => 'modules/Forecasts/clients/base/api/help/ForecastsQuotasApiGet.html',
                    'file' => 'modules/Forecasts/clients/base/api/ForecastsApi.php',
                    'className' => 'ForecastsApi',
                    'score' => 12,
                  ),
                ),
              ),
              'direct' => 
              array (
                '?' => 
                array (
                  0 => 
                  array (
                    'reqType' => 'GET',
                    'path' => 
                    array (
                      0 => 'Forecasts',
                      1 => '?',
                      2 => 'quotas',
                      3 => 'direct',
                      4 => '?',
                    ),
                    'pathVars' => 
                    array (
                      0 => '',
                      1 => 'timeperiod_id',
                      2 => '',
                      3 => 'quota_type',
                      4 => 'user_id',
                    ),
                    'method' => 'getQuota',
                    'shortHelp' => 'Returns the direct quota for the user by timeperiod',
                    'longHelp' => 'modules/Forecasts/clients/base/api/help/ForecastsQuotasApiGet.html',
                    'file' => 'modules/Forecasts/clients/base/api/ForecastsApi.php',
                    'className' => 'ForecastsApi',
                    'score' => 12,
                  ),
                ),
              ),
            ),
            '?' => 
            array (
              'chart' => 
              array (
                '?' => 
                array (
                  0 => 
                  array (
                    'reqType' => 'GET',
                    'path' => 
                    array (
                      0 => 'Forecasts',
                      1 => '?',
                      2 => '?',
                      3 => 'chart',
                      4 => '?',
                    ),
                    'pathVars' => 
                    array (
                      0 => '',
                      1 => 'timeperiod_id',
                      2 => 'user_id',
                      3 => '',
                      4 => 'display_manager',
                    ),
                    'method' => 'chart',
                    'shortHelp' => 'Retrieve the Chart data for the given data in the Forecast Module',
                    'longHelp' => 'modules/Forecasts/clients/base/api/help/ForecastChartApi.html',
                    'file' => 'modules/Forecasts/clients/base/api/ForecastsChartApi.php',
                    'className' => 'ForecastsChartApi',
                    'score' => 11,
                  ),
                ),
              ),
            ),
          ),
        ),
        'Opportunities' => 
        array (
          'chart' => 
          array (
            'pipeline' => 
            array (
              '?' => 
              array (
                '?' => 
                array (
                  0 => 
                  array (
                    'reqType' => 'GET',
                    'path' => 
                    array (
                      0 => 'Opportunities',
                      1 => 'chart',
                      2 => 'pipeline',
                      3 => '?',
                      4 => '?',
                    ),
                    'pathVars' => 
                    array (
                      0 => 'module',
                      1 => '',
                      2 => '',
                      3 => 'timeperiod_id',
                      4 => 'type',
                    ),
                    'method' => 'pipeline',
                    'shortHelp' => 'Get the current opportunity pipeline data for the current timeperiod',
                    'longHelp' => 'modules/Opportunities/clients/base/api/help/OpportunitiesPipelineChartApi.html',
                    'file' => 'modules/Opportunities/clients/base/api/OpportunitiesPipelineChartApi.php',
                    'className' => 'OpportunitiesPipelineChartApi',
                    'score' => 12,
                  ),
                ),
              ),
            ),
          ),
        ),
        'Products' => 
        array (
          'chart' => 
          array (
            'pipeline' => 
            array (
              '?' => 
              array (
                '?' => 
                array (
                  0 => 
                  array (
                    'reqType' => 'GET',
                    'path' => 
                    array (
                      0 => 'Products',
                      1 => 'chart',
                      2 => 'pipeline',
                      3 => '?',
                      4 => '?',
                    ),
                    'pathVars' => 
                    array (
                      0 => 'module',
                      1 => '',
                      2 => '',
                      3 => 'timeperiod_id',
                      4 => 'type',
                    ),
                    'method' => 'pipeline',
                    'shortHelp' => 'Get the current revenue line items pipeline data for the current timeperiod',
                    'longHelp' => 'modules/Opportunities/clients/base/api/help/OpportunitiesPipelineChartApi.html',
                    'file' => 'modules/Products/clients/base/api/ProductsPipelineChartApi.php',
                    'className' => 'ProductsPipelineChartApi',
                    'score' => 12,
                  ),
                ),
              ),
            ),
          ),
        ),
        'RevenueLineItems' => 
        array (
          'chart' => 
          array (
            'pipeline' => 
            array (
              '?' => 
              array (
                '?' => 
                array (
                  0 => 
                  array (
                    'reqType' => 'GET',
                    'path' => 
                    array (
                      0 => 'RevenueLineItems',
                      1 => 'chart',
                      2 => 'pipeline',
                      3 => '?',
                      4 => '?',
                    ),
                    'pathVars' => 
                    array (
                      0 => 'module',
                      1 => '',
                      2 => '',
                      3 => 'timeperiod_id',
                      4 => 'type',
                    ),
                    'method' => 'pipeline',
                    'shortHelp' => 'Get the current revenue line items pipeline data for the current timeperiod',
                    'longHelp' => 'modules/Opportunities/clients/base/api/help/OpportunitiesPipelineChartApi.html',
                    'file' => 'modules/RevenueLineItems/clients/base/api/RevenueLineItemsPipelineChartApi.php',
                    'className' => 'RevenueLineItemsPipelineChartApi',
                    'score' => 12,
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'POST' => 
      array (
        '<module>' => 
        array (
          '?' => 
          array (
            'link' => 
            array (
              '?' => 
              array (
                '?' => 
                array (
                  0 => 
                  array (
                    'reqType' => 'POST',
                    'path' => 
                    array (
                      0 => '<module>',
                      1 => '?',
                      2 => 'link',
                      3 => '?',
                      4 => '?',
                    ),
                    'pathVars' => 
                    array (
                      0 => 'module',
                      1 => 'record',
                      2 => '',
                      3 => 'link_name',
                      4 => 'remote_id',
                    ),
                    'method' => 'createRelatedLink',
                    'shortHelp' => 'Relates an existing record to this module',
                    'longHelp' => 'include/api/help/module_record_link_link_name_remote_id_post_help.html',
                    'file' => 'clients/base/api/RelateRecordApi.php',
                    'className' => 'RelateRecordApi',
                    'score' => 10.25,
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'PUT' => 
      array (
        '<module>' => 
        array (
          '?' => 
          array (
            'link' => 
            array (
              '?' => 
              array (
                '?' => 
                array (
                  0 => 
                  array (
                    'reqType' => 'PUT',
                    'path' => 
                    array (
                      0 => '<module>',
                      1 => '?',
                      2 => 'link',
                      3 => '?',
                      4 => '?',
                    ),
                    'pathVars' => 
                    array (
                      0 => 'module',
                      1 => 'record',
                      2 => '',
                      3 => 'link_name',
                      4 => 'remote_id',
                    ),
                    'method' => 'updateRelatedLink',
                    'shortHelp' => 'Updates relationship specific information ',
                    'longHelp' => 'include/api/help/module_record_link_link_name_remote_id_put_help.html',
                    'file' => 'clients/base/api/RelateRecordApi.php',
                    'className' => 'RelateRecordApi',
                    'score' => 10.25,
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'DELETE' => 
      array (
        '<module>' => 
        array (
          '?' => 
          array (
            'link' => 
            array (
              '?' => 
              array (
                '?' => 
                array (
                  0 => 
                  array (
                    'reqType' => 'DELETE',
                    'path' => 
                    array (
                      0 => '<module>',
                      1 => '?',
                      2 => 'link',
                      3 => '?',
                      4 => '?',
                    ),
                    'pathVars' => 
                    array (
                      0 => 'module',
                      1 => 'record',
                      2 => '',
                      3 => 'link_name',
                      4 => 'remote_id',
                    ),
                    'method' => 'deleteRelatedLink',
                    'shortHelp' => 'Deletes a relationship between two records',
                    'longHelp' => 'include/api/help/module_record_link_link_name_remote_id_delete_help.html',
                    'file' => 'clients/base/api/RelateRecordApi.php',
                    'className' => 'RelateRecordApi',
                    'score' => 10.25,
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  6 => 
  array (
    'base' => 
    array (
      'GET' => 
      array (
        '<module>' => 
        array (
          '?' => 
          array (
            'link' => 
            array (
              '?' => 
              array (
                'filter' => 
                array (
                  'count' => 
                  array (
                    0 => 
                    array (
                      'reqType' => 'GET',
                      'path' => 
                      array (
                        0 => '<module>',
                        1 => '?',
                        2 => 'link',
                        3 => '?',
                        4 => 'filter',
                        5 => 'count',
                      ),
                      'pathVars' => 
                      array (
                        0 => 'module',
                        1 => 'record',
                        2 => '',
                        3 => 'link_name',
                        4 => '',
                        5 => '',
                      ),
                      'jsonParams' => 
                      array (
                        0 => 'filter',
                      ),
                      'method' => 'filterRelatedCount',
                      'shortHelp' => 'Lists related filtered records.',
                      'longHelp' => 'include/api/help/module_record_link_link_name_filter_get_help.html',
                      'file' => 'clients/base/api/RelateApi.php',
                      'className' => 'RelateApi',
                      'score' => 13,
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'POST' => 
      array (
        '<module>' => 
        array (
          '?' => 
          array (
            'link' => 
            array (
              '?' => 
              array (
                'add_record_list' => 
                array (
                  '?' => 
                  array (
                    0 => 
                    array (
                      'reqType' => 'POST',
                      'path' => 
                      array (
                        0 => '<module>',
                        1 => '?',
                        2 => 'link',
                        3 => '?',
                        4 => 'add_record_list',
                        5 => '?',
                      ),
                      'pathVars' => 
                      array (
                        0 => 'module',
                        1 => 'record',
                        2 => '',
                        3 => 'link_name',
                        4 => '',
                        5 => 'remote_id',
                      ),
                      'method' => 'createRelatedLinksFromRecordList',
                      'shortHelp' => 'Relates existing records from a record list to this record.',
                      'longHelp' => 'include/api/help/module_record_links_from_recordlist_post_help.html',
                      'file' => 'clients/base/api/RelateRecordApi.php',
                      'className' => 'RelateRecordApi',
                      'score' => 12,
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
    ),
  ),
);

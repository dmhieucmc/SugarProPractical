<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */


$mod_strings = array (
  'CONTACT_REMOVE_PROJECT_CONFIRM' => '¿Está seguro de que desea eliminar este contacto de este proyecto?',
  'ERR_DATE' => 'La fecha especificada cae en día no laboral.',
  'ERR_DURATION' => 'La Duración debe ser un número entero.',
  'ERR_FINISH_DATE' => 'La fecha de fin no puede ser anterior a la de inicio.',
  'ERR_IS_EMPTY' => 'no puede estar vacío.',
  'ERR_PERCENT_COMPLETE' => 'El % Completado debe ser un valor entre 0 y 100.',
  'ERR_PREDECESSORS_INPUT' => 'Los valores introducidos en el campo Predecesoras deben tener la forma "1" o "1,2"',
  'ERR_PREDECESSORS_OUT_OF_RANGE' => 'El valor especificado para el campo Predecesor es mayor que el número de filas.',
  'ERR_PREDECESSOR_CYCLE_FAIL' => 'El predecesor especificado causa una dependencia circular.',
  'ERR_PREDECESSOR_IS_PARENT_OR_CHILD_FAIL' => 'El predecesor especificado es una tarea padre o una subtarea.',
  'ERR_TASK_NAME_FOR_ROW' => 'Nombre de Tarea para la Fila',
  'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Cuentas',
  'LBL_ACCOUNT_SUBPANEL_TITLE' => 'Cuentas',
  'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Actividades',
  'LBL_ACTIVITIES_TITLE' => 'Actividades',
  'LBL_ACTUAL_DURATION' => 'Duración Real',
  'LBL_ASSIGNED_USER_ID' => 'Asignado a:',
  'LBL_ASSIGNED_USER_NAME' => 'Asignado a:',
  'LBL_BIWEEK_BUTTON' => '2 Semanas',
  'LBL_BUGS_SUBPANEL_TITLE' => 'Incidencias',
  'LBL_CASES_SUBPANEL_TITLE' => 'Casos',
  'LBL_COLLAPSE_ALL_BUTTON' => 'Compactar Todo',
  'LBL_CONTACTS_RESOURCE' => 'Recurso de Contacto',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contactos',
  'LBL_CONTACT_SUBPANEL_TITLE' => 'Contactos',
  'LBL_COPY_BUTTON' => 'Copiar',
  'LBL_CREATED_BY' => 'Creado por:',
  'LBL_CUT_BUTTON' => 'Cortar',
  'LBL_DAILY_REPORT' => 'Informe Diario',
  'LBL_DATE' => 'Fecha',
  'LBL_DATE_END' => 'Fecha Fin:',
  'LBL_DATE_ENTERED' => 'Fecha Creación:',
  'LBL_DATE_MODIFIED' => 'Fecha Modificación:',
  'LBL_DATE_START' => 'Fecha Inicio:',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Proyectos',
  'LBL_DELETED' => 'Eliminado:',
  'LBL_DELETE_BUTTON' => 'Eliminar',
  'LBL_DESCRIPTION' => 'Descripción:',
  'LBL_DURATION' => 'Duración',
  'LBL_DURATION_WIDGET' => 'duration',
  'LBL_EDITLAYOUT' => 'Editar diseño',
  'LBL_EDIT_PROJECT_TASKS_TITLE' => 'Editar Tareas de Proyecto',
  'LBL_EXPAND_ALL_BUTTON' => 'Expandir Todo',
  'LBL_EXPORT_TO_MS_PROJECT' => 'Exportar a MS Project',
  'LBL_EXPORT_TO_PDF' => 'Exportar a PDF',
  'LBL_FILTER_ALL_TASKS' => 'Todas las Tareas',
  'LBL_FILTER_COMPLETED_TASKS' => 'Tareas Completadas',
  'LBL_FILTER_DATE_RANGE' => 'Tareas en Rango de Fechas',
  'LBL_FILTER_DATE_RANGE_FINISH' => 'Y Antes',
  'LBL_FILTER_DATE_RANGE_START' => 'Tareas que Empiezan o Terminan Después de',
  'LBL_FILTER_INCOMPLETE_TASKS' => 'Tareas No Completadas',
  'LBL_FILTER_MILESTONES' => 'Hitos',
  'LBL_FILTER_MY_OVERDUE_TASKS' => 'Mis Tareas Vencidas',
  'LBL_FILTER_MY_TASKS' => 'Mis Tareas',
  'LBL_FILTER_MY_UPCOMING_TASKS' => 'Mis Tareas de Vencimiento Próximo (1 Semana)',
  'LBL_FILTER_RESOURCE' => 'Tareas que Usan Recursos',
  'LBL_FILTER_VIEW' => 'Ver',
  'LBL_FINISH' => 'Fin',
  'LBL_FINISH_WIDGET' => 'date_finish',
  'LBL_GANTT_ONLY' => 'Gantt',
  'LBL_GRID_GANTT' => 'Rejilla/Gantt',
  'LBL_GRID_ONLY' => 'Rejilla',
  'LBL_HIDE_OPTIONAL_COLUMNS_BUTTON' => 'Ocultar Columnas Opcionales',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Historial',
  'LBL_HISTORY_TITLE' => 'Historial',
  'LBL_HOLIDAY' => 'Festivo',
  'LBL_HOLIDAYS_SUBPANEL_TITLE' => 'Festivos',
  'LBL_HOLIDAYS_TITLE' => 'Festivos',
  'LBL_ID' => 'Id:',
  'LBL_INDENT_BUTTON' => 'Indentar',
  'LBL_INSERTROWS' => 'Insertar filas',
  'LBL_INSERT_BUTTON' => 'Insertar Filas',
  'LBL_IS_TEMPLATE' => 'Es una Plantilla',
  'LBL_LAST_WEEK' => 'Anterior',
  'LBL_LIST_ASSIGNED_USER_ID' => 'Asignado a',
  'LBL_LIST_DAYS' => 'Días',
  'LBL_LIST_END_DATE' => 'Fecha Fin',
  'LBL_LIST_FILTER_VIEW' => 'Ver:',
  'LBL_LIST_FORM_TITLE' => 'Lista de Proyectos',
  'LBL_LIST_NAME' => 'Nombre',
  'LBL_LIST_OPEN_CASES' => 'Casos Abiertos',
  'LBL_LIST_OVERDUE_TASKS' => 'Tareas Vencidas',
  'LBL_LIST_RESOURCE' => 'Recurso:',
  'LBL_LIST_TEAM_ID' => 'Equipo',
  'LBL_LIST_TOTAL_ACTUAL_EFFORT' => 'Trabajo Total Real (h)',
  'LBL_LIST_TOTAL_ESTIMATED_EFFORT' => 'Trabajo Total Estimado (h)',
  'LBL_LIST_UPCOMING_TASKS' => 'Tareas de Próximo Vencimiento (1 Semana)',
  'LBL_MARK_AS_MILESTONE_BUTTON' => 'Marcar como Hito',
  'LBL_MODIFIED_USER_ID' => 'Modificado por:',
  'LBL_MODULE_NAME' => 'Proyecto',
  'LBL_MODULE_NAME_SINGULAR' => 'Proyecto',
  'LBL_MODULE_TITLE' => 'Proyectos: Inicio',
  'LBL_MONTH_BUTTON' => 'Mes',
  'LBL_MORE' => 'Más...',
  'LBL_MY_PROJECTS' => 'Mis Proyectos',
  'LBL_MY_PROJECTS_DASHBOARD' => 'Mi Cuadro de Mando de Proyectos',
  'LBL_MY_PROJECT_TASKS' => 'Mis Tareas de Proyecto',
  'LBL_NAME' => 'Nombre:',
  'LBL_NEW_FORM_TITLE' => 'Nuevo Proyecto',
  'LBL_NEXT_WEEK' => 'Siguiente',
  'LBL_OPPORTUNITIES' => 'Oportunidades',
  'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Oportunidades',
  'LBL_OPPORTUNITY_SUBPANEL_TITLE' => 'Oportunidades',
  'LBL_OUTDENT_BUTTON' => 'Quitar Indentación',
  'LBL_PASTE_BUTTON' => 'Pegar',
  'LBL_PDF_PROJECT_NAME' => 'Nombre de Proyecto:',
  'LBL_PERCENT_BUSY' => '% Ocupado',
  'LBL_PERCENT_COMPLETE' => '% Completado',
  'LBL_PERCENT_COMPLETE_WIDGET' => 'percent_complete',
  'LBL_PERSONAL_HOLIDAY' => '-- Festivo Personal --',
  'LBL_POPUP_DATE_FINISH' => 'Fecha Fin:',
  'LBL_POPUP_DATE_START' => 'Fecha Inicio:',
  'LBL_POPUP_PERCENT_COMPLETE' => '% Completado:',
  'LBL_POPUP_RESOURCE_NAME' => 'Nombre de Recurso:',
  'LBL_PREDECESSORS' => 'Predecesoras',
  'LBL_PREDECESSORS_WIDGET' => 'predecessors_',
  'LBL_PRIORITY' => 'Prioridad:',
  'LBL_PRODUCTS_SUBPANEL_TITLE' => 'Líneas de la Oferta',
  'LBL_PROJECTRESOURCES_SUBPANEL_TITLE' => 'Recursos del Proyecto',
  'LBL_PROJECTTASK_SUBPANEL_TITLE' => 'Tarea de Proyecto',
  'LBL_PROJECT_HOLIDAYS' => 'Festivo',
  'LBL_PROJECT_HOLIDAYS_TITLE' => 'Festivos de Proyecto',
  'LBL_PROJECT_INFORMATION' => 'Visión General',
  'LBL_PROJECT_NAME' => 'Nombre de Proyecto:',
  'LBL_PROJECT_SUBPANEL_TITLE' => 'Proyectos',
  'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'Tareas de Proyecto',
  'LBL_PROJECT_TASK_SUBPANEL_TITLE' => 'Tareas de Proyecto',
  'LBL_PROJECT_TEMPLATE' => 'Plantilla de Proyecto',
  'LBL_PROJECT_TEMPLATES_LIST' => 'Lista de Plantillas de Proyecto',
  'LBL_PROJECT_TEMPLATES_TITLE' => 'Plantillas de Proyecto: Inicio',
  'LBL_PROJECT_TEMPLATE_NAME' => 'Nombre de Plantilla:',
  'LBL_QUICK_NEW_PROJECT' => 'Nuevo Proyecto',
  'LBL_QUOTES_SUBPANEL_TITLE' => 'Presupuestos',
  'LBL_QUOTE_SUBPANEL_TITLE' => 'Presupuestos',
  'LBL_RECALCULATE_DATES_BUTTON' => 'Recalcular Fechas',
  'LBL_REPORT' => 'Informe',
  'LBL_RESOURCES_SUBPANEL_TITLE' => 'Recursos',
  'LBL_RESOURCE_NAME' => 'Nombre',
  'LBL_RESOURCE_NAMES' => 'Recurso',
  'LBL_RESOURCE_NAMES_WIDGET' => 'resource',
  'LBL_RESOURCE_REPORT' => 'Informe de Recursos',
  'LBL_RESOURCE_TYPE' => 'Tipo',
  'LBL_RLI_SUBPANEL_TITLE' => 'Líneas de Ingreso',
  'LBL_SAVE_AS_NEW_PROJECT_BUTTON' => 'Guardar como Nuevo Proyecto',
  'LBL_SAVE_AS_NEW_TEMPLATE_BUTTON' => 'Guardar como Nueva Plantilla',
  'LBL_SAVE_AS_PROJECT' => 'Guardar como Proyecto',
  'LBL_SAVE_AS_TEMPLATE' => 'Guardar como Plantilla',
  'LBL_SAVE_BUTTON' => 'Guardar',
  'LBL_SAVE_TEMPLATE_BUTTON_LABEL' => 'Guardar como Plantilla',
  'LBL_SAVE_TEMPLATE_BUTTON_TITLE' => 'Guardar como Plantilla',
  'LBL_SEARCH_FORM_TITLE' => 'Búsqueda de Proyectos',
  'LBL_SHOW_OPTIONAL_COLUMNS_BUTTON' => 'Mostrar Columnas Opcionales',
  'LBL_START' => 'Inicio',
  'LBL_START_WIDGET' => 'date_start',
  'LBL_STATUS' => 'Estado:',
  'LBL_TASK_ID' => 'ID',
  'LBL_TASK_ID_WIDGET' => 'id',
  'LBL_TASK_NAME' => 'Nombre de Tarea',
  'LBL_TASK_NAME_WIDGET' => 'description',
  'LBL_TEAM_ID' => 'Equipo:',
  'LBL_TEMPLATE_NAME' => 'Nombre de Plantilla:',
  'LBL_TOTAL_ACTUAL_EFFORT' => 'Trabajo Total Real (h):',
  'LBL_TOTAL_ESTIMATED_EFFORT' => 'Trabajo Total Estimado (h):',
  'LBL_UNMARK_AS_MILESTONE_BUTTON' => 'Desmarcar como Hito',
  'LBL_USER_RESOURCE' => 'Recurso de Usuario',
  'LBL_VIEW_GANTT_TITLE' => 'Ver Diagrama de Gantt',
  'LBL_VIEW_TASK_DETAILS_BUTTON' => 'Ver Detalles de Tareas',
  'LBL_WEEK_BUTTON' => 'Semana',
  'LNK_NEW_PROJECT' => 'Crear Proyecto',
  'LNK_NEW_PROJECT_TASK' => 'Crear Tarea de Proyecto',
  'LNK_NEW_PROJECT_TEMPLATES' => 'Crear Plantilla de Proyecto',
  'LNK_PROJECT_DASHBOARD' => 'Ver Mi Cuadro de Mando de Proyectos',
  'LNK_PROJECT_LIST' => 'Ver Lista de Proyectos',
  'LNK_PROJECT_RESOURCE_REPORT' => 'Informe de Recursos',
  'LNK_PROJECT_TASKS_DASHBOARD' => 'Mi Cuadro de Mando de Tareas de Proyecto',
  'LNK_PROJECT_TASK_LIST' => 'Ver Tareas de Proyecto',
  'LNK_PROJECT_TEMPLATES_LIST' => 'Ver Plantillas de Proyecto',
  'NTC_ASSIGN_RIGHT_TEAM' => 'Asegúrese de que todos los recursos del proyecto son miembros de este equipo.',
  'NTC_DELETE_TASK_AND_SUBTASKS' => '¿Está seguro de que desea eliminar esta tarea y todas sus subtareas?',
  'NTC_NO_ACTIVE_PROJECTS' => 'No tiene ningún proyecto o tareas de proyecto activas.',
);


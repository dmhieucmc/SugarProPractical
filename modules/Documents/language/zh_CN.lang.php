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
  'DEF_CREATE_LOG' => '已创建文档',
  'ERR_DELETE_CONFIRM' => '您确定要删除这个文档版本?',
  'ERR_DELETE_LATEST_VERSION' => '您沒有权限删除这个文档的最新版本。',
  'ERR_DOC_ACTIVE_DATE' => 'P公布日期',
  'ERR_DOC_EXP_DATE' => '有效期',
  'ERR_DOC_NAME' => '文档名称',
  'ERR_DOC_VERSION' => '文档版本',
  'ERR_FILENAME' => '文件名称',
  'ERR_INVALID_EXTERNAL_API_ACCESS' => '用户尝试进入无效的外部应用程序界面 ({0})',
  'ERR_INVALID_EXTERNAL_API_LOGIN' => '登陆外部应用程序界面的验证失败({0})',
  'ERR_MISSING_FILE' => '该文件丢失，很可能是上传过程导致.  请重新上传文件或联系您的管理员.',
  'LBL_ACCOUNTS_SUBPANEL_TITLE' => '账户',
  'LBL_ACTIVE_DATE' => '公布日期',
  'LBL_ASSIGNED_TO_NAME' => '负责人:',
  'LBL_BUGS_SUBPANEL_TITLE' => '缺陷',
  'LBL_CASES_SUBPANEL_TITLE' => '客户反馈',
  'LBL_CATEGORY' => '类别',
  'LBL_CATEGORY_VALUE' => '类别:',
  'LBL_CAT_OR_SUBCAT_UNSPEC' => '不确定的',
  'LBL_CHANGE_LOG' => '修改日志',
  'LBL_CONTACTS_SUBPANEL_TITLE' => '合同',
  'LBL_CONTRACTS' => '合同',
  'LBL_CONTRACTS_SUBPANEL_TITLE' => '相关合同',
  'LBL_CONTRACT_NAME' => '合同名称:',
  'LBL_CONTRACT_STATUS' => '合同状况:',
  'LBL_CREATED' => '创建人',
  'LBL_CREATED_BY' => '创建人',
  'LBL_CREATED_USER' => '创建人',
  'LBL_DATE_ENTERED' => '创建日期',
  'LBL_DATE_MODIFIED' => '修改日期',
  'LBL_DELETED' => '已删除',
  'LBL_DESCRIPTION' => '说明',
  'LBL_DET_IS_TEMPLATE' => '模板？ :',
  'LBL_DET_RELATED_DOCUMENT' => '相关文档:',
  'LBL_DET_RELATED_DOCUMENT_VERSION' => '相关文档修订:',
  'LBL_DET_TEMPLATE_TYPE' => '文档类型:',
  'LBL_DOCUMENT' => '相关文档',
  'LBL_DOCUMENT_ID' => '文档编号',
  'LBL_DOCUMENT_INFORMATION' => '文档概述',
  'LBL_DOCUMENT_NAME' => '文档名称',
  'LBL_DOCUMENT_REVISION_ID' => '文档修订Id',
  'LBL_DOC_ACTIVE_DATE' => '公布日期:',
  'LBL_DOC_DESCRIPTION' => '说明:',
  'LBL_DOC_EXP_DATE' => '有效期:',
  'LBL_DOC_ID' => '文档资源编号',
  'LBL_DOC_NAME' => '文档名称:',
  'LBL_DOC_REV_HEADER' => '文档版本',
  'LBL_DOC_STATUS' => '状态:',
  'LBL_DOC_STATUS_ID' => '状态 Id:',
  'LBL_DOC_TYPE' => '资源',
  'LBL_DOC_TYPE_POPUP' => '选择文档上传的<br> 和可利用的资源',
  'LBL_DOC_URL' => '文档资源URL',
  'LBL_DOC_VERSION' => '版本:',
  'LBL_DOWNNLOAD_FILE' => '下载文件:',
  'LBL_EXPIRATION_DATE' => '有效期',
  'LBL_EXTERNAL_DOCUMENT_NOTE' => '前20个最近修改的文件在下面的列表中按降阶排列。用查询去查找其他的文件。',
  'LBL_FILENAME' => '文件名称:',
  'LBL_FILE_EXTENSION' => '副文档',
  'LBL_FILE_UPLOAD' => '文件:',
  'LBL_FILE_URL' => '文件 url',
  'LBL_HOMEPAGE_TITLE' => '我的文档',
  'LBL_IS_TEMPLATE' => '是否是模板',
  'LBL_LASTEST_REVISION_NAME' => '最新版本名称:',
  'LBL_LAST_REV_CREATE_DATE' => '最新版本创建日期',
  'LBL_LAST_REV_CREATOR' => '改版人:',
  'LBL_LAST_REV_DATE' => '改版日期:',
  'LBL_LAST_REV_MIME_TYPE' => '最新版本 MIME 类型',
  'LBL_LATEST_REVISION' => '最新版本',
  'LBL_LATEST_REVISION_ID' => '最新版本编号',
  'LBL_LINKED_ID' => '链接标识',
  'LBL_LIST_ACTIVE_DATE' => '公布日期',
  'LBL_LIST_CATEGORY' => '类别',
  'LBL_LIST_DOCUMENT' => '文档',
  'LBL_LIST_DOCUMENT_NAME' => '名称',
  'LBL_LIST_DOC_TYPE' => '资源',
  'LBL_LIST_DOWNLOAD' => '下载',
  'LBL_LIST_EXP_DATE' => '有效期',
  'LBL_LIST_EXT_DOCUMENT_NAME' => '文件名称',
  'LBL_LIST_FILENAME' => '文件:',
  'LBL_LIST_FORM_TITLE' => '文档列表',
  'LBL_LIST_IS_TEMPLATE' => '模板？',
  'LBL_LIST_LAST_REV_CREATOR' => '出版人',
  'LBL_LIST_LAST_REV_DATE' => '改版日期',
  'LBL_LIST_LATEST_REVISION' => '最新版本',
  'LBL_LIST_REVISION' => '版本',
  'LBL_LIST_SELECTED_REVISION' => '选择的版本',
  'LBL_LIST_STATUS' => '状态',
  'LBL_LIST_SUBCATEGORY' => '子类别',
  'LBL_LIST_TEMPLATE_TYPE' => '文档类型',
  'LBL_LIST_VIEW_DOCUMENT' => '查看',
  'LBL_MAIL_MERGE_DOCUMENT' => '邮件合并模版:',
  'LBL_MIME' => 'Mime 类型',
  'LBL_MODIFIED' => '修改人编号',
  'LBL_MODIFIED_USER' => '修改人',
  'LBL_MODULE_NAME' => '文档',
  'LBL_MODULE_NAME_SINGULAR' => '文档',
  'LBL_MODULE_TITLE' => '文档: 首页',
  'LBL_NAME' => '文档名称',
  'LBL_NEW_FORM_TITLE' => '新建文档',
  'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => '商业机会',
  'LBL_QUOTES_SUBPANEL_TITLE' => '引用',
  'LBL_RELATED_DOCUMENT_ID' => '相关文档编号',
  'LBL_RELATED_DOCUMENT_REVISION_ID' => '相关文档版本编号',
  'LBL_REVISION' => '版本',
  'LBL_REVISIONS' => '修订版',
  'LBL_REVISIONS_PANEL' => '修改详情',
  'LBL_REVISIONS_SUBPANEL' => '修订版',
  'LBL_REVISION_NAME' => '版本编号',
  'LBL_RLI_SUBPANEL_TITLE' => '收入线项目',
  'LBL_SEARCH_EXTERNAL_DOCUMENT' => '文件名称',
  'LBL_SEARCH_FORM_TITLE' => '查找文档',
  'LBL_SELECTED_REVISION_FILENAME' => '选中版本文件名',
  'LBL_SELECTED_REVISION_ID' => '选中版本的编号',
  'LBL_SELECTED_REVISION_NAME' => '选中版本的名称:',
  'LBL_SF_ACTIVE_DATE' => '公布日期:',
  'LBL_SF_CATEGORY' => '类别:',
  'LBL_SF_DOCUMENT' => '文档名称:',
  'LBL_SF_EXP_DATE' => '有效期:',
  'LBL_SF_SUBCATEGORY' => '子类别:',
  'LBL_STATUS' => '状态',
  'LBL_SUBCATEGORY' => '子类别',
  'LBL_SUBCATEGORY_VALUE' => '子类别:',
  'LBL_TEAM' => '团队:',
  'LBL_TEMPLATE_TYPE' => '文档类型',
  'LBL_THEREVISIONS_SUBPANEL_TITLE' => '文档版本',
  'LBL_TREE_TITLE' => '文档',
  'LNK_DOCUMENT_LIST' => '文档列表',
  'LNK_NEW_DOCUMENT' => '新增文档',
  'LNK_NEW_MAIL_MERGE' => '邮件合并',
);

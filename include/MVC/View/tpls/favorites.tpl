{*
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
*}
[{foreach from=$FAVORITES item=item name=favorites}{ldelim}"text":"{$item.label|htmlentities:$smarty.const.ENT_QUOTES:'utf-8'}","url": "{sugar_link module=$item.module action='DetailView' record=$item.record_id link_only=1}"{rdelim}{if !$smarty.foreach.favorites.last},{/if}{foreachelse}{ldelim} "text": "{$APP.NTC_NO_ITEMS_DISPLAY}"{rdelim}{/foreach}]
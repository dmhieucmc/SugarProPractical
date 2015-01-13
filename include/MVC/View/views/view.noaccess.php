<?php

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

class ViewNoaccess extends SugarView
{
	public $type = 'noaccess';
	
	/**
	 * @see SugarView::display()
	 */
	public function display()
	{
		echo '<p class="error">Warning: You do not have permission to access this module.</p>';
 	}
}

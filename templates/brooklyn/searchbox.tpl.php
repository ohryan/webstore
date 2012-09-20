<?php
/*
  LightSpeed Web Store
 
  NOTICE OF LICENSE
 
  This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to support@lightspeedretail.com <mailto:support@lightspeedretail.com>
 * so we can send you a copy immediately.
   
 * @copyright  Copyright (c) 2011 Xsilva Systems, Inc. http://www.lightspeedretail.com
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 
 */

/**
 * template Search input field in menu bar
 *
 *
 *
 */
?>
	<div class="three columns alpha omega">
		<span class="search_left"><img class="spyglass" src="<?= templateNamed('css/images/spyglass.png') ; ?>"></span>
		<span class="search_box"><?php $this->txtSearchBox->Render(); ?></span>
	</div>
	<div class="one column alpha omega">
		<span class="search_advanced right"><a href="<?php echo _xls_site_url('advanced_search/pg'); ?>"><img class="spyglass" src="<?= templateNamed('css/images/adv_search.png') ; ?>"></a></span>
	</div>
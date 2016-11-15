<?php 

/**
 * CedCommerce
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
  * http://opensource.org/licenses/osl-3.0.php
 *
 * @category    Ced
 * @package     Ced_CsMarketplace
 * @author    CedCommerce Core Team <coreteam@cedcommerce.com>
 * @copyright   Copyright CedCommerce (http://cedcommerce.com/)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
$installer = $this;
$installer->startSetup();
$this->addAttribute('csmarketplace_vendor', 'member_id', array(
		'group'			=> 'General Information',
		'visible'      	=> true,
		'position'      => 26,
		'required'     => false,
		'type'         => 'varchar',
		'visible_on_front'  => true,
		'input'        => 'text',
		'label'         => 'Member ID',
		'source'        => '',
		'unique'		=> true,
		'user_defined'  => false
));

$installer->endSetup();

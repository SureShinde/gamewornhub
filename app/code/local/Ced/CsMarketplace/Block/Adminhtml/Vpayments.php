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
 * @category    Ced;
 * @package     Ced_CsMarketplace 
 * @author 		CedCommerce Core Team <coreteam@cedcommerce.com> 
 * @copyright   Copyright CedCommerce (http://cedcommerce.com/)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class Ced_CsMarketplace_Block_Adminhtml_Vpayments extends Mage_Adminhtml_Block_Widget_Grid_Container
{
	/**
     * Set template
     */
	public function __construct()
	{	
		$this->_controller = 'adminhtml_vpayments';
		$this->_blockGroup = 'csmarketplace';
		$this->_headerText = Mage::helper('csmarketplace')->__('Manage Vendor Transactions');
		$this->_addButtonLabel = Mage::helper('csmarketplace')->__('Credit Amount');
		$this->_addButton('assign', array(
            'label'     => $this->getAddButtonLabel(),
            'onclick'   => 'setLocation(\'' . $this->getCreateUrl() .'\')',
            'class'     => 'add',
        ));
		$this->_addButton('go', array(
            'label'     => Mage::helper('csmarketplace')->__('Debit Amount'),
            'onclick'   => 'setLocation(\'' . $this->getUrl('*/*/new',array('type'=>Ced_CsMarketplace_Model_Vpayment::TRANSACTION_TYPE_DEBIT)) .'\')',
            'class'     => 'go',
        ));
		parent::__construct();
		$this->_removeButton('add');
	}
	
	/**
     * Redefine header css class
     *
     * @return string
     */
    public function getHeaderCssClass() {
        return 'icon-head head-sales-invoice';
    }
}
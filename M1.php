<h1 class="entry-title">Magento – Accessing, Getting and Using Custom Variables in PHTML</h1>
// To get the TEXT value of the custom variable:
Mage::getModel('core/variable')->setStoreId(Mage::app()->getStore()->getId())->loadByCode('custom_variable_code')->getValue('text');
 
// To get the HTML value of the custom variable:
Mage::getModel('core/variable')->setStoreId(Mage::app()->getStore()->getId())->loadByCode('custom_variable_code')->getValue('html');
 
// The store id is set as Custom Variables can be edited for multiple stores
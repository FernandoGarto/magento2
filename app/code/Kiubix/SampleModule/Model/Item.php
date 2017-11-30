<?php
namespace Kiubix\SampleModule\Model;

use Magento\Framework\Model\AbstractModel;

class Item extends AbstractModel
{
  protected function _construct()
  {
      $this->_init(\Kiubix\SampleModule\Model\ResourceModel\Item::class);
  }
}
?>

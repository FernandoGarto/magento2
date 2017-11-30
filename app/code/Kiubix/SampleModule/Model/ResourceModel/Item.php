<?php
namespace Kiubix\SampleModule\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Item extends AbstractDb
{
  protected function _construct()
  {
      $this->_init('kiubix_sample_item', 'id');
  }
}
?>

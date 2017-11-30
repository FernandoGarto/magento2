<?php
namespace Kiubix\SampleModule\Model\ResourceModel\Item;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Kiubix\SampleModule\Model\Item;
use Kiubix\SampleModule\Model\ResourceModel\Item as ItemResource;

class Collection extends AbstractCollection
{
  protected $_idFieldName = 'id';

  protected function _construct(){
    $this->_init(Item::class, ItemResource::class);
  }
}

?>

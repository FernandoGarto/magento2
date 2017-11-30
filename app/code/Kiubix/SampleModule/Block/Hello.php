<?php

namespace Kiubix\SampleModule\Block;

use Magento\Framework\View\Element\Template;
use Kiubix\SampleModule\Model\ResourceModel\Item\Collection;
use Kiubix\SampleModule\Model\ResourceModel\Item\CollectionFactory;

class Hello extends Template
{
    private $collectionFactory;

    public function __construct(
        Template\Context $context,
        CollectionFactory $collectionFactory,
        array $data = []
    ) {
        $this->collectionFactory = $collectionFactory;
        parent::__construct($context, $data);
    }

    public function getItems()
    {
        return $this->collectionFactory->create()->getItems();
    }
}

?>

<?php

namespace Kiubix\SampleModule\Api;

interface ItemRepositoryInterface
{
    /**
     * @return \Kiubix\SampleModule\Api\Data\ItemInterface[]
     */
    public function getList();
}

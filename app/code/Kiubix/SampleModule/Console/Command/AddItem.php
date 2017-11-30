<?php

namespace Kiubix\SampleModule\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Kiubix\SampleModule\Model\ItemFactory;
use Magento\Framework\Console\Cli;
use Psr\Log\LoggerInterface;


class AddItem extends Command
{
  const INPUT_KEY_NAME = 'name';
  const INPUT_KEY_DESC = 'description';

  private $itemFactory;

  private $logger;

  public function __construct(ItemFactory $itemFactory, LoggerInterface $logger)
  {
    $this->itemFactory = $itemFactory;
    $this->logger = $logger;
    parent::__construct();
  }

  protected function configure()
  {
    $this->setName('kiubix:item:add')
      ->addArgument(
          self::INPUT_KEY_NAME,
          InputArgument::REQUIRED,
          'Item name'
      )->addArgument(
          self::INPUT_KEY_DESC,
          InputArgument::OPTIONAL,
          'Item description'
      );

      parent::configure();
  }

  protected function execute(InputInterface $input, OutputInterface $output)
  {
    $item = $this->itemFactory->create();
    $item->setName($input->getArgument(self::INPUT_KEY_NAME));
    $item->setDescription($input->getArgument(self::INPUT_KEY_DESC));
    $item->setIsObjectNew(true);
    $item->save();
    $this->logger->debug("Item was created.");

    return Cli::RETURN_SUCCESS;
  }
}

?>

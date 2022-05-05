<?php declare(strict_types=1);

namespace App;


use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class TestCommand extends Command
{
    protected static $defaultName = 'testcommand';
    protected static $defaultDescription = 'dummy';

    public function __construct()
    {
        parent::__construct('testcommand');
    }

    public function isEnabled(): bool
    {
        return false;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        return self::SUCCESS;
    }
}

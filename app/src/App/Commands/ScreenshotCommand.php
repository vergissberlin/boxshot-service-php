<?php
namespace Console\App\Commands;
 
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Spatie\Browsershot\Browsershot;

class ScreenshotCommand extends Command
{
    protected function configure()
    {
        $this->setName('screenshot')
            ->setDescription('Makes a screenshot')
            ->setHelp('That´s my first try.')
            ->addArgument('url', InputArgument::REQUIRED, 'Pass the url.');
    }
 
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        Browsershot::url( $input->getArgument('url'))->save('/data/test.png');
        $output->writeln(sprintf('Make a screenshot of %s!', $input->getArgument('url')));
        return 0;
    }
}

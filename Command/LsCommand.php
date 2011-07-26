<?php

namespace Cordova\Bundle\FormModelBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * @author Luis Cordova <cordoval@gmail.com>
 */
class LsCommand extends ContainerAwareCommand {

    /**
     * @see Command
     */
    protected function configure()
    {
        $this
            ->setName('cordova:ls')
            ->setDescription('Lists files and folders')
            ->setDefinition(array(
                new InputArgument('input', InputArgument::REQUIRED, 'The input directory or file'),
            ))
            ->setHelp(<<<EOT
The <info>cordova:ls</info> command lists files and folders for a given input directory or file
            
  <info>php app/console cordova:ls myProjectDir/subfolder</info>
EOT
            );
    }

    /**
     * @see Command
     */
    public function execute(InputInterface $input, OutputInterface $output)
    {
        $dirfile = $input->getArgument('input');

        if (null == $dirfile) {
            throw new \InvalidArgumentException('You need to specify a file or directory as argument.');
        }

        exec('ls '.$dirfile, $text);
        $output_text = trim(implode("\n", $text));
        $output->writeln($output_text);
    }

}
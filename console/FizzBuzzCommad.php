<?php


namespace Console;


use FizzBuzz\FizzBuzz;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;


class FizzBuzzCommad extends Command
{
    /** @var  OutputInterface */
    protected $output;

    protected function configure()
    {
        $this->setName('kata-command')
            ->setDescription('Print the kata numbers')
            ->setHelp('Write a number from 1 to 100')
            ->addOption('number', null, InputOption::VALUE_REQUIRED, 'how many numbers do you want? (1,100)', 15);
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->output = $output;

        $this->output->writeln('<info>== WELCOME YOUNG GRASSHOPPERS!! ==</info>');
        $this->output->writeln('');

        $numberList = range(1,$input->getOption('number'));

        array_map(function($key){
            $fizzbuzz = new FizzBuzz($key);

            if(gettype($fizzbuzz->obtainResult()) == 'string'){
                $this->output->writeln('<comment>'.$fizzbuzz->obtainResult().'</comment>');
            }else{

                $this->output->writeln($fizzbuzz->obtainResult());
            }
        }, $numberList);

        $this->output->writeln('');
    }
    
}




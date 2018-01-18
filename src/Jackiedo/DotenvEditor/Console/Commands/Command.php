<?php

namespace Jackiedo\DotenvEditor\Console\Commands;

use Illuminate\Console\Command as LaravelCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Command extends LaravelCommand
{
    /**
     * Execute the console command.
     *
     * @param  \Symfony\Component\Console\Input\InputInterface  $input
     * @param  \Symfony\Component\Console\Output\OutputInterface  $output
     * @return mixed
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $method = method_exists($this, 'handle') ? 'handle' : 'fire';
        return $this->laravel->call([$this, $method]);
    }
}

<?php

/**
 * 自动生成代码
 * @author lvxiaolin <1974764328@qq.com>
 */
namespace lvxiaolin\autocode\command;

use think\console\Command;
use think\console\Input;
use think\console\input\Option;
use think\console\Output;
use think\queue\Listener;

class Update extends Command
{
    /** @var  Listener */
    protected $listener;

    public function configure()
    {
        $this->setName('autocode:update')
//            ->addOption('queue', null, Option::VALUE_OPTIONAL, 'The queue to listen on', null)
//            ->addOption('delay', null, Option::VALUE_OPTIONAL, 'Amount of time to delay failed jobs', 0)
//            ->addOption('memory', null, Option::VALUE_OPTIONAL, 'The memory limit in megabytes', 128)
//            ->addOption('timeout', null, Option::VALUE_OPTIONAL, 'Seconds a job may run before timing out', 60)
//            ->addOption('sleep', null, Option::VALUE_OPTIONAL, 'Seconds to wait before checking queue for jobs', 3)
//            ->addOption('tries', null, Option::VALUE_OPTIONAL, 'Number of times to attempt a job before logging it failed', 0)
            ->setDescription('update autocode');
    }

    public function initialize(Input $input, Output $output)
    {
    }

    public function execute(Input $input, Output $output)
    {
        
    }
    
    protected function findCommandPath()
    {
        
    }
}

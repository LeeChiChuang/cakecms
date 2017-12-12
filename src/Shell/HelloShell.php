<?php
namespace App\Shell;

use Cake\Console\Shell;
use Cake\Log\Log;

class HelloShell extends Shell
{
    public function main()
    {
        Log::config('special', function () {
            return new \Cake\Log\Engine\FileLog(['path' => LOGS, 'file' => 'hello']);
        });

        $this->log("Something didn't work!");
        $this->out('Hello world.');
    }
}
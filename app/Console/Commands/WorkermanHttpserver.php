<?php
namespace App\Console\Commands;
use App;
use Illuminate\Console\Command;
use Workerman\Worker;
use Workerman\Autoloader;

class WorkermanHttpServer extends Command
{
    protected $httpserver;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'workerman:httpserver {action} {--daemonize}';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'workerman httpserver';
    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }
    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        global $argv;
        $arg = $this->argument('action');
        $argv[1] = $argv[2];
        $argv[2] = isset($argv[3]) ? "-{$argv[3]}" : '';
        switch ($arg) {
            case 'start':
                $this->start(); //这里调用
                break;
            case 'stop':
                break;
            case 'restart':
                break;
            case 'reload':
                break;
            case 'status':
                break;
            case 'connections':
                break;
        }
    }

    public function start()
    {
        $text_worker = new Worker("text://127.0.0.1:5678");

        $text_worker->onMessage =  function($connection, $data)
        {
            var_dump($data);
            $connection->send("hello world");
        };
        Worker::runAll();
    }
}
<?php
namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\Message;
use Workerman\Worker;


class SendEmail extends Command
{
/**
* The name and signature of the console command.
*
* @var string
*/
protected $signature = 'send:email {action}';

/**
* The console command description.
*
* @var string
*/
protected $description = 'Command description';

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
*/
public function handle()
{
$mailWorker = new Worker('Text://0.0.0.0:12345');
$mailWorker->count = 4;
$mailWorker->name = 'MailWorker';
$mailWorker->onMessage = function ($connection, $emailData) {
$emailData = json_decode($emailData);
$name = $emailData->name;
$email = $emailData->to;
Mail::raw('注册成功', function (Message $message) use ($email) {
$message->to($email)->subject(trans('mail.welcome_register'));
});

// 写入日志
Log::useFiles(storage_path() . '/logs/event.log', 'info');
Log::info("{$name}({$email})注册成功");
};

Worker::runAll();
}
}
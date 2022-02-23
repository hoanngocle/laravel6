<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SendEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:name';

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
     * @return void
     */
    public function handle()
    {
        logger("Building");
        $this->info("Building!");
//        $name = $this->ask('What is your name?');
//        $name = $this->anticipate('What is your name?', ['Taylor', 'Dayle']);
//        $name = $this->choice('What is your name?', ['Taylor', 'Dayle'], 1);
//        $password = $this->secret('What is the password?');
//        if ($this->confirm('Do you wish to continue?')) {
//            $user = $this->argument('user');
//            $type = $this->option('type');
//            return $this->info("Building {$name} {$user }! {$type} {$password}");
//        } else {
//            return $this->info("Building! {$name} - {$password}");
//        }

//        $headers = ['Name', 'Email'];
//
//        $users =[
//            ['test', 'test@gmail.com'],
//            ['test', 'test@gmail.com'],
//            ['test', 'test@gmail.com'],
//            ['test', 'test@gmail.com'],
//            ['test', 'test@gmail.com'],
//            ['test', 'test@gmail.com'],
//        ];
//
//        $this->table($headers, $users);
//
//        $bar = $this->output->createProgressBar(100);
//
//        $bar->start();
//
//        for ($i = 0; $i < 100; $i++) {
//            usleep(50000);
//            $bar->advance();
//        }
//
//        $bar->finish();
    }
}

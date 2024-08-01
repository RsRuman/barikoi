<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Tymon\JWTAuth\Facades\JWTAuth;

class GenerateToken extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate:token';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $token = JWTAuth::fromUser(User::find(1));
        $this->info('Token: ' . $token);
        $this->info('Please use this token as bearer token in api request.');
    }
}

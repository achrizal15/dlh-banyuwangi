<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use Illuminate\Console\Command;

class RefreshInstagramToken extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'instagram:refresh-token';
    protected $description = 'Refresh Instagram API tokens';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info('Refreshing Instagram API tokens...' . Carbon::now()->toDateString());
        $instagramRefreshTokenAction = new \App\Action\InstagramRefreshTokenAction;
        $result = $instagramRefreshTokenAction->generate();
        if ($result == false) {
            $this->info('Instagram API tokens refreshed failure.' . Carbon::now()->toDateString());
            return Command::FAILURE;
        }
        $this->info('Instagram API tokens refreshed successfully:' . $result->access_token);
        return Command::SUCCESS;
    }
}

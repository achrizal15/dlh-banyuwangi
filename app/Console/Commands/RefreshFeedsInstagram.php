<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use Illuminate\Console\Command;

class RefreshFeedsInstagram extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'instagram:refresh-feeds';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Wil refresh instagram';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $instagramRefreshFeedsAction = new \App\Action\InstagramRefreshFeedsAction;
        $result = $instagramRefreshFeedsAction->generate();
        if ($result == false) {
            $this->info('Instagram API feed refreshed failure.');
            return Command::FAILURE;
        }
        $this->info('Instagram API feed refreshed success.' . Carbon::now()->toDateString());
        return Command::SUCCESS;
    }
}

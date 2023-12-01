<?php

namespace App\Console\Commands;

use App\Models\LandOffer;
use Illuminate\Console\Command;

class DeleteUnAcceptedOffers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'offers:deleteUnAccepted';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        LandOffer::where("accepted_by", null)
            ->where("created_at", "<", now()->subDays(5))
            ->delete();


        return Command::SUCCESS;
    }
}

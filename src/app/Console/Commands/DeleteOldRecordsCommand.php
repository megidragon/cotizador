<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Infrastructure\Model\FormData;
use Infrastructure\Model\FormStep;
use Infrastructure\Model\Token;

class DeleteOldRecordsCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'clear-records';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete old records about budgets numbers and form data';

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
     * @return int
     */
    public function handle()
    {
        FormData::where('created_at', '<=', Carbon::now()->subHours(6)->toDateTimeString())->delete();
        FormStep::where('created_at', '<=', Carbon::now()->subHours(6)->toDateTimeString())->delete();

        return true;
    }
}

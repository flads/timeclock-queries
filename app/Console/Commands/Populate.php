<?php

namespace App\Console\Commands;

use App\Models\Address;
use App\Models\Branch;
use App\Models\Company;
use App\Models\Person;
use App\Models\TimeClockRecord;
use Illuminate\Console\Command;

class Populate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:populate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info(now());

        Company::factory()->count(10)
            ->has(
                Branch::factory()->count(3)
                    ->has(
                        Address::factory()
                    )
                    ->has(
                        Person::factory()->count(2)
                            ->has(
                                Address::factory()
                            )
                            ->has(
                                TimeClockRecord::factory()->count(20)
                            ),
                        'persons'
                    )
            )->create();

        $this->info(now());
    }
}

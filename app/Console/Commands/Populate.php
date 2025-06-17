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

        Company::factory()->count(1)
            ->has(
                Branch::factory()->count(2)
                    ->has(
                        Address::factory()
                    )
                    ->has(
                        Person::factory()->count(1)
                            ->has(
                                Address::factory()
                            )
                            ->has(
                                TimeClockRecord::factory()->count(2)
                            ),
                        'persons'
                    )
            )->create();

        Company::factory()->count(1)
            ->has(
                Branch::factory()->count(2)
                    ->has(
                        Address::factory()
                    )
                    ->has(
                        Person::factory()->count(1)
                            ->has(
                                Address::factory()
                            )
                            ->has(
                                TimeClockRecord::factory()->count(2)
                            ),
                        'persons'
                    )
                    ->has(
                        Person::factory()->count(2)
                            ->has(
                                Address::factory()
                            ),
                        'persons'
                    )
            )->create();

        $this->info(now());
    }
}

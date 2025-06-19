<?php

namespace App\Http\Repositories;

use Illuminate\Support\Facades\DB;

class GetLeftJoinRepository
{
    public function execute()
    {
        return DB::select("
            SELECT p.name, tcr.time FROM persons p
            LEFT JOIN time_clock_records tcr ON tcr.person_id = p.id;
        ");
    }
}
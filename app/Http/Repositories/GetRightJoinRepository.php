<?php

namespace App\Http\Repositories;

use Illuminate\Support\Facades\DB;

class GetRightJoinRepository
{
    public function execute()
    {
        return DB::select("
            SELECT p.name, tcr.time FROM persons p
            RIGHT JOIN time_clock_records tcr ON tcr.person_id = p.id;
        ");
    }
}
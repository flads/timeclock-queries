<?php

namespace App\Http\Repositories;

use Illuminate\Support\Facades\DB;

class GetRegistersCountRepository
{
    public function execute()
    {
        return DB::selectOne("
            SELECT
                (SELECT count(c.id) FROM companies c) AS companies,
                (SELECT count(b.id) FROM branches b) AS branches,
                (SELECT count(p.id) FROM persons p) AS persons,
                (SELECT count(a.id) FROM addresses a) AS address,
                (SELECT count(tcr.id) FROM time_clock_records tcr) AS time_clock_records;
        ");
    }
}
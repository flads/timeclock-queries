<?php

namespace App\Http\Repositories;

use Illuminate\Support\Facades\DB;

class GetSubqueryRepository
{
    public function execute()
    {
        return DB::select("
            SELECT
                p.name,
                concat(a.street, ', ' , a.number) AS address,
                c.name AS company_name,
                (
                    SELECT count(tcr.id) FROM time_clock_records tcr
                    WHERE tcr.person_id = p.id
                ) AS time_clock_count
            FROM persons p
            INNER JOIN branches b ON b.id = p.branch_id
            INNER JOIN companies c ON c.id = b.company_id
            INNER JOIN addresses a ON a.person_id = p.id;
        ");
    }
}
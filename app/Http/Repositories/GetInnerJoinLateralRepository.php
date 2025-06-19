<?php

namespace App\Http\Repositories;

use Illuminate\Support\Facades\DB;

class GetInnerJoinLateralRepository
{
    public function execute()
    {
        return DB::select("
            SELECT p.name, g.description AS gender FROM persons p
            INNER JOIN lateral (
                SELECT * FROM genders g
                where g.gender = p.gender
            ) AS g ON TRUE;
        ");
    }
}
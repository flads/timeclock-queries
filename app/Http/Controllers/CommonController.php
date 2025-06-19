<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Repositories\GetRegistersCountRepository;

class CommonController extends Controller
{
    public function __construct(
        private readonly GetRegistersCountRepository $getRegistersCountRepository
    ) {}

    public function getRegistersCount()
    {
        $response = $this->getRegistersCountRepository->execute();

        return response()->json($response);
    }
}
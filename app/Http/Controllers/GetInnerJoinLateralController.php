<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Repositories\GetInnerJoinLateralRepository;

class GetInnerJoinLateralController extends Controller
{
    public function __construct(
        private readonly GetInnerJoinLateralRepository $getInnerJoinLateralRepository
    ) {}

    public function __invoke()
    {
        $response = $this->getInnerJoinLateralRepository->execute();

        return response()->json($response);
    }
}
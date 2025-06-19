<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Repositories\GetRightJoinRepository;

class GetRightJoinController extends Controller
{
    public function __construct(
        private readonly GetRightJoinRepository $getRightJoinRepository
    ) {}

    public function __invoke()
    {
        $response = $this->getRightJoinRepository->execute();

        return response()->json($response);
    }
}
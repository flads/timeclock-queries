<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Repositories\GetInnerJoinRepository;

class GetInnerJoinController extends Controller
{
    public function __construct(
        private readonly GetInnerJoinRepository $getInnerJoinRepository
    ) {}

    public function __invoke()
    {
        $response = $this->getInnerJoinRepository->execute();

        return response()->json($response);
    }
}
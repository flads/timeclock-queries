<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Repositories\GetLeftJoinRepository;

class GetLeftJoinController extends Controller
{
    public function __construct(
        private readonly GetLeftJoinRepository $getLeftJoinRepository
    ) {}

    public function __invoke()
    {
        $response = $this->getLeftJoinRepository->execute();

        return response()->json($response);
    }
}
<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Repositories\GetSubqueryRepository;

class GetSubqueryController extends Controller
{
    public function __construct(
        private readonly GetSubqueryRepository $getSubqueryRepository
    ) {}

    public function __invoke()
    {
        $response = $this->getSubqueryRepository->execute();

        return response()->json($response);
    }
}
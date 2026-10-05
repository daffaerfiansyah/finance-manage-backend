<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use OpenApi\Attributes as OA;

class TestController extends Controller
{
    #[OA\Get(
        path: '/api/test',
        description: 'Endpoint tes untuk memastikan Swagger berfungsi',
        responses: [
            new OA\Response(response: 200, description: 'Sukses')
        ]
    )]
    public function index()
    {
        return response()->json(['message' => 'Sukses']);
    }
}

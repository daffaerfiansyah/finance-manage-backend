<?php

namespace App\Http\Controllers;

use OpenApi\Attributes as OA;

#[OA\Info(
    version: "1.0.0",
    description: "Dokumentasi API untuk Aplikasi Pencatatan Keuangan",
    title: "Finance Management API Documentation",
)]
#[OA\Server(
    url: L5_SWAGGER_CONST_HOST,
    description: "API Server Utama"
)]
abstract class Controller
{
    //
}

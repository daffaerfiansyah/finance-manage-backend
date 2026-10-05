<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SwaggerBasicAuth
{
    public function handle(Request $request, Closure $next): Response
    {
        // Membaca kredensial dari .env
        $validUser = env('SWAGGER_USERNAME');
        $validPass = env('SWAGGER_PASSWORD');

        if (!$validUser || !$validPass) {
            abort(403, 'Swagger access is not configured.');
        }

        $inputUser = $request->getUser();
        $inputPass = $request->getPassword();

        if ($inputUser !== $validUser || $inputPass !== $validPass) {
            return response('Unauthorized. Akses Swagger ditolak.', 401, [
                'WWW-Authenticate' => 'Basic realm="Finance API Documentation"',
            ]);
        }

        return $next($request);
    }
}

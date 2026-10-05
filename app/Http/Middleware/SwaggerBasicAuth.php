<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SwaggerBasicAuth
{
    public function handle(Request $request, Closure $next): Response
    {
        // Membaca kredensial dari config (aman saat config:cache aktif)
        $validUser = config('scramble.auth.username');
        $validPass = config('scramble.auth.password');

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

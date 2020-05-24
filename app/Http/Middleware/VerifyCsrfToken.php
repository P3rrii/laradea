<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;

class VerifyCsrfToken extends BaseVerifier
{
    //URIs To Exclude From The CsrfToken Rule
    protected $except = [
        'api/*' //This will make it so we do not need a csrfToken for Api we use the /* do declare that we do not want to use csrfToken for any route that is in the API
    ];
}

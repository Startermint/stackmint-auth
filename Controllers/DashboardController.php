<?php

declare(strict_types=1);

namespace Modules\Auth\Controllers;

use Wayfinder\Auth\AuthManager;
use Wayfinder\Http\CsrfTokenManager;
use Wayfinder\Http\Request;
use Wayfinder\Http\Response;
use Wayfinder\View\View;

final class DashboardController
{
    public function __construct(
        private readonly View $view,
        private readonly CsrfTokenManager $csrf,
        private readonly AuthManager $auth,
    ) {
    }

    public function __invoke(Request $request): Response
    {
        $user = $this->auth->user();

        return $this->view->response('auth::dashboard', [
            'request' => $request,
            'csrfToken' => $this->csrf->token($request->session()),
            'status' => $request->session()->pull('status'),
            'user' => $user,
        ]);
    }
}

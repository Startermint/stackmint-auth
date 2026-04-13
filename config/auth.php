<?php

declare(strict_types=1);

return [
    'css_framework' => $_ENV['AUTH_CSS_FRAMEWORK'] ?? 'custom',
    'home_route' => $_ENV['AUTH_HOME_ROUTE'] ?? '/dashboard',
    'register_dashboard_route' => filter_var($_ENV['AUTH_REGISTER_DASHBOARD_ROUTE'] ?? true, FILTER_VALIDATE_BOOL),
    'password_reset_ttl' => (int) ($_ENV['AUTH_RESET_TTL'] ?? 3600),
    'verify_email_ttl' => (int) ($_ENV['AUTH_VERIFY_TTL'] ?? 86400),
];

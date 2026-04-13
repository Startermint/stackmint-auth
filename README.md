# Wayfinder Auth

Authentication module package for Wayfinder.

This package is intended to be installed into a Wayfinder app and linked into the app's `Modules/` directory by the module installer command.

It is intentionally kept app-agnostic. The package should handle authentication concerns, not app domain features or foundational app schema.

## Package identity

- Composer package: `wayfinder/auth`
- GitHub repo: `trafficinc/wayfinder-auth`

## Install into an app

From a Wayfinder app:

```bash
php wayfinder module:install auth
```

That should:

1. require `wayfinder/auth` with Composer
2. create a symlink at `Modules/Auth`

The `auth` alias itself belongs in the host app's `config/modules.php` package map. It should not be hard-coded as package-owned metadata inside `wayfinder-auth`.

## Schema ownership

`wayfinder/auth` should not own the application's core `users` table migration. That table belongs in the starter app or host application so each app can control its user schema directly.

If this package ever needs additional auth-specific tables, those should be limited to auth concerns only.

## Local development

This package keeps the module source at the package root so the linked `Modules/Auth` directory remains the module root that Wayfinder already expects.

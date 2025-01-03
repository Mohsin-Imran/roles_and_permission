<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

This commit adds role-based access control (RBAC) to the Laravel application using the Spatie/laravel-permission package. It allows the application to handle user roles and permissions, ensuring only authorized users can access specific routes and functionalities.

Key Features:
Roles and Permissions Management:

Created roles (e.g., Admin, User, etc.) with associated permissions (e.g., create, edit, delete).
Users can be assigned one or more roles, and roles can have multiple permissions.
Role Assignment:

Implemented functionality to assign roles to users, giving them the ability to access restricted sections of the application based on their roles.
Permission Checking:

Added middleware to check for specific permissions and roles before allowing access to certain routes or controllers.
Seamless Integration:

Integrated role and permission checks into controllers, views, and routes to ensure a smooth and secure user experience.
Implementation Steps:
Spatie/laravel-permission package installed and configured.
Migration files added for roles and permissions.
Seeders created for predefined roles (Admin, User).
Middleware to enforce access control based on roles and permissions.
Example routes added to demonstrate role-based access control.

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
#   r o l e s _ a n d _ p e r m i s s i o n 
 
 

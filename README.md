# API Inventaris Barang (CodeIgniter 4)

- NAMA: ANTHONIUS DALE FERNANDO
- KELAS: TI241A
- NIM: 312410162

### Cara Menjalankan:
1. Pastikan database `db_inventory` sudah di-import.
2. Ubah konfigurasi database di file `.env`.
3. Jalankan `composer install` untuk mengunduh library.
4. Jalankan aplikasi di XAMPP.

### Endpoint API:
- `GET /api/barang` : Mengambil semua data barang.
- `GET /api/barang/{id}` : Mengambil detail barang berdasarkan ID.
- `POST /api/barang` : Menambah barang baru.
- `PUT /api/barang/{id}` : Mengubah data barang.
- `DELETE /api/barang/{id}` : Menghapus data barang.

### ScreenShoot:

<img width="959" height="538" alt="image" src="https://github.com/user-attachments/assets/3879c42d-2d4d-4f14-8e86-ed1064b52fc3" />
<img width="959" height="539" alt="image" src="https://github.com/user-attachments/assets/9b04197c-8bfe-475b-8a23-90e3cc53840e" />
<img width="959" height="539" alt="image" src="https://github.com/user-attachments/assets/5eddef01-99c0-42a8-ac9b-44ba82094416" />
<img width="959" height="539" alt="image" src="https://github.com/user-attachments/assets/171d240f-6d37-4e61-a04e-3191b3a94c33" />
<img width="953" height="533" alt="image" src="https://github.com/user-attachments/assets/837bf4bc-7752-4e85-853d-21023451910e" />
<img width="959" height="539" alt="image" src="https://github.com/user-attachments/assets/c984f8e2-7425-43cf-956d-311bec6aeb29" />
<img width="959" height="539" alt="image" src="https://github.com/user-attachments/assets/5ebabbe8-aa29-456d-8e36-46f0132ce246" />
<img width="959" height="539" alt="image" src="https://github.com/user-attachments/assets/6976c389-3b40-41b0-829f-080719842657" />
<img width="727" height="451" alt="image" src="https://github.com/user-attachments/assets/ff12d705-11e7-4a9a-89a7-21a8c50291ac" />
<img width="671" height="458" alt="image" src="https://github.com/user-attachments/assets/36a68506-f813-4ec4-a141-19617b59c60c" />
<img width="656" height="461" alt="image" src="https://github.com/user-attachments/assets/926c4fd5-16b1-4416-8132-6a468a382c90" />
<img width="949" height="451" alt="image" src="https://github.com/user-attachments/assets/cbb7e477-fe9e-4896-a431-2514cae00a22" />
<img width="953" height="447" alt="image" src="https://github.com/user-attachments/assets/88251372-4ac3-48b2-a60e-f00cd2a86f87" />
<img width="959" height="448" alt="image" src="https://github.com/user-attachments/assets/33c7ebea-0070-4b6a-a003-ff0e9117da1d" />
<img width="956" height="452" alt="image" src="https://github.com/user-attachments/assets/7bbff295-da3f-4738-80ac-28794a86d04c" />
<img width="951" height="445" alt="image" src="https://github.com/user-attachments/assets/145b3a0d-a485-453f-980e-781fdb987a59" />






# CodeIgniter 4 Application Starter

## What is CodeIgniter?

CodeIgniter is a PHP full-stack web framework that is light, fast, flexible and secure.
More information can be found at the [official site](https://codeigniter.com).

This repository holds a composer-installable app starter.
It has been built from the
[development repository](https://github.com/codeigniter4/CodeIgniter4).

More information about the plans for version 4 can be found in [CodeIgniter 4](https://forum.codeigniter.com/forumdisplay.php?fid=28) on the forums.

You can read the [user guide](https://codeigniter.com/user_guide/)
corresponding to the latest version of the framework.

## Installation & updates

`composer create-project codeigniter4/appstarter` then `composer update` whenever
there is a new release of the framework.

When updating, check the release notes to see if there are any changes you might need to apply
to your `app` folder. The affected files can be copied or merged from
`vendor/codeigniter4/framework/app`.

## Setup

Copy `env` to `.env` and tailor for your app, specifically the baseURL
and any database settings.

## Important Change with index.php

`index.php` is no longer in the root of the project! It has been moved inside the *public* folder,
for better security and separation of components.

This means that you should configure your web server to "point" to your project's *public* folder, and
not to the project root. A better practice would be to configure a virtual host to point there. A poor practice would be to point your web server to the project root and expect to enter *public/...*, as the rest of your logic and the
framework are exposed.

**Please** read the user guide for a better explanation of how CI4 works!

## Repository Management

We use GitHub issues, in our main repository, to track **BUGS** and to track approved **DEVELOPMENT** work packages.
We use our [forum](http://forum.codeigniter.com) to provide SUPPORT and to discuss
FEATURE REQUESTS.

This repository is a "distribution" one, built by our release preparation script.
Problems with it can be raised on our forum, or as issues in the main repository.

## Server Requirements

PHP version 8.2 or higher is required, with the following extensions installed:

- [intl](http://php.net/manual/en/intl.requirements.php)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)

> [!WARNING]
> - The end of life date for PHP 7.4 was November 28, 2022.
> - The end of life date for PHP 8.0 was November 26, 2023.
> - The end of life date for PHP 8.1 was December 31, 2025.
> - If you are still using below PHP 8.2, you should upgrade immediately.
> - The end of life date for PHP 8.2 will be December 31, 2026.

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php) if you plan to use MySQL
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library

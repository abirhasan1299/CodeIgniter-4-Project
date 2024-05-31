# CodeIgniter 4 Framework
Demo Link: https://sirah.epizy.com

Demo Login > email: tamamabir@gmail.com, Password: Abir

## What is CodeIgniter?

CodeIgniter is a PHP full-stack web framework that is light, fast, flexible and secure.
More information can be found at the [official site](https://codeigniter.com).

This repository holds the distributable version of the framework.
It has been built from the
[development repository](https://github.com/codeigniter4/CodeIgniter4).

More information about the plans for version 4 can be found in [CodeIgniter 4](https://forum.codeigniter.com/forumdisplay.php?fid=28) on the forums.

You can read the [user guide](https://codeigniter.com/user_guide/)
corresponding to the latest version of the framework.

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

## Contributing

We welcome contributions from the community.

Please read the [*Contributing to CodeIgniter*](https://github.com/codeigniter4/CodeIgniter4/blob/develop/CONTRIBUTING.md) section in the development repository.

## Server Requirements

PHP version 7.4 or higher is required, with the following extensions installed:

- [intl](http://php.net/manual/en/intl.requirements.php)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)

> [!WARNING]
> The end of life date for PHP 7.4 was November 28, 2022.
> The end of life date for PHP 8.0 was November 26, 2023.
> If you are still using PHP 7.4 or 8.0, you should upgrade immediately.
> The end of life date for PHP 8.1 will be November 25, 2024.

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php) if you plan to use MySQL
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library

  ![Screenshot 2024-04-30 232947](https://github.com/abirhasan1299/CodeIgniter-4-Project/assets/71751671/3540c6cd-4eb7-4190-a452-7593210ed3be)
  ![Screenshot 2024-04-30 233009](https://github.com/abirhasan1299/CodeIgniter-4-Project/assets/71751671/9c79d7ad-6286-4d71-8422-381a6b9f7aba)
  ![Screenshot 2024-04-30 233036](https://github.com/abirhasan1299/CodeIgniter-4-Project/assets/71751671/51f43dac-56f0-493c-a0b0-5142bc46990a)
  ![Screenshot 2024-05-31 154225](https://github.com/abirhasan1299/CodeIgniter-4-Project/assets/71751671/77a67b1e-473c-4021-a2a9-7c7f568b1523)
![Screenshot 2024-05-31 154155](https://github.com/abirhasan1299/CodeIgniter-4-Project/assets/71751671/915cdff1-f8aa-457f-81a7-b7a3c21cec01)
![Screenshot 2024-05-31 154155](https://github.com/abirhasan1299/CodeIgniter-4-Project/assets/71751671/5fff2814-9fee-4af5-af96-a357ba540b90)
![Screenshot 2024-05-31 154111](https://github.com/abirhasan1299/CodeIgniter-4-Project/assets/71751671/c0e5e607-6f96-4c26-ae95-0b2074994b26)
![Screenshot 2024-04-30 233349](https://github.com/abirhasan1299/CodeIgniter-4-Project/assets/71751671/cc767d71-f2e2-4724-ae85-845a3a75fc0a)
![Screenshot 2024-04-30 233210](https://github.com/abirhasan1299/CodeIgniter-4-Project/assets/71751671/f51e7565-e094-47cb-b9f0-d90e05e9d380)





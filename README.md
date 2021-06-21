# Laravel Notifier Package For Iranian SMS Services
[![GitHub issues](https://img.shields.io/github/issues/dizatech/notifier?style=flat-square)](https://github.com/dizatech/notifier/issues)
[![GitHub stars](https://img.shields.io/github/stars/dizatech/notifier?style=flat-square)](https://github.com/dizatech/notifier/stargazers)
[![GitHub forks](https://img.shields.io/github/forks/dizatech/notifier?style=flat-square)](https://github.com/dizatech/notifier/network)
[![GitHub license](https://img.shields.io/github/license/dizatech/notifier?style=flat-square)](https://github.com/dizatech/notifier/blob/main/LICENSE)

This is a Laravel Package for SMS Service Integration.

#### List of available drivers

- [ghasedak](https://ghasedak.io/)

## How to install and config [dizatech/notifier](https://github.com/dizatech/notifier) package?

#### Installation

```

composer require dizatech/notifier

```

#### Publish Config file

```

php artisan vendor:publish --tag=dizatech_notifier

```

#### Migrate tables, to add notifier tables to database

```

php artisan migrate

```

#### How to use exists drivers from package

- Set the configs in /config/dizatech_notifier.php

- Use this sample code to send sms

    ```
      Soon...
    ```

#### Requirements:

- PHP v7.0 or above
- Laravel v7.0 or above


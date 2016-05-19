SimpleGmail
===========

A class to email via Gmail using PHP.

```php
$simpleGmail = new SimpleGmail("Sender Name", "john.doe@gmail.com", "john.doe.password");
$simpleGmail->send("Receiver Name", "receiver_email@example.com", "Email Subject", "Email Body");
$simpleGmail->send("Divye Kapoor", "divye@example.com", "Email Subject", "Email Body");
```

Runtime Dependencies: PHP Curl (usually widely available on most web servers).

How to Use
==========

```sh
composer require divyekapoor/simplegmail
```

The package is available [on packagist](https://packagist.org/packages/divyekapoor/simplegmail) and can be used via composer. Installation instructions for composer [are here](https://getcomposer.org/download/).

License
=======

This code has been released under the MIT License to do as you please.
Note that it depends on the LGPL licensed PHPMailer library.


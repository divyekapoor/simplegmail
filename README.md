SimpleGmail
===========

A class to email via Gmail using PHP.

```php
$simpleGmail = new SimpleGmail("John Doe", "john.doe@gmail.com", "john.doe.password");
$simpleGmail->send("Divye Kapoor", "trash@example.com", "Email Subject", "Email Body");
```

Runtime Dependencies: PHP Curl (usually widely available on most web servers).

License
=======

This code has been released under the MIT License to do as you please.
Note that it depends on the LGPL licensed PHPMailer library.


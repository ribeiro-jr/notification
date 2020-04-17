# Notification Library via email using phpMailer

This library has the function of sending e-mail using the phpmailer library. Doing this in an uncomplicated way is essential for any system.

To install the library, run the following command:

```sh
composer require gustavoweb / composer_teste
```

To use the library, simply require the composer to autoload, invoke the class and call the method:

```sh
<? php

require __DIR__. '/vendor/autoload.php';

USE Notification \ Email;

$ email = new Email (2, "mail.host.com", "your@email.com", "your-pass", "smtp secure (tls / ssl)", "port (587)", "from@email.com", "From Name");

$ email-> sendEmail ("SUbject", "Content", "reply@email.com", "Replay Name", "address@email.com", "Address Name");
```

Note that the entire configuration of sending the email is using the magic method builder! Once the builder method has been invoked within your application, your system will be able to take the shots.

### Developers
* [Gustavo Web] - Teacher and Developer of this course!
* [Vanilson Z. Ribeiro] - Developer of this library
* [phpMailer] - Lib to send E-mail

License
----

MIT

** Another UpInside Training course, make good use of it! **

[//]: #
[Gustavo Web]: <mailto: gustavo@upinside.com.br>
[Vanilson Z. Ribeiro]: <mailto: ribeirovanilson85@gmail.br>
[phpMailer]: <https://github.com/PHPMailer/PHPMailer>
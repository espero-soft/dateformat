# Date Format
This Php library will help you format your dates in number of years, months, days, hours, minutes and seconds.


## Getting Started

### Installation

Faker requires PHP >= 7.1.

```shell
composer require espero-soft/dateformat:dev-master
```

### Documentation



### Basic Usage

Here are some examples of use

```php
<?php

use EsperoSoft\DateFormat\DateFormat;

require_once "vendor/autoload.php";

// default in french
$fromNow = DateFormat::fromNow(new DateTimeImmutable("2022-9-9 12:14:14"));
echo $fromNow."\n"; //il y a 10 jours


// in English
$fromNow = DateFormat::fromNow(new DateTimeImmutable("2022-9-9 12:14:14"), "en-En");
echo $fromNow."\n"; // 10 days ago


// in French
$fromNow = DateFormat::fromNow(new DateTimeImmutable("2022-9-9 12:14:14"), "fr-Fr");
echo $fromNow."\n"; //il y a 10 jours
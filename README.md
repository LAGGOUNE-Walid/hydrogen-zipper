# hydrogen-zipper
Zipper class to work with .zip files
# How to use :
```php
<?php
require "vendor/autoload.php";
use Zipper\Classes\Zip;

$zip = new Zip;
$zip->make(“file.zip”)->add(“onefile.jpg”); // zip one file
$zip->make(“file.zip”)->add([“onefile.jpg”,”two.jpg”]); // zip multi files
$zip->make(“file.zip”)->add(“/file”); // zip only files in folder

$zip->extract(“file.zip”)->to(“/files”); // extract file.zip to /files
$zip->extract(“file.zip”)->only([“home.jpg”,”index.jpg”])->to(“/files”); // extract onlye mutli files from file.zip to /files

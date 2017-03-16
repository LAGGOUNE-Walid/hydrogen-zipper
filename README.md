# hydrogen-zipper
Zipper class to work with .zip files
# How to use :
``php
$zip->make(“file.zip”)->add(“onefile.jpg”);
$zip->make(“file.zip”)->add([“onefile.jpg”,”two.jpg”]);
$zip->make(“file.zip”)->add(“/file”);

$zip->exctract(“file.zip”)->to(“/files”);
$zip->exctract(“file.zip”)->only([“home.jpg”,”index.jpg”])->to(“/files”);

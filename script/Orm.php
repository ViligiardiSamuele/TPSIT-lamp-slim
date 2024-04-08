<?php
include Database.php;

$sql = "SHOW TABLES";

$db = Database::getInstance();

$result = $db->query($sql);

//$tables = 
var_dump($result);

//loop sulle tabelle
$engine = new Mustache_Engine();
foreach( as $table)
{
    $sql = "describe $table";
    $describe = $db->query($sql);
    $data = ..... 
    $data['table']=ucfirst($table);
    $data['datetime']== date ("Y-m-d H:i:s");

    $phpclass= $engine->render($template,$data);
    $filename = ucfirst($table).".php";
    file_put_contents($filename, $phpclass);

}
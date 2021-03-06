<?php

$baseCommand = "docker run -i --rm --volume cli:/usr/local/code/app/.preferences/";
$envVars = "-e endpoint=https://appwrite.io/v1 -e X-Appwrite-Project=6013fbefdfa41 -e X-Appwrite-Key=35y3h5h345 -e X-Appwrite-Locale=en-US";

// Initialise the CLI 
$command = "${baseCommand} ${envVars} cli init";
$output = [];
exec($command, $output);

// Foo Service
$command = "${baseCommand} cli foo get  --x='string'  --y='123' --z[]='string in array'";
$output = [];
exec($command, $output);
echo substr($output[0],9)."\n";

$command = "${baseCommand} cli foo post  --x='string'  --y='123' --z[]='string in array'";
$output = [];
exec($command, $output);
echo substr($output[0],9)."\n";

$command = "${baseCommand} cli foo put  --x='string'  --y='123' --z[]='string in array'";
$output = [];
exec($command, $output);
echo substr($output[0],9)."\n";

$command = "${baseCommand} cli foo patch  --x='string'  --y='123' --z[]='string in array'";
$output = [];
exec($command, $output);
echo substr($output[0],9)."\n";

$command = "${baseCommand} cli foo delete  --x='string'  --y='123' --z[]='string in array'";
$output = [];
exec($command, $output);
echo substr($output[0],9)."\n";


// Bar Service
$command = "${baseCommand} cli bar get  --x='string'  --y='123' --z[]='string in array'";
$output = [];
exec($command, $output);
echo substr($output[0],9)."\n";

$command = "${baseCommand} cli bar post  --x='string'  --y='123' --z[]='string in array'";
$output = [];
exec($command, $output);
echo substr($output[0],9)."\n";

$command = "${baseCommand} cli bar put  --x='string'  --y='123' --z[]='string in array'";
$output = [];
exec($command, $output);
echo substr($output[0],9)."\n";

$command = "${baseCommand} cli bar patch  --x='string'  --y='123' --z[]='string in array'";
$output = [];
exec($command, $output);
echo substr($output[0],9)."\n";

$command = "${baseCommand} cli bar delete  --x='string'  --y='123' --z[]='string in array'";
$output = [];
exec($command, $output);
echo substr($output[0],9)."\n";

// General 
$command = "${baseCommand} cli general redirect";
$output = [];
exec($command, $output);
echo substr($output[0],9)."\n";

$command = "${baseCommand} cli general upload --x='string'  --y='123' --z[]='string in array' --file='file.png'";
$output = [];
exec($command, $output);
echo substr($output[0],9)."\n";

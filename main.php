<?php
function gen_token()
{
	if (function_exists('com_create_guid') === true) {
		return trim(com_create_guid(), '{}');
	}
 
	return sprintf(
		'%04X%04X-%04X-%04X-%04X-%04X%04X%04X', 
		mt_rand(0, 65535), 
		mt_rand(0, 65535),
		mt_rand(0, 65535),
		mt_rand(16384, 20479), 
		mt_rand(32768, 49151),
		mt_rand(0, 65535),
		mt_rand(0, 65535), 
		mt_rand(0, 65535)
	);
}

$send_token = $dump_token = 0;
$token = $dump_token = gen_token();
$send_token = $dump_token;

// generate and send token

echo "\n";
echo "-----------------generate and send token-----------------";
echo "\n";
print " token";
echo "\t";
echo $token;
echo "\n";
print " dump_token";
echo "\t";
echo $dump_token;
echo "\n";
print " send_token";
echo "\t";
echo $send_token;
echo "\n";

// clean token

$send_token = $dump_token = 0;

echo "\n";
echo "-----------------clean token-----------------------------";
echo "\n";
print " token";
echo "\t";
echo $token;
echo "\n";
print " dump_token";
echo "\t";
echo $dump_token;
echo "\n";
print " send_token";
echo "\t";
echo $send_token;
echo "\n";

// $token it's variable to 
// generate dinamic token
// after user authorization 
// dump and send token are 
// cleans up

?>
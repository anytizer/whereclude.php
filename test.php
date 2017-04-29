<?php
namespace test;
require_once("class.whereclude.inc.php");

use common\envelope;
use RegisteredToken;

$token = new RegisteredToken();
print_r($token);

$envelope = new envelope(false);
print_r($envelope);

echo "Done?";

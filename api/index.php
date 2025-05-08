<?php

echo "<h1>Testing php deployment with vercel</h1>";
echo "<br>";

require_once "app/CheckPhpInfo.php";

$checkphpdetails = new CheckPhpInfo(phpinfo());

echo $checkphpdetails->getPhpInfo();
?>
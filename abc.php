<?php

//hello
$host = "10.14.92.197";

$comm = "public";


if( empty( $_GET["oid"] ) ){
$oid = "1.3.6.1.2.1";
}else{
$oid = $_GET["oid"];
}

//$result = snmp2_real_walk($host, $comm, $oid)or die("unable to walk ".$oid);
if(snmp2_real_walk($host, $comm, $oid))
{
	echo "aa";
	$result = snmp2_real_walk($host, $comm, $oid);
}
else 
{
	echo "bb";
}

echo '<form method="get" action="">OID :<input type="text" name="oid" value="' .$oid. '"><button type="submit"> Walk </button></form><hr />';

echo '<pre>';
print_r($result);
echo '</pre>';


?>

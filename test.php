
<?php
$m=new mysqli();
$m->connect("127.0.0.1","root","");
$m->select_db("csc309");
	if($m->errno>0){
	printf("failed: %s", $m->error);
	}

$q="INSERT into user_authentication(id,username,password)
VALUES ('oge','".sha1("ogepass")."'),('vic','".sha1("vicpass")."')";
print($q);

$result=$m->query($q);
print($m->affected_rows);
print($m->error);

$m->close();
?>

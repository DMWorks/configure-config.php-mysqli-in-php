<?php
$dbhost="localhost"; //hostname
$dbuser="dmitra";  //mysql acc/ username
$dbpass="1234";  //mysql scc/ password
$dbname="test"; //mysql database name

//create the connect between php and mysql
$db=new mysqli("$dbhost","$dbuser","$dbpass");
$db->select_db("$dbname");
if ($db) {
    print "connected to the database"; //if connected shows
}
else {
	print "Could not connect to database "; //if not shows
}
?>
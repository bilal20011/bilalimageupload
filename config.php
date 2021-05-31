<?php
$serverName="localhost";
$userName="root";
$userPass="";
$dbname="imagedb";

$con = new mysqli($serverName,$userName,$userPass,$dbname);

if($con -> connect_error)
{
    echo "unable to connect";

}

else
{
    echo "connection is sucessfull";
}
?>
<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "contact";
$connection = null;


function connect(){
    global $server;
    global $username;
    global $password;
    global $database;
    global $connection;

    if($connection == null ) {
        $connection = mysqli_connect($server,$username,$password,$database);
    }
}

function contactTable(){
    global $connection;

    if($connection != null) {
        $var ="SELECT `first_name`,`last_name`,`email`,`phone_number` FROM `customers`;";
        $results =mysqli_query($connection,$var);

        echo("<table><tbody>");

        while($row = mysqli_fetch_assoc($results)) {
            echo ("<tr>");

            echo ("<td>" .$row["first_name"]. "</td>");
            echo ("<td>" .$row["last_name"]. "</td>");
            echo ("<td>" .$row["email"]. "</td>");
            echo ("<td>" .$row["phone_number"]. "</td>");

            echo("</tr>");
        }

            echo("</tbody></table>");
    }
}

?>
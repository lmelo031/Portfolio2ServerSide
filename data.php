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

     function updateTable() {
        global $connection;

    if(isset($_POST["first_name"]) &&
       isset($_POST["last_name"]) &&
       isset($_POST["email"]) &&
       isset($_POST["phone_number"])) {

        $firstName = htmlspecialchars($_POST["first_name"]);
        $lastName = htmlspecialchars($_POST["last_name"]);
        $state = htmlspecialchars($_POST["email"]);
        $city = htmlspecialchars($_POST["phone_number"]);
        

        
        if($connection != null) {
            $results = mysqli_query($connection, "INSERT INTO customers ( first_name, last_name, email, phone_number) VALUES( '{$firstName}', '{$lastName}', '{$email}', '{$phoneNumber}')");
        }
    }
}
    
        function close() {
            global $connection;
            
            if($connection != null) {
                mysqli_close($connection);
            }
        } 
    
    
    ?>
    
                

<?php
INCLUDE("data.php");
?>
<html>
    <head>
        <title>Contacts</title>
    </head>
<body>

<h2>Current Contacts</h2>

<?php
   connect();
   salesTable();
   updateTable();
   close();
?>
<form action="index.php" method="POST">
    <input type="number" name="customer_id"/>
    <input type="text" name="first_name"/>
    <input type="text" name="last_name"/>  
    <input type="email" name="email"/> 
    <input type="number"name="phone_number"/>
    <input type="submit"/>
</form>

</body>

</html>
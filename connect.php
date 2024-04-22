<?php
$FirstName = filter_input(INPUT_POST, 'FirstName');
$LastName = filter_input(INPUT_POST, 'LastName');
$Email = filter_input(INPUT_POST, 'Email');
$PhoneNumber = filter_input(INPUT_POST, 'PhoneNumber');

if (!empty($username)) {
    if (!empty($password)) {

       // $host = 'localhost'; // Replace with your database host
        $dbname = 'elias'; // Replace with your database name
        $username = 'root'; // Replace with your database username
        $password = ''; // Replace with your database password
        

        // create connection
        $conn = new mysqli ('localhost', $dbusername, $dbpassword, $dbname);
        if (mysqli_connect_error()) {
            die('Connection error ('.mysqli_connect_errno().'(' .mysqli_connect_error());
        }
        else {
            $sql = "INSERT INTO customers (FirstName, LastName, Email, PhoneNumber) values ('$FirstName', '$LastName', '$Email', '$PhoneNumber')";
            if ($conn->query($sql)) {
                echo "New record is inserted successfully";
            }
            else{
                echo "Error:". $sql . "<br>". $conn->error;
            }
            $conn->close();
        }
    }
    else{
        echo "FirstNmae should not be empty";
        die();
    }
}
else {
    echo "LastName should not be empty";
    die();
}

?>

<?php
$FirstName = filter_input(INPUT_POST, 'first');
$LastName = filter_input(INPUT_POST, 'last');
$Email = filter_input(INPUT_POST, 'email');
$PhoneNumber = filter_input(INPUT_POST, 'phone');

if (!empty($FirstName)) {
    if (!empty($LastName)) {
        if (!empty($Email)) {
            if (!empty($PhoneNumber)) {

                $dbname = 'elias'; // Replace with your database name
                $dbusername = 'root'; // Replace with your database username
                $dbpassword = ''; // Replace with your database password

                // Create connection
                $conn = new mysqli('localhost', $dbusername, $dbpassword, $dbname);

                if ($conn->connect_error) {
                    die('Connection error (' . $conn->connect_errno . ') ' . $conn->connect_error);
                } else {
                    // Use prepared statements to prevent SQL injection
                    $stmt = $conn->prepare("INSERT INTO Customers (first, last, email, phone) VALUES (?, ?, ?, ?)");
                    $stmt->bind_param("ssss", $FirstName, $LastName, $Email, $PhoneNumber);

                    if ($stmt->execute()) {
                        echo "New record is inserted successfully";
                    } else {
                        echo "Error: " . $stmt->error;
                    }

                    $stmt->close();
                    $conn->close();
                }
            } else {
                echo "Phone number should not be empty";
                die();
            }
        } else {
            echo "Email should not be empty";
            die();
        }
    } else {
        echo "Last name should not be empty";
        die();
    }
} else {
    echo "First name should not be empty";
    die();
}
?>
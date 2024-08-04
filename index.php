<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Elias, and Bootstrap contributors" />
    <meta name="description" content="Get your car in less than 60 seconds">
    <meta property="og:title" content="GSU CEO...">
    <meta property="og:description" content="GSU CEO...">
    <meta property="og:type" content="website">
    <meta property="og:image" content="http://">
    <meta property="og:url" content="https://gsuceo.com">
    <title>GSU COMPANY LIMITED BUSINESS</title>
    <link rel="stylesheet" href="STYLE/style.css">
    <link rel="stylesheet" href="STYLE/bootstrap.css">
</head>

<body>

    <body>
        <div class="container">
            <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
                <a href="/"
                    class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                    <svg class="bi me-2" width="40" height="32">
                        <use xlink:href="#bootstrap" />
                    </svg>
                </a>

                <ul class="nav nav-pills">
                    <li class="nav-item"><a href="index.html" class="nav-link active" aria-current="page">HOME</a></li>
                </ul>
            </header>
            <form method="post" action="connect.php">
                <div class="container">
                    <label for="fname"><b>First Name</b></label>
                    <input type="text" placeholder="Enter First Name" name="FirstName" required>

                    <label for="lname"><b>Last Name</b></label>
                    <input type="text" placeholder="Enter Last Name" name="LastName" required>

                    <label for="email"><b>Email</b></label>
                    <input type="email" placeholder="Enter Email" name="Email" required>

                    <label for="phone"><b>Phone Number</b></label>
                    <input type="tel" placeholder="Enter Phone Number" name="PhoneNumber" required>

                    <div><input class="sub-btn" type="submit" value="Submit"></div>

                </div>
            </form>
    </body>

</html>
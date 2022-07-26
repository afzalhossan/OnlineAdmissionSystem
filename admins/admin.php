<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link href="styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>ADMISSION CONTROL PANEL</title>
</head>

<body>
    <header class="header_section">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg custom_nav-container ">
                <a class="navbar-brand" href="index.html">
                    <span>
                        AZ University Admin Panel
                    </span>
                </a>
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class=""> </span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
                        <ul class="navbar-nav  ">
                            <li class="nav-item ">
                                <a class="nav-link" href="admin.php">Home </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>


    <div class="container">
        <h1>All Student Details</h1>

        <?php


        $servername = "localhost";
        $username = "root";
        $password = "";
        $databasename = "OnlineAdmissionSystem";

        // CREATE CONNECTION
        $conn = new mysqli(
            $servername,
            $username,
            $password,
            $databasename
        );

        // GET CONNECTION ERRORS
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // SQL QUERY
        $query = "SELECT * FROM `students`;";

        // FETCHING DATA FROM DATABASE
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            echo   "<table>  <tr>
            <th>Id</th>
            <th>Student's Name</th>
            <th>Department</th>
            <th>Father Name</th>
            <th>Mother Name</th>
            <th>DOB</th>   
            <th>Mobile</th>
            <th>Gender</th>
            <th>Email</th>
            <th>SSC ROLL</th>
            <th>SSC GPA</th>
            <th>HSC ROLL</th>
            <th>HSC GPA</th>
            <th>SSC PASSING YEAR</th>
            <th>HSC PASSING YEAR</th>
            
        </tr> <br>";

            // OUTPUT DATA OF EACH ROW
            while ($row = $result->fetch_assoc()) {
                echo



                "
                <tr>
            <td>$row[id]</td>
            <td>$row[applicant_name]</td>
            <td>$row[department]</td>
            <td>$row[father_name]</td>
            <td>$row[mother_name]</td>
            <td>$row[date_of_birth]</td>
            <td>$row[mobile]</td>
            <td>$row[gender]</td>          
            <td>$row[email]</td>
            <td>$row[ssc_roll_no]</td>
            <td>$row[ssc_result]</td>
            <td>$row[hsc_roll_no]</td>
            <td>$row[hsc_result]</td>
            <td>$row[ssc_pass_year]</td>
            <td>$row[hsc_pass_year]</td>
            </tr>

       ";
            }
        } else {
            echo "0 results";
        }

        $conn->close();

        ?>


    </div>














    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>





</body>

</html>
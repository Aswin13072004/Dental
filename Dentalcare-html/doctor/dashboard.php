<?php
session_start();
include 'includes/dbconnection.php';

// Check if the user is logged in and is a doctor
if (!isset($_SESSION['doctor_id'])) {
    header('Location: index.php');
    exit();
}

$doctor_name = $_SESSION['doctor_name']; // Assuming doctor's name is stored in session

// Handle appointment acceptance
if (isset($_GET['accept'])) {
    $appointment_id = (int)$_GET['accept'];
    
    // Update status and doctor_name in the patient table
    $sql_update = "UPDATE patient SET status = 1, doctor_name = '$doctor_name' WHERE id = $appointment_id";
    if ($conn->query($sql_update) === TRUE) {
        $message = "Appointment accepted successfully!";
    } else {
        $message = "Error: " . $conn->error;
    }
}

// Fetch all appointments with status 0
$sql = "SELECT * FROM patient WHERE status = 0";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Dashboard</title>
    <link rel="icon" type="image/png" sizes="32x32" href="../images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../images/favicon/favicon-16x16.png">

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"> <!-- Font Awesome CSS -->
    <link href="https://cdn.datatables.net/1.13.3/css/jquery.dataTables.min.css" rel="stylesheet"> <!-- DataTables CSS -->
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
        }
        .header-footer {
            background-color: #2c4ca5;
            color: white;
            padding: 10px;
        }
        .header-footer a {
            color: white;
            margin-right: 10px;
        }
        .container-fluid {
            flex: 1;
            display: flex;
            flex-direction: column;
        }
        .table-responsive {
            flex: 1;
            overflow: auto;
        }
        table {
            width: 100%;
            height: 100%;
        }
    </style>
</head>
<body>

    <header class="header-footer d-flex justify-content-between align-items-center">
        <div class="d-flex align-items-center">
            <img src="../images/favicon/favicon-32x32.png" alt="Logo" class="mr-2">
            <h1 class="mb-0">Doctor - Dashboard</h1>
        </div>
        <div>
            <a href="history.php" class="btn btn-alert">
                <i class="fas fa-history"></i> History
            </a>
            <a href="logout.php" class="btn btn-alert">
                <i class="fas fa-sign-out-alt"></i> Logout
            </a>
        </div>
    </header>

    <div class="container-fluid">
        <?php if (isset($message)): ?>
            <div class="alert alert-info"><?php echo $message; ?></div>
        <?php endif; ?>

        <div class="card mt-4">
            <div class="card-header">
                <h5 class="mb-0">Appointments</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="appointmentsTable" class="display table  table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th>S.No</th>
                                <th>Name</th>
                                <th>Age</th>
                                <th>Email</th>
                                <th>Phone Number</th>
                                <th>Alternate Phone Number</th>
                                <th>Appointment Date</th>
                                <th>Appointment Time</th>
                                <th>Issue</th>
                                <th>Message</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if ($result->num_rows > 0) {
                                $serial_number = 1;
                                while ($row = $result->fetch_assoc()) {
                                    echo "<tr>";
                                    echo "<td>" . $serial_number++ . "</td>";
                                    echo "<td>" . $row['name'] . "</td>";
                                    echo "<td>" . $row['age'] . "</td>";
                                    echo "<td>" . $row['email'] . "</td>";
                                    echo "<td>" . $row['phone_number'] . "</td>";
                                    echo "<td>" . $row['alt_phone_number'] . "</td>";
                                    echo "<td>" . $row['appointment_date'] . "</td>";
                                    echo "<td>" . $row['appointment_time'] . "</td>";
                                    echo "<td>" . $row['issue'] . "</td>";
                                    echo "<td>" . $row['message'] . "</td>";
                                    echo "<td><a href='dashboard.php?accept=" . $row['id'] . "' class='btn btn-success'>Accept</a></td>";
                                    echo "</tr>";
                                }
                            } else {
                                echo "<tr><td colspan='11'>No appointments found.</td></tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <footer class="header-footer text-center">
        <p>Copyrights © 2024 All Rights Reserved by <a href="#">SoftSmileDentalCentre.</a></p> 
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#appointmentsTable').DataTable();
        });
    </script>
</body>
</html>




<?php
$conn->close();
?>

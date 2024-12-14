<?php
// emergency_services.php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Emergency Services Contact Details">
    <meta name="author" content="Your Name">
    <title>Emergency Services</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body class="d-flex flex-column min-vh-100">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="assets/sblogo.jpg" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
                Santa Barbara Community Assistance Portal
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link text-danger" href="logout.php">Logout</a> <!-- Logout button changed to red -->
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container my-5">
        <h1 class="text-danger text-center mb-4">Emergency Services</h1>
        <p class="text-center">Find essential contact details for emergency services in your area.</p>

        <!-- Emergency Contacts Table -->
        <div class="table-responsive">
            <table class="table table-bordered table-hover text-center align-middle">
                <thead class="table-danger">
                    <tr>
                        <th>Service</th>
                        <th>Contact Number</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Police</td>
                        <td>911</td>
                        <td>For crime and law enforcement emergencies.</td>
                    </tr>
                    <tr>
                        <td>Fire Department</td>
                        <td>555-1010</td>
                        <td>Report fires and hazardous incidents.</td>
                    </tr>
                    <tr>
                        <td>Ambulance</td>
                        <td>555-2020</td>
                        <td>For medical emergencies and accidents.</td>
                    </tr>
                    <tr>
                        <td>Disaster Response</td>
                        <td>555-3030</td>
                        <td>For flood, earthquake, and disaster response assistance.</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Additional Info -->
        <div class="mt-4 text-center">
            <a href="index.php" class="btn btn-outline-success">Back to Home</a>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3 mt-auto">
        <p class="mb-0">&copy; 2024 Sta. Barbara Community Assistance Portal. All rights reserved.</p>
    </footer>
    <!-- End Footer -->

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Add background with low opacity */
        .bg-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('assets/bgimg.jpg') no-repeat center center fixed;
            background-size: cover;
            opacity: 0.5;
            z-index: -1;
        }

        /* Professional Styling for the Form */
        .card {
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .form-label {
            font-weight: 600;
            color: #333;
        }

        .form-control {
            border-radius: 8px;
            box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.12);
        }

        .btn {
            border-radius: 8px;
            font-weight: 600;
        }

        /* Center the container */
        .container {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            /* Prevent scrolling */
        }

        /* Form Container Styling */
        .form-container {
            max-width: 600px;
            width: 100%;
            padding: 20px;
            position: relative;
            /* Fix the position */
        }

        /* Horizontal Layout for Form Fields */
        .form-row {
            display: flex;
            gap: 15px;
        }

        .form-group {
            flex: 1;
        }

        /* Text Alignment for Button */
        .btn-container {
            text-align: center;
        }

        /* Responsive Adjustments */
        @media (max-width: 767px) {
            .form-row {
                flex-direction: column;
            }
        }
    </style>
</head>

<body>
    <!-- Background Overlay -->
    <div class="bg-overlay"></div>

    <!-- Registration Form Section -->
    <section class="py-5">
        <div class="container">
            <div class="form-container">
                <div class="card shadow-lg p-4">
                    <!-- Logo above the form -->
                    <div class="text-center mb-4">
                        <img src="assets/sblogo.jpg" alt="Logo" width="80" height="80">
                    </div>

                    <h3 class="text-center mb-4" style="font-weight: 600; color: #333;">Create an Account</h3>
                    <form action="register_handler.php" method="POST">
                        <div class="form-row">
                            <div class="form-group mb-3">
                                <label for="fullname" class="form-label">Full Name</label>
                                <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Enter your full name" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" id="username" name="username" placeholder="Choose a username" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Choose a password" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group mb-3">
                                <label for="confirm_password" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm your password" required>
                            </div>
                        </div>
                        <div class="btn-container mt-4">
                            <button type="submit" class="btn btn-success w-100">Sign Up</button>
                        </div>
                    </form>
                    <div class="text-center mt-3">
                        <small>Already have an account? <a href="login.php" class="text-decoration-none">Log in</a></small>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
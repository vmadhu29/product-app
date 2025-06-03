<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome | Product App by madhu</title>
    <!-- Bootstrap 5 CDN - added by madhu -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #f8fafc 0%, #e0e7ef 100%);
            min-height: 100vh;
        }
        .hero {
            padding: 80px 0 60px 0;
        }
        .btn-main {
            background: #6366f1;
            color: #fff;
            border: none;
        }
        .btn-main:hover {
            background: #4f46e5;
            color: #fff;
        }
    </style>
</head>
<body>
    <!-- Landing Page Content - by madhu -->
    <nav class="navbar navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">ProductApp</a>
            <div>
                <a href="{{ route('login') }}" class="btn btn-outline-primary me-2">Login</a>
                <a href="{{ route('register') }}" class="btn btn-primary">Register</a>
            </div>
        </div>
    </nav>
    <div class="container hero text-center">
        <h1 class="display-4 fw-bold mb-3">Welcome to ProductApp</h1>
        <p class="lead mb-4">A modern Laravel application for managing your products, built with love by madhu.<br>Register or log in to get started with product management, search, and more!</p>
        <div class="text-center mt-4">
            <a href="{{ route('login.form') }}" class="btn btn-primary me-2">Login</a>
            <a href="{{ route('register.form') }}" class="btn btn-success">Register</a>
        </div>
    </div>
    <!-- Features section - by madhu -->
    <div class="container my-5">
        <div class="row text-center">
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Easy Product Management</h5>
                        <p class="card-text">Add, edit, delete, and search products with a user-friendly interface.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Secure Authentication</h5>
                        <p class="card-text">Your data is protected with modern authentication and encryption.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Built with Laravel</h5>
                        <p class="card-text">Powered by the latest Laravel, Bootstrap, and Docker for easy setup.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial section - by madhu -->
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border-0 shadow text-center p-4">
                    <blockquote class="blockquote mb-0">
                        <p class="mb-2">“ProductApp made managing my inventory a breeze. The interface is clean and the features are exactly what I need!”</p>
                        <footer class="blockquote-footer">A happy user</footer>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>
    <footer class="text-center text-muted py-4 mt-5">
        &copy; {{ date('Y') }} ProductApp by madhu. All rights reserved.<br>
        <a href="https://github.com/your-github-repo" target="_blank">View on GitHub</a>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 

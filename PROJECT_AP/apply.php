
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JobSeek | Apply</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://kit-pro.fontawesome.com/releases/v5.15.3/css/pro.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/home.css">
    <style>
        .apply-container {
            margin: 50px auto;
            max-width: 800px;
            background: url('applyform.png') no-repeat center center;
            background-size: cover;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        .apply-container h1 {
            font-size: 28px;
            color: #143c64;
            margin-bottom: 20px;
        }
        .apply-container label {
            font-weight: bold;
            color: #333;
        }
        .apply-container .btn-primary {
            background-color: #CBB26A;
            border: none;
        }
        .apply-container .btn-primary:hover {
            background-color: #143c64;
            color: white;
        }
        body {
            background-image: url('apply.png');
            background-size: cover;  */
            background-position: center;
            background-repeat: no-repeat; */
        }
        
    </style>
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="logo">
                <a href="home.php"><span style="color: #CBB26A;">JOBSEEK</span></a>
            </div>
            <nav class="nav">
                <ul>
                    <li><a href="profile.php">Profile</a></li>
                    <li><a href="signup.php">Sign Up</a></li>
                    <li><a href="login.php">Login</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="apply-container">
        <h1>Apply for a Job</h1>
        <form action="submit_application.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="fullname" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Enter your full name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone Number</label>
                <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter your phone number" required>
            </div>
            <div class="mb-3">
                <label for="resume" class="form-label">Upload Resume</label>
                <input type="file" class="form-control" id="resume" name="resume" required>
            </div>
            <div class="mb-3">
                <label for="coverletter" class="form-label">Cover Letter</label>
                <textarea class="form-control" id="coverletter" name="coverletter" rows="5" placeholder="Write your cover letter here..." required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit Application</button>
        </form>
    </div>

    <footer class="footer">
        <div class="container text-center">
            <p>&copy; 2025 JobSeek. All Rights Reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>

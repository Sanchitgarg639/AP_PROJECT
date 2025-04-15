<!-- filepath: f:\XAMPP\htdocs\php\AP_PROJECT-main\AP_PROJECT-main\PROJECT_AP\jobpost.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JobSeek | Job Post</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://kit-pro.fontawesome.com/releases/v5.15.3/css/pro.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap');

        body {
            font-family: 'Montserrat', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
            color: #333;
        }

        .header {
            background-color: #143c64;
            color: white;
            padding: 20px 0;
        }

        .header .logo a {
            font-size: 28px;
            font-weight: bold;
            text-decoration: none;
            color: #CBB26A;
        }

        .header .nav ul {
            list-style: none;
            display: flex;
            gap: 20px;
            margin: 0;
            padding: 0;
        }

        .header .nav ul li a {
            text-decoration: none;
            color: white;
            font-size: 16px;
            padding: 5px 10px;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
        }

        .header .nav ul li a:hover {
            background-color: #CBB26A;
            color: #143c64;
        }

        .jobpost-hero {
            background-color: #143c64;
            color: white;
            padding: 50px 0;
            text-align: center;
        }

        .jobpost-hero h1 {
            font-size: 36px;
            font-weight: 600;
        }

        .jobpost-hero p {
            font-size: 18px;
            margin-top: 10px;
        }

        .jobpost-form {
            padding: 50px 0;
        }

        .jobpost-form h2 {
            font-size: 24px;
            color: #143c64;
            font-weight: 600;
            margin-bottom: 20px;
        }

        .jobpost-form label {
            font-weight: 600;
            color: #333;
        }

        .jobpost-form .btn-primary {
            background-color: #CBB26A;
            border: none;
        }

        .jobpost-form .btn-primary:hover {
            background-color: #143c64;
            color: white;
        }

        .footer {
            background-color: #143c64;
            color: white;
            padding: 20px 0;
        }

        .footer p {
            margin: 0;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="logo">
                <a href="home.php">JOBSEEK</a>
            </div>
            <nav class="nav" style="float:right;">
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="profile.php">Profile</a></li>
                    <li><a href="login.php">Login</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="jobpost-hero">
        <div class="container">
            <h1>Post a Job</h1>
            <p>Reach out to top talent by posting your job openings on JobSeek.</p>
        </div>
    </section>

    <section class="jobpost-form">
        <div class="container">
            <h2>Job Details</h2>
            <form action="submit_job.php" method="POST">
                <div class="mb-3">
                    <label for="jobTitle" class="form-label">Job Title</label>
                    <input type="text" class="form-control" id="jobTitle" name="jobTitle" placeholder="Enter job title" required>
                </div>
                <div class="mb-3">
                    <label for="companyName" class="form-label">Company Name</label>
                    <input type="text" class="form-control" id="companyName" name="companyName" placeholder="Enter company name" required>
                </div>
                <div class="mb-3">
                    <label for="location" class="form-label">Location</label>
                    <input type="text" class="form-control" id="location" name="location" placeholder="Enter job location" required>
                </div>
                <div class="mb-3">
                    <label for="jobDescription" class="form-label">Job Description</label>
                    <textarea class="form-control" id="jobDescription" name="jobDescription" rows="5" placeholder="Enter job description" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="salary" class="form-label">Salary</label>
                    <input type="text" class="form-control" id="salary" name="salary" placeholder="Enter salary range" required>
                </div>
                <button type="submit" class="btn btn-primary">Post Job</button>
            </form>
        </div>
    </section>

    <footer class="footer">
        <div class="container text-center">
            <p>&copy; 2025 JobSeek. All Rights Reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
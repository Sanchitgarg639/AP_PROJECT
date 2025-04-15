<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JobSeek | About</title>

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
            background: url('https://via.placeholder.com/1920x400') no-repeat center center/cover;
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

        .about-hero {
            background-color: #143c64;
            color: white;
            padding: 50px 0;
        }

        .about-hero h1 {
            font-size: 36px;
            font-weight: 600;
        }

        .about-hero p {
            font-size: 18px;
            margin-top: 10px;
        }

        .about-content {
            padding: 50px 0;
        }

        .about-content h2 {
            font-size: 24px;
            color: #143c64;
            font-weight: 600;
            margin-bottom: 15px;
        }

        .about-content p, .about-content ul {
            font-size: 16px;
            line-height: 1.8;
            color: #555;
        }

        .about-content ul li {
            margin-bottom: 10px;
            padding-left: 15px;
        }

        .team {
            background-color: #f1f1f1;
            padding: 50px 0;
        }

        .team h2 {
            font-size: 28px;
            color: #143c64;
            font-weight: 600;
            margin-bottom: 20px;
        }

        .team p {
            font-size: 16px;
            color: #555;
            margin-bottom: 30px;
        }

        .team .row .col-md-4 {
            text-align: center;
        }

        .team .row .col-md-4 img {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border-radius: 50%;
            margin-bottom: 15px;
        }

        .team .row .col-md-4 h4 {
            font-size: 20px;
            color: #333;
            font-weight: 600;
        }

        .team .row .col-md-4 p {
            font-size: 14px;
            color: #777;
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
        .logo{
            margin: -15px;
            margin-top: -10px;
            margin-bottom: -25px;
        }
        .nav{
            margin: -15px;
            margin-bottom: -25px;
            color: white;
        }
        .header{
            background-color: #143c64;
            color: white;
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
                    <li><a href="profile.php">Profile</a></li>
                    <li><a href="signup.php">Sign Up</a></li>
                    <li><a href="login.php">Login</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="about-hero">
        <div class="container text-center">
            <h1>About JobSeek</h1>
            <p>Your trusted platform for finding the perfect job and connecting with top employers.</p>
        </div>
    </section>

    <section class="about-content">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Our Mission</h2>
                    <p>At JobSeek, our mission is to bridge the gap between job seekers and employers by providing a seamless and efficient platform. We aim to empower individuals to achieve their career goals and help companies find the right talent to grow their businesses.</p>
                </div>
                <div class="col-md-6">
                    <h2>Why Choose Us?</h2>
                    <ul>
                        <li>Extensive job listings across various industries.</li>
                        <li>Trusted by top employers worldwide.</li>
                        <li>Easy-to-use platform with advanced search tools.</li>
                        <li>Dedicated to helping you succeed in your career.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="team">
        <div class="container text-center">
            <h2>Meet Our Team</h2>
            <p>Our team of dedicated professionals works tirelessly to ensure your success.</p>
            <div class="row">
                <div class="col-md-3">
                    <img src="https://via.placeholder.com/150" alt="Team Member">
                    <h4>Sanchit Garg</h4>
                    <p>Founder & CEO</p>
                </div>
                <div class="col-md-3">
                    <img src="https://via.placeholder.com/150" alt="Team Member">
                    <h4>Saurabh Jadhav</h4>
                    <p>Head of Operations</p>
                </div>
                <div class="col-md-3">
                    <img src="https://via.placeholder.com/150" alt="Team Member">
                    <h4>Arijeet Tripathi</h4>
                    <p>Lead Developer</p>
                </div>
                <div class="col-md-3">
                    <img src="https://via.placeholder.com/150" alt="Team Member">
                    <h4>Shlok Dadhich</h4>
                    <p>Lead Developer</p>
                </div>
            </div>
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
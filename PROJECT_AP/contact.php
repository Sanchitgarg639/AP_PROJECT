<?php
    include 'partials/dbconnect.php';
    session_start();
    error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JobSeek | Contact</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://kit-pro.fontawesome.com/releases/v5.15.3/css/pro.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/_nav.css">
    <link rel="stylesheet" href="css/_footerc.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap');

        body {
            font-family: 'Montserrat', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
            color: #333;
        }

        .contact-hero {
            background-color: #143c64;
            color: white;
            padding: 50px 0;
        }

        .contact-hero h1 {
            font-size: 36px;
            font-weight: 600;
        }

        .contact-hero p {
            font-size: 18px;
            margin-top: 10px;
        }

        .contact-form {
            padding: 50px 0;
        }

        .contact-form h2 {
            font-size: 24px;
            color: #143c64;
            font-weight: 600;
            margin-bottom: 15px;
        }

        .contact-form label {
            font-size: 16px;
            color: #555;
        }

        .contact-form input, .contact-form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .contact-form button {
            background-color: #CBB26A;
            color: #143c64;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }

        .contact-form button:hover {
            background-color: #143c64;
            color: white;
        }
    </style>
</head>
<body>
    <?php include 'partial/_navbar.php'; ?>

    <section class="contact-hero">
        <div class="container text-center">
            <h1>Contact Us</h1>
            <p>We'd love to hear from you! Reach out to us with your questions or feedback.</p>
        </div>
    </section>

    <section class="contact-form">
        <div class="container">
            <h2>Get in Touch</h2>
            <form action="process_contact.php" method="POST">
                <div class="mb-3">
                    <label for="name" class="form-label">Your Name</label>
                    <input type="text" id="name" name="name" class="form-control" placeholder="Enter your name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Your Email</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Your Message</label>
                    <textarea id="message" name="message" class="form-control" rows="5" placeholder="Enter your message" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Send Message</button>
            </form>
        </div>
    </section>

    <?php include 'partial/_footer.php'; ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>

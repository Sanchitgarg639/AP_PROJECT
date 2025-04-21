<?php
    include 'partials/dbconnect.php';
    error_reporting();
    session_start();

	$successful = false; $error = false;
	$companyer = false; $salaryer = false; $discper = false; $titleer = false; $yrer = false; $locationer = false;
	if(isset($_POST['submit'])){
        $title = $_POST['title'];
		$company = $_POST['company'];
        $location = $_POST['location'];
		$discp = $_POST['discp'];
		$salary = $_POST['salary'];
		$yr = $_POST['yr'];

		if(empty($title)){
			$titleer = "Please enter your company name.";
		}
		else{
			if(empty($company)){
				$companyer = "Please enter the salary.";
			}
			else{		
				if(empty($location)){
					$locationer = "Please enter the positions available.";
				}
				else{
					if(empty($discp)){
						$discper = "Please enter the job description.";
					}
					else{
						if(empty($salary)){
							$salaryer = "Please enter the skills needed.";
						}
						else{
							if(empty($yr)){
								$yrer = "Please enter the years contract is valid for.";
							}
							else{					
								$sql = "INSERT INTO `jobpost` (`title`, `company`, `location`, `salary`, `discp`, `leastyr`) VALUES ('$title', '$company', '$location', '$salary', '$discp', '$yr')";
                                $result = mysqli_query($conn, $sql);
								if ($result) { $successful = true; }
                                else { $error = true; }
							}
						}
					}
				}
			}

		}
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="css/_footerc.css">
		
	<title>JobSeek | Lets help you post a job</title>

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

        .btn-primary {
            background-color: #CBB26A;
            border: none;
        }

        .btn-primary:hover {
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

    <?php
        if($successful){
            echo "
            <div class='alert alert-info alert-dismissible fade show my-0' role='alert'>
                It's done, the job is posted.
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>";
        }

		if($error){
			echo "
			<div class='alert alert-danger alert-dismissible fade show my-0' role='alert'>
				<strong> Oops! </strong> Something went wrong. Please try again.
				<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
			</div>";
		}
    ?>

    <section class="jobpost-form">
        <div class="container">
            <h2>Job Details</h2>
            <form action="" method="POST">
                <div class="mb-3">
                    <label for="title" class="form-label">Job Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter job title" autocomplete="off">
                    <small class="form-text form-label "> <?php
                        if($titleer){ echo ' <div style="color: #d32f2f; font-size: 15px;"> '.$titleer.' </div>'; }
                    ?> </small>
                </div>
                <div class="mb-3">
                    <label for="companyName" class="form-label">Company Name</label>
                    <input type="text" class="form-control" id="company" name="company" placeholder="Enter company name" autocomplete="off">
                    <small class="form-text form-label "> <?php
                                if($companyer){ echo ' <div style="color: #d32f2f; font-size: 15px;"> '.$companyer.' </div>'; }
                    ?> </small>
                </div>
                <div class="mb-3">
                    <label for="location" class="form-label">Location</label>
                    <input type="text" class="form-control" id="location" name="location" placeholder="Enter job location" autocomplete="off">
                    <small class="form-text form-label "> <?php
                        if($locationer){ echo ' <div style="color: #d32f2f; font-size: 15px;"> '.$locationer.' </div>'; }
                    ?> </small>
                </div>
                <div class="mb-3">
                    <label for="jobDescription" class="form-label">Job Description (In not more then few words)</label>
                    <textarea class="form-control" id="discp" name="discp" rows="5" placeholder="Enter job description"></textarea>
                    <small class="form-text form-label "> <?php
                        if($discper){ echo ' <div style="color: #d32f2f; font-size: 15px;"> '.$discper.' </div>'; }
                    ?> </small>
                </div>
                <div class="mb-3">
                    <label for="salary" class="form-label">Salary</label>
                    <input type="text" class="form-control" id="salary" name="salary" placeholder="Enter salary range" autocomplete="off">
                    <small class="form-text form-label "> <?php
                        if($salaryer){ echo ' <div style="color: #d32f2f; font-size: 15px;"> '.$salaryer.' </div>'; }
                    ?> </small>
                </div>
                <div class="mb-3">
                    <label class="form-label">Minimum Number of years of contract:</span>
                    <input type="number" class="form-control" id="yr" name="yr" placeholder="Least years contract is valid for" autocomplete="off">
                    <small class="form-text form-label "> <?php
                        if($yrer){ echo ' <div style="color: #d32f2f; font-size: 15px;"> '.$yrer.' </div>'; }
                    ?> </small>
                </div>
                <input type="submit" value="Post Job" class="btn btn-primary" name="submit">
            </form>
        </div>
    </section>

    <?php include 'partial/_footer.php'; ?>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
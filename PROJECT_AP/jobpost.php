
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JobSeek | Job Postings</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://kit-pro.fontawesome.com/releases/v5.15.3/css/pro.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap');
        body { font-family: 'Montserrat', sans-serif; background-color: #f8f9fa; color: #333; }
        .header { background-color: #143c64; color: white; padding: 20px 0; }
        .header .logo a { font-size: 28px; font-weight: bold; text-decoration: none; color: #CBB26A; }
        .header .nav ul { list-style: none; display: flex; gap: 20px; margin: 0; padding: 0; }
        .header .nav ul li a { text-decoration: none; color: white; font-size: 16px; padding: 5px 10px; border-radius: 5px; }
        .header .nav ul li a:hover { background-color: #CBB26A; color: #143c64; }
        .jobpost-hero { background-color: #143c64; color: white; padding: 50px 0; text-align: center; }
        .jobpost-hero h1 { font-size: 36px; font-weight: 600; }
        .jobpost-hero p { font-size: 18px; margin-top: 10px; }
        .search-bar { margin: 30px 0; }
        .search-bar input, .search-bar select { border-radius: 20px; padding: 10px 15px; }
        .job-container { padding: 30px 0; }
        .job-card { background-color: white; border-radius: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); padding: 20px; margin-bottom: 20px; transition: transform 0.3s ease; }
        .job-card:hover { transform: translateY(-5px); }
        .job-card h3 { font-size: 20px; color: #143c64; font-weight: 600; }
        .job-card p { font-size: 14px; color: #555; margin-bottom: 10px; }
        .btn-apply { background-color: #CBB26A; color: #143c64; border: none; padding: 10px 20px; font-size: 14px; border-radius: 5px; }
        .btn-apply:hover { background-color: #143c64; color: white; }
        .footer { background-color: #143c64; color: white; padding: 20px 0; text-align: center; }
    </style>
</head>
<body>
<header class="header">
    <div class="container d-flex justify-content-between align-items-center">
        <div class="logo"><a href="home.php">JOBSEEK</a></div>
        <nav class="nav">
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
        <h1>Available Job Postings</h1>
        <p>Explore the latest job opportunities and apply now!</p>
    </div>
</section>

<section class="search-bar">
    <div class="container">
        <form id="searchForm" method="GET" action="jobpost.php">
            <div class="row g-3">
                <div class="col-md-3"><input type="text" class="form-control" name="title" placeholder="Job Title"></div>
                <div class="col-md-3"><input type="text" class="form-control" name="company" placeholder="Company"></div>
                <div class="col-md-3"><input type="text" class="form-control" name="skills" placeholder="Skills"></div>
                <div class="col-md-3"><input type="text" class="form-control" name="salary" placeholder="Salary"></div>
                <div class="col-md-3">
                    <select name="jobtype" class="form-control">
                        <option value="">Job Type</option>
                        <option value="full-time">Full-Time</option>
                        <option value="part-time">Part-Time</option>
                        <option value="internship">Internship</option>
                        <option value="freelance">Freelance</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <select name="experience" class="form-control">
                        <option value="">Experience Level</option>
                        <option value="0">Fresher</option>
                        <option value="1">1+ years</option>
                        <option value="3">3+ years</option>
                        <option value="5">5+ years</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <select name="sort" class="form-control">
                        <option value="">Sort By Salary</option>
                        <option value="asc">Low to High</option>
                        <option value="desc">High to Low</option>
                    </select>
                </div>
            </div>
            <div class="text-center mt-3">
                <button type="submit" class="btn btn-primary px-4">Search</button>
            </div>
        </form>
    </div>
</section>

<section class="job-container">
    <div class="container" id="jobList">
        <?php
        function parseSalary($salaryStr) {
            $clean = preg_replace('/[^0-9]/', '', $salaryStr);
            return is_numeric($clean) ? (int)$clean : 0;
        }

        $title = strtolower($_GET['title'] ?? '');
        $company = strtolower($_GET['company'] ?? '');
        $skills = strtolower($_GET['skills'] ?? '');
        $salary = strtolower($_GET['salary'] ?? '');
        $jobtype = strtolower($_GET['jobtype'] ?? '');
        $experience = $_GET['experience'] ?? '';
        $sort = $_GET['sort'] ?? '';

        $localJobs = json_decode(file_get_contents("jobs.json"), true);

        $apiUrl = "https://api.example.com/jobs";
        $apiKey = "your-api-key";
        $apiId = "your-api-id";

        $apiJobs = [];
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $apiUrl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            "x-api-key: $apiKey",
            "x-api-id: $apiId",
            "Accept: application/json"
        ]);
        $response = curl_exec($ch);
        curl_close($ch);

        if ($response) {
            $apiData = json_decode($response, true);
            if (is_array($apiData)) {
                $apiJobs = $apiData;
            }
        }

        $jobs = array_merge($localJobs, $apiJobs);

        $filteredJobs = array_filter($jobs, function($job) use ($title, $company, $skills, $salary, $jobtype, $experience) {
            return (empty($title) || stripos($job['title'], $title) !== false)
                && (empty($company) || stripos($job['company'], $company) !== false)
                && (empty($skills) || stripos($job['skills'], $skills) !== false)
                && (empty($salary) || stripos($job['salary'], $salary) !== false)
                && (empty($jobtype) || (isset($job['type']) && stripos($job['type'], $jobtype) !== false))
                && (empty($experience) || (isset($job['years']) && (int)$job['years'] >= (int)$experience));
        });

        if ($sort === 'asc') {
            usort($filteredJobs, fn($a, $b) => parseSalary($a['salary']) <=> parseSalary($b['salary']));
        } elseif ($sort === 'desc') {
            usort($filteredJobs, fn($a, $b) => parseSalary($b['salary']) <=> parseSalary($a['salary']));
        }

        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $perPage = 7;
        $totalJobs = count($filteredJobs);
        $totalPages = ceil($totalJobs / $perPage);
        $start = ($page - 1) * $perPage;
        $currentJobs = array_slice($filteredJobs, $start, $perPage);

        foreach ($currentJobs as $job) {
            echo "<div class='job-card'>";
            echo "<h3>{$job['title']} at {$job['company']}</h3>";
            echo "<p><strong>Salary:</strong> {$job['salary']}</p>";
            echo "<p><strong>Position:</strong> {$job['position']}</p>";
            echo "<p><strong>Description:</strong> {$job['description']}</p>";
            echo "<p><strong>Skills Needed:</strong> {$job['skills']}</p>";
            echo "<p><strong>Minimum Years to Serve:</strong> {$job['years']}</p>";
            echo "<button class='btn btn-apply'>Apply Now</button>";
            echo "</div>";
        }
        ?>

        <div class="d-flex justify-content-between">
            <?php if ($page > 1): ?>
                <a href="?page=<?= $page - 1 ?>" class="btn btn-secondary">&larr; Previous</a>
            <?php endif; ?>

            <?php if ($page < $totalPages): ?>
                <a href="?page=<?= $page + 1 ?>" class="btn btn-secondary ms-auto">Next &rarr;</a>
            <?php endif; ?>
        </div>
    </div>
</section>

<footer class="footer">
    <div class="container">
        <p>&copy; 2025 JobSeek. All Rights Reserved.</p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

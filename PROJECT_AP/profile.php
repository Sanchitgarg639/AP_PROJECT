<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile | JobSeek</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap');
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            background: #e7e7e7;
            font-family: 'Montserrat', sans-serif;
            display: flex;
            justify-content: center;
            color: #333;
        }
        .container {
            display: flex;
            width: 80vw;
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        .left {
            width: 30%;
            background-color: #143c64;
            color: white;
            padding: 20px;
        }
        .pimg {
            height: 200px;
            width: 100%;
            background-color: #000;
            margin-bottom: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .pimg img {
            height: 100%;
            width: 100%;
            object-fit: cover;
        }
        h4 {
            text-align: center;
            margin-bottom: 15px;
            font-size: 18px;
            text-transform: uppercase;
        }
        .contact, .skills, .softwares, .hobbies {
            margin-bottom: 20px;
        }
        .contactin, .skillsin, .hobbiesin {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }
        .contactin i, .hobbiesin i {
            margin-right: 10px;
            font-size: 18px;
        }
        .right {
            width: 70%;
            padding: 20px;
        }
        .right h1 {
            font-size: 28px;
            margin-bottom: 10px;
        }
        .right h2 {
            font-size: 20px;
            margin-bottom: 20px;
            color: #143c64;
        }
        .section {
            margin-bottom: 20px;
        }
        .section h3 {
            font-size: 18px;
            margin-bottom: 10px;
            color: #143c64;
        }
        .section p {
            font-size: 14px;
            line-height: 1.6;
        }
        .hobbies {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }
        .hobbiesin {
            width: 13%;
            display: flex;
            justify-content: center;
            font-size: 20px;
            color:#000;
            font-weight: 600;
            background-color: whitesmoke;
            padding: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .first-name{
            font-size: 50px;
            font-weight: 600;  
            color: #143c64;
            margin-top: 20px;
            margin-bottom: -20px;
        }
        .last-name{
            font-size: 55px;
            font-weight: 600;  
            color:rgb(0, 0, 0);
            margin-top: -20px;
        }
        .work_interest{
            font-size: 20px;
            font-weight: 600;  
            color: #143c64;
            margin-top: -10px;
        }
        .personal{
            background-color: #173452; 
            color: white;
            padding: 10px 20px;
            border-radius: 20px;
            border: none;
            font-weight: bold;
            font-size: 30px;
            margin-bottom: 20px;
            margin-top: 20px;
        
        }
        .para{
            font-size: 20px !important;
        }
        .table{
            padding: 15px;
            border-color:white;
            font-size: 20px;
        }
        .contact , .skills , .softwares{
            margin-top: 10px;
            margin-bottom: 20px;
            font-size: 22px;
            padding: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="left">
            <div class="pimg">
                <img src="https://imgs.search.brave.com/pPdmXayULi1X0GUP5jsZux8v9W_ALPTtZTa1IdTRk90/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly90My5m/dGNkbi5uZXQvanBn/LzA1Lzg0LzY1LzI2/LzM2MF9GXzU4NDY1/MjYxNl9xS1U0UTNO/bTg5azNSRlZTbEVR/eXlUZkhzV1JiRWtH/dC5qcGc" alt="Profile Picture">
            </div>
            <div class="contact">
                <h4 style="color: #CBB26A; font-size:30px;">Contact</h4>
                <div class="contactin"><i class="fas fa-envelope"></i> tanymay@email.com</div>
                <div class="contactin"><i class="fas fa-phone"></i> 012 345 678 900</div>
                <div class="contactin"><i class="fas fa-map-marker-alt"></i> 162 Glory Road, Nashville</div>
                <div class="contactin"><i class="fas fa-globe"></i> martdesignfolio.com</div>
            </div>
            <div class="skills">
                <h4 style="color: #CBB26A;font-size:30px;">Skills</h4>
                <div class="skillsin">Web Design</div>
                <div class="skillsin">Graphic Design</div>
                <div class="skillsin">Digital Art</div>
                <div class="skillsin">Drawing</div>
                <div class="skillsin">Animation</div>
            </div>
            <div class="softwares">
                <h4 style="color: #CBB26A;font-size:30px;" >Softwares</h4>
                <div class="skillsin">Photoshop</div>
                <div class="skillsin">Illustrator</div>
                <div class="skillsin">Indesign</div>
                <div class="skillsin">Flash</div>
            </div>
            <div>
                <h4 style="color: #CBB26A;font-size:30px;" >Hobbies</h4>
                <div class="hobbies">
                <div class="hobbiesin"><i class="fas fa-search"></i></div>
                <div class="hobbiesin"><i class="fas fa-sack-dollar"></i></div>
                <div class="hobbiesin"><i class="fas fa-list-check"></i></div>               
                <div class="hobbiesin"> <i class="fa-solid fa-user-tie"></i></div>
            </div>
            </div>
        </div>
        <div class="right">
            <p class="first-name">TANYA MAY</p>
            <p class="last-name">MARTIN</p>
            <p class="work_interest">Graphic Designer</p>
            <p class="para">Highly creative and multitalented Graphic Designer with extensice experience in print design, multimedia and marketing</p>
            <div class="section">
                <button class="personal">
                     PERSONAL INFORMATION
                </button>
                <p class="para">Working give me a lot of skills and experience that I believe make me best suited for the job position of Graphic Designer.</p>
                <p class="para">Highly creative and multitalented Graphic Designer experience in print design. Exceptional collabrative and interpersonal Skills.</p>
            </div>
            <div class="section">
                <button class="personal">
                   EDUCATION
                </button>
                <table class="table">
                    <tr>
                        <th rowspan=2> 2006-2008</th>
                        <th>Master of Arts in Graphic Design</th>
                    </tr>
                    <tr>
                        <td> Suffolk University, Boston</td>
                    </tr>
                    <tr>
                        <th rowspan=2>2002-2006</th>
                        <th>Bachelor of Arts</th>
                    </tr>
                    <tr>
                        <td> Suffolk University, Boston</td>
                    </tr>
                    <tr>
                        <th rowspan=2>1998-2002</th>
                        <th>High School</th>
                    </tr>
                    <tr>
                        <td> Tennis High School, Boston</td>
                    </tr>
                </table>
            </div>
            <div class="section">
                <button class="personal">
                    WORK EXPERIENCE
                </button>
                <table class="table">
                    <tr>
                        <th rowspan=3>2014-Presen</th>
                        <th>Digital Fx Design Studio</th>
                    </tr>
                    <tr>
                        <td>Graphic Designer</td>
                    </tr>
                    <tr>
                        <td>Maintained projet management schedules, databases, and forecast</td>
                    </tr>
                    <tr>
                        <th rowspan=3>2008-2014</th>
                        <th> Spin Design Studio</th>
                    </tr>
                    <tr>
                        <td>Graphic Designer</td>
                    </tr>
                    <tr>
                        <td>Utilize large format printing for billboards and trade shows and digital photography to enhance proposed Work</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>
</html>

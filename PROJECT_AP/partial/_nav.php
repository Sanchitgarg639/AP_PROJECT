<?php
    include ('partials/form/_dbcon.php');
    session_start();
?>
<nav>
<?php
    echo '<div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="#" class="a">
            <i class="fad fa-broadcast-tower"></i> Recently Uploaded
        </a>

        <div class="a" onclick="fun()">
            <i class="fad fa-user-edit"></i> By Artist <i class="fas fa-caret-down down"></i>
        </div>
        <div class="ddrop" id="dropdown">
            <a href="#" class="drop">
                <i class="fad fa-street-view"></i> Shirshak Agrawaal
            </a>
        </div>

        <a href="#" class="a">
            <i class="far fa-code-branch"></i> Categories
        </a>

        <a href="#" class="a">
            <i class="far fa-rectangle-landscape"></i> Frames
        </a>';

        $query = "SELECT * FROM `sidenav` WHERE `homeid`='1'";
        $result = mysqli_query($conn, $query);
        $row = mysqli_num_rows($result);
        if($row > 0){
            while($data = mysqli_fetch_assoc($result)){
                echo '<a href="#" class="a">
                        '.$data['itag'].' '.$data['title'].'
                    </a>';
            }
        }

    echo '</div>
    <div class="categories">
        <span class="openN" onclick="openNav()">
            <div>&#9776;</div> <div class="browse">BROWSE CATEGORIES</div>
        </span>
    </div>
    <div class="logo">
        <a href="home.php">
            <div class="shade">$hade</div>
            <div class="bazaar">bazaar</div>
        </a>
    </div>';
    if((isset($_SESSION['logn']) && $_SESSION['logn'] == true) || (isset($_SESSION['sign']) && $_SESSION['sign'] == true)){
        echo '<div class="top_right act">
            <div class="after dropdown">
                <button class="dropbtn">'.$_SESSION['uname'].'</button>
                <div class="dropdown-content">
                    <a href="profile.php">Profile</a>
                    <a href="logout.php">Logout</a>
                </div>
            </div>
            <div class="after">
                <a href="wishlist.php"> <i class="fas fa-heart"></i> </a>
                <a href="cart.php"> <i class="fas fa-shopping-cart"></i> </a>
            </div>
        </div>';
    }
    else{
        echo '<div class="top_right">
            <a href="home.php"><div class="home">Home</div></a>
            <a href="login.php"><div class="sign">Sign-in</div></a>
        </div>';

    }
?>
</nav>


<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("dropdown").style.display = "none";
    }
    
    function fun(){
        document.getElementById("dropdown").style.display = "block";
    }
</script>
<!--Searchbar Modal -->
<div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="searchModal">Login to Shadebazaar.</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Login or Signup to Shadebazaar to search for an amazing collection of arts and paintings. <br>
                </div>
                <div class="modal-footer">
                    <a href="login.php" class="btn btn-primary">Log-in</a>
                    <a href="signup.php" class="btn btn-primary">Sign-up</a>
                </div>
            </div>
        </div>
    </div>

<?php
        echo '<div class="search">
            <form action="search.php" method="GET" style="display: flex;">
                <div class="wrapper">
                    <div class="searchbar">
                        <a href="" target="_blank" hidden></a>
                        <input class="input" id="search" type="text" name="searchbar" placeholder="Search for the jobs you think fits your attire..." onchange="openPage()" autocomplete="off">
                        <div class="autocomplete">';
                        echo '<li class="autol">Name</li>
                        <li class="autol">Game</li>
                        <li class="autol">Gate</li>';
                            // $query = "SELECT * FROM `builder_data`";
                            // $result = mysqli_query($conn , $query);
                            // $row = mysqli_num_rows($result);
                            // if($row > 0){
                            //     while($data = mysqli_fetch_assoc($result)){
                            //         echo '<li class="autol">'.$data['builder_name'].'</li>';
                            //         echo '<li class="autol">'.$data['phone_number'].'</li>';
                            //     }
                            // }
                            echo'
                        </div>
                    </div>
                </div>
                <button type="submit" class="searchi text-center">
                    <i class="fas fa-search"></i>
                </button>
            </form>
        </div>
        ';
?>

<script>
    let suggestions = [
        "Name",
        "Game",
        "Gate"
        // <?php
        //     $query = "SELECT * FROM `builder_data`";
        //     $result = mysqli_query($conn , $query);
        //     $row = mysqli_num_rows($result);
        //     if($row > 0){
        //         while($data = mysqli_fetch_assoc($result)){
        //             echo '
        //             "'.$data['builder_name'].'",
        //             "'.$data['phone_number'].'",';
        //         }
        //     }
        //     echo '"Garg"';
        // ?>
    ];
</script>

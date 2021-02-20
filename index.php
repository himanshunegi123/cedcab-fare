<?php
include_once('array.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <a href=null>Logo source Logodesign.net</a> -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="index.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="icon" href="https://lh3.googleusercontent.com/MKqBRB5pxA_c0iOLBkbpAPBe_wNyN8O5_X3ffXaWo8zsSvB4Emu8aWqkB7vjYtEx0usRQh8=s48" />
    <title>CED CAB</title>
    <script src="//code.jquery.com/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/1.1.1/typed.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-sm bg-dark">
            <img src="taxi-icon-taxi-png-vector-elements-907c387e0255a92516ceca5937a657a2.png" width="110px" height="70px" />
            <p style="color: white;font-size: 1.2rem;"><span style="color: yellow;font-size:2.5rem;font-family: 'Great Vibes', cursive;">C</span>ed<span style="color: yellow;font-size:2.5rem;font-family: 'Great Vibes', cursive;">C</span>ab</p>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Book A Ride</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Rides
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Ride Requests</a>
                            <a class="dropdown-item" href="#">Completed Rides</a>
                            <a class="dropdown-item" href="#">Canceled Rides</a>
                            <a class="dropdown-item" href="#">All Rides</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Account
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Change Password</a>
                            <a class="dropdown-item" href="#">Update Profile</a>

                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="main">
        <p style="letter-spacing: 2px;font-size: 2.5rem;">
            Book a City Taxi to your destination from <span style="color:rgb(233, 255, 30);" id="example1">&nbsp;</span>
        </p>
        <p style="color: yellow; letter-spacing: 2px;font-size: 1.5rem;">
            Choose from a range of categories and prices
        </p>
        <div class="mainform">
            <button id="taxi">CITY TAXI</button>
            <hr />
            <p style="letter-spacing: 2px; font-size: 2em">
                Your everyday travel partner
            </p>
            <p style="letter-spacing: 2px; font-size: 1.5em; opacity: 0.6;margin-top: -20px;">
                AC Cabs for point to point travel
            </p>
            <form id="formID" method="POST">
                <label for="">&nbsp;&nbsp;PICKUP POINT&nbsp;</label>
                <select type="text" id="pickUpPoint" class="pickUpPoint" name="pickUpPoint" placeholder="pickup Location">
                    <?php foreach (DistLoc as $DL => $DL_val) {
                        echo  '<option value=' . $DL . '>' . $DL . '</option>';
                    } ?>
                </select><br><br>
                <label for="">&nbsp;&nbsp;DROP POINT&nbsp;&nbsp;&nbsp;</label>
                <select type="text" id="dropPoint" class="dropPoint" name="dropPoint">
                    <?php foreach (DistLoc as $DL => $DL_val) {
                        echo  '<option value=' . $DL . '>' . $DL . '</option>';
                    } ?>
                </select><br><br>
                <label for="">&nbsp;&nbsp;CAB TYPE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <select type="text" id="carType" class="carType" name="carType" onchange="carTyped()">
                    <?php foreach (CabType as $CT => $CT_val) {
                        echo  '<option>' . $CT . '</option>';
                    } ?>

                </select><br><br>
                <label for="">&nbsp;&nbsp;Luggage&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <input type="number" id="luggage" name="luggage" placeholder="Enter Luggage in KG."><br><br>
                <button type="submit" id="submit" name="submit">Calculate Fare</button>
            </form>
            
        </div>
        <div class="container1">
            <span style="font-size:0.8rem;" class="text-muted">Copyright © CEDCOSS Technologies 2021. All Rights Reserved.</span><br>
        </div>
        <div class="modal foot_modal" id="modal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Modal body text goes here.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary">Save changes</button>
                            <button type="button" class="btn btn-secondary" id="closeModal" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
</body>
<script>
    $(document).ready(function() {
        $(example1).typed({
            strings: [
                "Charbagh.",
                "BBD.",
                "Kesarganj.",
                "Indira Nagar.",
                "Barabanki.",
                "Faizabad.",
                "Basti.",
                "Gorakhpur.",
            ],
            typeSpeed: 200,
            backspaceSpeed: 20,
            backspaceDelay: 800,
            repeatDelay: 2000,
            repeat: true,
            autoStart: true,
            startDelay: 100,
            loop: true,
        });
    });

    $("#pickUpPoint").change(function() {
        $("#dropPoint option").show();
        $("#dropPoint option[value=" + $(this).val() + "]").hide();
    });
    $("#dropPoint").change(function() {
        $("#pickUpPoint option").show();
        $("#pickUpPoint option[value=" + $(this).val() + "]").hide();
    });


    $(document).ready(function() {
        $("#submit").click(function(e) {
            e.preventDefault();
            var pickUpPoint = $("#pickUpPoint").val();
            var dropPoint = $("#dropPoint").val();
            var carType = $("#carType").val();
            var luggage = $("#luggage").val();
            $.ajax({
                url: 'helper.php',
                type: 'POST',
                dataType: 'json',
                data: {
                    pickUpPoint: pickUpPoint,
                    dropPoint: dropPoint,
                    carType: carType,
                    luggage: luggage,
                },
                success: function(data) {
                    console.log(data);
                    let final = JSON.parse(JSON.stringify((data)));
                    // console.log(final["totalfare"]);
                    // alert("console ");
                    $(".modal-body").html("<p> Total Fare = " +final['totalfare']+ "-/ Rs.</p><br>"+"<p> Total Luggage Price = " +final["luggageprice"]+ "-/ Rs.</p><br>"+"<p> Total Disrtance = " +final['TotalDis']+ "KM</p><br>");
                    $("#modal").modal('show');
                }
            })
        })
    })

    function carTyped() {
        let selected = document.getElementById("carType").value;
        if (selected == "CedMicro") {
            document.getElementById("luggage").value = "";
            document.getElementById("luggage").disabled = true;
            document.getElementById("luggage").placeholder =
                "Luggage is not allowed for current car.";
        } else {
            document.getElementById("luggage").value = "";
            document.getElementById("luggage").disabled = false;
            document.getElementById("luggage").placeholder = "Enter Luggage in KG.";
        }
    }
    $("#closeModal").click(function() {
        $("#modal").modal('hide');
    })
</script>


</html>

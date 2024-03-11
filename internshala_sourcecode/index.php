<?php
include('dbconnect.php');

$searchTitle = "";
$searchCity = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $searchTitle = $_POST["title_search"];
    $searchCity = $_POST["city_search"];
    
}

$queryInternship = "SELECT * FROM internships WHERE 1=1";
if (!empty($searchTitle)) {
    $queryInternship .= " AND title LIKE '%$searchTitle%'";
}
if (!empty($searchCity) && empty($searchTitle)) {
    $queryInternship .= " AND city LIKE '%$searchCity%'";
}


$resultInternship = mysqli_query($conn, $queryInternship);

if (!$resultInternship) {
    die('Error: ' . mysqli_error($conn));
}

$queryJobs = "SELECT * FROM jobs WHERE 1=1";
if (!empty($searchTitle)) {
    $queryJobs .= " AND title LIKE '%$searchTitle%'";
}
if (!empty($searchCity) && empty($searchTitle)) {
    $queryJobs .= " AND city LIKE '%$searchCity%'";
}

$resultJobs = mysqli_query($conn, $queryJobs);

if (!$resultJobs) {
    die('Error: ' . mysqli_error($conn));
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Internship Listings</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="assets/js/jquery-3.2.0.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        /* Add your custom styles here */
        body {
            background-color: gainsboro;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-size: 16px;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
        }

        .well.bg-info {
            background: linear-gradient(to bottom, #fff 0%, #f0f0f0 100%);
            border: 1px solid #000;
            border-radius: 9px;
            padding: 20px;
            margin-bottom: 20px;
            flex: 1;
            height: auto;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            width: 200px;
            position: relative;
        }

        .well.bg-info:hover {
            background-color: #e0e0e0;
        }

        .container.bg-success {
            background-color: transparent;
            padding-top: 20px;
        }

        .navbar {
            margin-bottom: 0;
        }

        .intern_title {
            color: black;
            font-size: xx-large;
            font-weight: bolder;
            justify-self: center;
            margin-bottom: 50px;
            align-self: center;
            text-align: center;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }

        .searchBAR {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 50px;
            border: #000;
            border-radius: 8px;
        }

        .searchKEY {
            width: 300px;
            border: 1px solid #fff;
            border-radius: 8px;
            padding: 5px;
            margin-right: 5px;
            height: 40px;
            text-align: center;
        }
        .searchKEY1{
            width: 150px;
            border: 1px solid #fff;
            border-radius: 8px;
            padding: 5px;
            margin-right: 5px;
            height: 40px;
            text-align: center;
        }

        .searchButton {
            appearance: none;
            backface-visibility: hidden;
            background-color: #27ae60;
            border-radius: 8px;
            border-style: none;
            box-shadow: rgba(39, 174, 96, .15) 0 4px 9px;
            box-sizing: border-box;
            color: #fff;
            cursor: pointer;
            display: inline-block;
            font-family: Inter, -apple-system, system-ui, "Segoe UI", Helvetica, Arial, sans-serif;
            font-size: 16px;
            font-weight: 600;
            letter-spacing: normal;
            line-height: 1.0;
            outline: none;
            overflow: hidden;
            padding: 13px 20px;
            position: relative;
            text-align: center;
            text-decoration: none;
            transform: translate3d(0, 0, 0);
            transition: all .3s;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
            vertical-align: top;
            white-space: nowrap;
        }

        .searchButton:hover {
            background-color: #1e8449;
            opacity: 1;
            transform: translateY(0);
            transition-duration: .35s;
        }

        .searchButton:active {
            transform: translateY(2px);
            transition-duration: .35s;
        }

        .searchButton:hover {
            box-shadow: rgba(39, 174, 96, .2) 0 6px 12px;
        }
    </style>
</head>
<body>
    <!-- Navigation bar -->
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="./" style="font-size:xx-large ; font-weight:bolder" >Internshala</a>
                <a class="navbar-brand" href="./" style="font-size: larger;margin-left: 10px; font-family: Arial;">Jobs</a>


            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="login">Log In <span class="glyphicon glyphicon-user"></span><span
                                class="sr-only">(current)</span></a></li>
                    <li><a href="signup">Sign Up <span class="glyphicon glyphicon-user"></span><span
                                class="sr-only">(current)</span></a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Search bar -->
    <div class="searchBAR">
        <form method="POST">
            <input class="searchKEY" type="text" name="title_search" placeholder="Enter Designation">
            <input class="searchKEY1" type="text" name="city_search" placeholder="City">
            <input class="searchButton" type="submit" value="Search">
        </form>
    </div>

    <!-- Display search results for internships -->
    <div class="container bg-success" id="content">
        <h1 class="intern_title">Available Internships</h1>
        <div class="row">
            <?php
            $count = 0;
            while ($row = mysqli_fetch_assoc($resultInternship)) {
                if ($count % 3 == 0) {
                    echo '</div><div class="row">';
                }
            ?>
                <div class="col-md-4">
                    <div class="well bg-info" style="height: 350px;">
                        <h4><strong>Employer: </strong><?php echo $row['employer']; ?></h4>
                        <h4><strong>Title: </strong><?php echo $row['title']; ?></h4>
                        <p><strong>City: </strong><?php echo $row['city']; ?></p>
                        <p><strong>Stipend: Rs. </strong><?php echo $row['stipend']; ?></p>
                        <p><strong>Start Date: </strong><?php echo $row['start_date']; ?></p>
                        <p><strong>End Date: </strong><?php echo $row['end_date']; ?></p>
                        <a role="button" href="login" class="btn btn-block btn-success">Apply</a>
                    </div>
                </div>
            <?php
                $count++;
            }
            ?>
        </div>
    </div>

    <!-- Display search results for jobs -->
    <div class="container bg-success" id="content">
        <h1 class="intern_title">Available Jobs</h1>
        <div class="row">
            <?php
            $count = 0;
            while ($row = mysqli_fetch_assoc($resultJobs)) {
                if ($count % 3 == 0) {
                    echo '</div><div class="row">';
                }
            ?>
                <div class="col-md-4">
                    <div class="well bg-info" style="height: 350px;">
                        <h4><strong>Employer: </strong><?php echo $row['employer']; ?></h4>
                        <h4><strong>Title: </strong><?php echo $row['title']; ?></h4>
                        <p><strong>City: </strong><?php echo $row['city']; ?></p>
                        <p><strong>Salary: Rs. </strong><?php echo $row['salary']; ?></p>
                        <p><strong>Join Date: </strong><?php echo $row['join_date']; ?></p>
                        <a role="button" href="login" class="btn btn-block btn-success">Apply</a>
                    </div>
                </div>
            <?php
                $count++;
            }
            ?>
        </div>
    </div>
</body>
</html>

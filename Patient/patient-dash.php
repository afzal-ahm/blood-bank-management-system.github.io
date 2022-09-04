<?php
include('C:\xampp\htdocs\BBMS\conn.php');
session_start();
?>
<?php
$un=$_SESSION['un'];
if(!$un)
{
    
    header("Location: patient-login.php");
}
?>
<!doctype html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">


    <title>Patient Dahsboard</title>

    <style>
        * {
            /* box-sizing: border-box; */
            margin: 0;
            padding: 0;
            font-family: 'Oswald', sans-serif;
            font-family: 'Tiro Gurmukhi', serif;
            font-family: 'Ubuntu', sans-serif
                /* font-size: 18px; */
                /* background-color: #24252A; */
        }

        header a {
            color: white;
            text-decoration: none;
        }

        header {

            height: 50px;
            background-color: red;
            display: flex;
            justify-content: flex-end;
            align-items: center;
            padding: 10px 3%;


        }

        .logo {
            cursor: pointer;
            margin-right: auto;


        }

        .nav__links {
            list-style: none;
        }

        .nav__links li {
            margin: 0px 2px;
            display: inline-block;
            padding: 0px 30px;
        }

        .nav__links li a {
            transition: all 0.3s ease 0s;
        }

        .nav__links li a:hover {
            color: gray;
        }

        header a:hover {
            color: white;
        }


        .bar {
            height: 695px;
            /* width:280; */
        }

        .side-bar {
            display: flex;
        }

        .main {

            width: 86%;
            background-color: #F3F5F9;
            padding: 42px;
        }

        .row {
            display: flex;
            justify-content: space-between;
        }

        .col {
            height: 140px;
            /* padding: 0; */
        }

        .blood {
            float: right;
        }

        .val {
            margin-left: 11px;
            margin-top: -2px;
            font-size: 14px;
        }

        .card-border {
            border: 1px solid rgb(95, 102, 107);
            margin-top: 3px;
            background-color: #f8f9fa;
            /* width: 260px; */
        }
    </style>

</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>


    <header>


        <a href="#" class="logo"> <i class="fas fa-heartbeat"
                style='font-size:23px;color:white'></i>
            <b style="font-size: 23px">&nbsp;Blood Bank Management</b></a>

        <nav>

            <!-- <ul class="nav__links" style="margin-top: 14px">
                <li><a href="http://localhost/BBMS/index.php"><i class="fas fa-home"></i>&nbsp;Home</i></a></li>

                <li><a href="#"><i class="fas fa-procedures"></i>&nbsp; Patient</i></a>
                </li>
                <li><a href="donor-login.php"><i class="fas fa-user"></i>&nbsp; Donor</i></a>
                </li>
                <li><a href="../admin/admin-login.php"><i class="fas fa-user-shield"></i>&nbsp; Admin</i></a>
                </li>
            </ul> -->
            </div>
        </nav>

    </header>
    <!-- side bar -->
    <div class="side-bar">

        <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark bar">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                <h3 style="margin-left: 16px;
        margin-bottom: auto;">Dashboard</h3>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="donor-dash.php" class="nav-link active" aria-current="page">
                        <i class="fas fa-home">
                            <use xlink:href="#home"></use>
                        </i>
                        &nbsp;Home
                    </a>
                </li>
                
                <li>
                    <a href="blood-request.php" class="nav-link text-white">
                        <i class="fas fa-hand-holding-heart"></i>&nbsp;&nbsp;Blood Request
                    </a>
                </li>
                <li>
                    <a href="request-history.php" class="nav-link text-white">
                        <i class="fas fa-history"></i>&nbsp;&nbsp;Request History
                    </a>
                </li>
            </ul>
            <hr>
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                    id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-user" width="32" height="32" class="rounded-circle me-2"></i>
                    <strong>&nbsp;&nbsp;&nbsp;Patient&nbsp;</strong>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                    <!-- <li><a class="dropdown-item" href="#">New project...</a></li>
          <li><a class="dropdown-item" href="#">Settings</a></li> -->
                    <!-- <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li> -->
                    <li><a class="dropdown-item" href="logout.php">Sign out</a></li>
                </ul>
            </div>
        </div>




        <!-- main content -->

        <div class="main">
            

            <div class="cont-box">

                <h2>Blood Request Status</h2>
                <!-- row -->
                <div class="row">
                    <div class="col">
                        <div class="card-border">
                            <div style=" padding-right: 19px; padding-bottom: 46px;  padding-top: 13px;">
                                <div class="blood">
                                    <h3><i class="fas fa-hand-holding-heart" style="color: blue;"></i></h3>
                                </div>
                            </div>
                            <div class="val">
                                <h6>Total Blood Request</h6>
                                <?php
                            $q=$db->prepare("SELECT * FROM blood_request WHERE uname=:uname");
                            $q->bindValue('uname',$un);
                            $q->execute();
                            echo count($q->fetchAll(PDO::FETCH_OBJ));
                            ?>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card-border">
                            <div style=" padding-right: 19px; padding-bottom: 46px;  padding-top: 13px;">
                                <div class="blood">
                                    <h3><i class="fas fa-sync" style="color: blue;"></i></h3>
                                </div>
                            </div>
                            <div class="val">
                                <h6>Pending Request</h6>
                                <?php
                                $pending="Pending";
                            $q=$db->prepare("SELECT * FROM blood_request WHERE uname=:uname AND status=:pending");
                            $q->bindValue('uname',$un);
                            $q->bindValue('pending',$pending);
                            $q->execute();
                            echo count($q->fetchAll(PDO::FETCH_OBJ));
                            ?>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card-border">
                            <div style=" padding-right: 19px; padding-bottom: 46px;  padding-top: 13px;">
                                <div class="blood">
                                    <h3><i class="far fa-check-circle" style="color: blue;"></i></h3>
                                </div>
                            </div>
                            <div class="val">
                                <h6>Approved Request</h6>
                                <?php
                            $approved ="Approved";
                            $q=$db->prepare("SELECT * FROM blood_request WHERE uname=:uname AND status=:approved");
                            $q->bindValue('uname',$un);
                            $q->bindValue('approved',$approved);
                            $q->execute();
                            echo count($q->fetchAll(PDO::FETCH_OBJ));
                            ?>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card-border">
                            <div style=" padding-right: 19px; padding-bottom: 46px;  padding-top: 13px;">
                                <div class="blood">
                                    <h3><i class="far fa-times-circle" style="color: blue;"></i></h3>
                                </div>
                            </div>
                            <div class="val">
                                <h6>Rejected Request</h6>
                                <?php
                            $rejected ="Rejected";
                            $q=$db->prepare("SELECT * FROM blood_request WHERE uname=:uname AND status=:rejected");
                            $q->bindValue('uname',$un);
                            $q->bindValue('rejected',$rejected);
                            $q->execute();
                            echo count($q->fetchAll(PDO::FETCH_OBJ));
                            ?>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

        </div>






</body>

</html>
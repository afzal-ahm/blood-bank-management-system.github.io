<?php
require('C:\xampp\htdocs\BBMS\conn.php');
session_start();
$flag=" "; 
?>
<?php
$un=$_SESSION['un'];
if(!$un)
{
    
    header("Location: donor-login.php");
}
?>

<?php
    if(isset($_POST['sub']))
    {   
      $username=$_SESSION['un'];
      $p_name=$_POST['p_name'];
      $p_age=$_POST['p_age'];
      $reason=$_POST['reason'];
      $p_bgroup=$_POST['p_bgroup'];
      $p_unit=$_POST['p_unit'];
        $status="Pending";
        
        // $q=$db->prepare("UPDATE $q_uname SET `unit`=:unit,`age`=:age,`disease`=:dise ,total_request = total_request + 1 WHERE uname='$username'");

       $q=$db->prepare("INSERT INTO blood_request (uname,patient_name,patient_age,reason,bgroup,unit,status) VALUES (:uname,:p_name,:p_age,:reason,:p_bgroup,:p_unit,:status)");

        $q->bindValue('uname',$username);
        $q->bindValue('p_name',$p_name);
        $q->bindValue('p_age',$p_age);
        $q->bindValue('reason',$reason);
        $q->bindValue('p_bgroup',$p_bgroup);
        $q->bindValue('p_unit',$p_unit);
        $q->bindValue('status',$status);

        if($q->execute()){
          // echo "<script>alert('Donor Registration Successful!');</script>";
          $flag="ok";

          
      }
      else{
          // echo "Donor Registration Fail";
          $flag="not_ok";

      }
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


  <title>Donor Dahsboard</title>

  <style>
    * {
      /* box-sizing: border-box; */
      margin: 0;
      padding: 0;
      font-family: 'Oswald', sans-serif;
      font-family: 'Tiro Gurmukhi', serif;
      font-family: 'Ubuntu', sans-serif;
      /* font-size: 18px; */
      /* background-color: #24252A; */
    }

    header a {
      color: white;
      text-decoration: none;
    }

    header {
       position: fixed;
      top: 0;
      right: 0;
      left: 0;
      z-index: 1030;

      height: 50px;
      background-color: red;
      display: flex;
      justify-content: flex-end;
      align-items: center;
      padding: 10px 3%;


    }

    .conten {


      border-radius: 20px;
      background-color: white;
      max-width: 730px;
      height: 554px;
      margin: 8px auto;
      box-sizing: border-box;
      padding: 0;
      display: block;

    }

    .in {

      /* padding: -10px 14px; */
      height: 50px;
      margin: 63px 19px;

    }

    .card-cont {
      display: flex;
      flex-direction: column;
      position: relative;
    }

    .card-heading {
      background-color: black;
      padding: 20px 0;
      border-radius: 8px;
    }

    .card-heading h1 {
      color: white;
      text-align: center;
      text-transform: uppercase;
      font-size: 24px;

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
      width: 88%;
      /* background-color: #F3F5F9; */
      padding-left: 42px;
      padding-right: 42px;
      height: 695px;
      margin-top: 50px;
      margin-left: 203px;


      /* width: 1058px; */
      /* background-color: #F3F5F9; */
      /* padding: 42px; */
      background: linear-gradient(to top right, #08aeea 0%, #b721ff 100%);
    }

    .form-body {
      padding: 15px 70px;
      padding-bottom: 73px;
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

    .in-sty {
      width: 432px;
      height: 39px;
      padding: 20px;
      margin-left: 22px;
      border-radius: 7px
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

    <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark bar" style="    position: fixed;
    margin-top: 50px;">
      <a href="donor-dash.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <h3 style="margin-left: 16px;
        margin-bottom: auto;">Dashboard</h3>
      </a>
      <hr>
      <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
          <a href="donor-dash.php" class="nav-link text-white" aria-current="page">
            <i class="fas fa-home">
              <use xlink:href="#home"></use>
            </i>
            &nbsp;Home
          </a>
        </li>
        <li>
          <a href="donate-blood.php" class="nav-link text-white">
            <i class="fas fa-hand-holding-heart"></i>
            &nbsp;Donate Blood
          </a>
        </li>
        <li>
          <a href="donation-history.php" class="nav-link text-white ">
            <i class="fas fa-history"></i>&nbsp;&nbsp;Donation History
          </a>
        </li>
        <li>
          <a href="#" class="nav-link active">
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
        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1"
          data-bs-toggle="dropdown" aria-expanded="false">
          <i class="fas fa-user" width="32" height="32" class="rounded-circle me-2"></i>
          <strong>&nbsp;&nbsp;&nbsp;Donor&nbsp;</strong>
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
    <?php
    if($flag == "ok"){
    echo "<div class='alert alert-success'  role='alert' style='margin-top: 8px; '>
    <strong>Request sent!</strong>
    </div>";

//     <div id = 'alert_placeholder'><div style='margin-top: 50px;
//     margin-bottom: 0px; ' class='alert alert-success alert-dismissible fade show' role='alert'>
// Donor Registration <strong>Successful!</strong>
//     <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
//       <span aria-hidden='true'>&times;</span>
//     </button>
//   </div>

    }
    else if ($flag == "not_ok") {
        echo "<div class='alert alert-danger'  role='alert' style='margin-top: 0px;
    margin-bottom: 0px; '>
  <strong>Request is not sent!<strong>
    </div>";
    }
    ?>

      <div class="conten">
        <div class="card-cont">
          <div class="card-heading">
            <h1>Blood Request</h1>
          </div>
          <div class="card-body">

            <form method="post">
              <div class="form-body">
                <div class="in" style="margin-top: 20px;margin-left: -28px;margin-bottom: 14px;">
                  <label for="p_name" style="font-size: 18px">Patient Name</label>
                  <input type="text" name="p_name" required placeholder="Name" class="in-sty">
                </div>
                <div class="in" style="margin-left: -12px;margin-top: 36px; margin-bottom: 34px;">
                  <label for="p_age" style="font-size: 18px">Patient age</label>
                  <input type="text" name="p_age" required placeholder="Age" class="in-sty">
                </div>
                <div class="in" style="margin-top: 40px;margin-left: 15px;margin-bottom: 14px;">
                  <label for="reason" style="font-size: 18px">Reason</label>
                  <input type="text" name="reason" required placeholder="Reason" class="in-sty">
                </div>
                <select class="form-select form-select-sm" required aria-label=".form-select-sm example" style="width: 168px; display: inline; margin-left: 4px"  name="p_bgroup">
                  <option selected>Select Blood Group</option>
                  <option value="A+">A+</option>
                  <option value="B+">B+</option>
                  <option value="AB+">AB+</option>
                  <option value="O+">O+</option>
                  <option value="A-">A-</option>
                  <option value="B-">B-</option>
                  <option value="AB-">AB-</option>
                  <option value="O-">O-</option>
                </select>
                <div class="in" style="margin-left:46px;margin-top: 20px;margin-bottom: 22px;">
                  <label for="p_unit" style="font-size: 18px">Unit</label>
                  <input type="number" name="p_unit" required id="unit" placeholder="Number of Units" class="in-sty">
                </div>

                <div style=" margin-left: 54px;
                height: 6px;">
                  <input class="btn btn--radius-2 btn-danger" type="submit" value="Request" name="sub" style="width: 94px;
                  height: 47px;">
                </div>
              </div>
            </form>

          </div>
        </div>

      </div>

    </div>


</body>

</html>
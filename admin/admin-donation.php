<?php
include('C:\xampp\htdocs\BBMS\conn.php');
session_start();
$flag=" ";
?>
<?php
$un=$_SESSION['un'];
if(!$un)
{   
    header("Location: admin-login.php");
}
?>
<?php
if(isset($_POST['reject']))
{
$id=$_POST['hidd'];
$status="Rejected";
$q=$db->prepare("UPDATE `donor` SET `status`=:status WHERE sno=:id");
$q->bindValue('id',$id);
$q->bindValue('status',$status);
$q->execute();
$flag="not_ok";
}
else if(isset($_POST['approve']))
{
    $id=$_POST['hidd'];
    $status="Approved";
    $q=$db->prepare("UPDATE `donor` SET `status`=:status WHERE sno=:id");
    $q->bindValue('id',$id);
    $q->bindValue('status',$status);
    if($q->execute())
    {
        $q=$db->prepare("SELECT * FROM donor WHERE sno=:id");
        $q->bindValue('id',$id);
        $q->execute();
        $rl=$q->fetch(PDO::FETCH_OBJ);
        $unit=$rl->unit;
        $bgroup=$rl->bgroup;
        // echo "<script>alert('$bgroup');</script>";
       

        $q=$db->prepare("UPDATE `blood_stock` SET `stock`= stock + :unit WHERE bgroup=:bgroup");
        $q->bindValue('unit',$unit);
        $q->bindValue('bgroup',$bgroup);
        $q->execute();
        $flag="approve";
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

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">


  <title>Blood Donation Details</title>

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
    }

    .side-bar {
      display: flex;
    }

    .main {

      width: 88%;
      /* background-color: #F3F5F9; */
      padding-left: 42px;
      padding-right: 42px;
      
      height: 639px;
    
      margin-top: 50px;
      margin-left: 203px;
    }

    .row {
      display: flex;
      justify-content: space-between;
    }

    .col {
      height: 140px;
    
    }

    .blood {
      float: right;
    }

    .val {
      margin-left: 12px;
      margin-top: 31px;
      font-size: 24px
    }

    .card-border {
      border: 2px solid rgb(95, 102, 107);
      margin-top: 3px;
      background-color: white;
    }
  </style>

</head>

<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
    crossorigin="anonymous"></script>


  <header>


    <a href="http://localhost/BBMS/index.php" class="logo"> <i class="fas fa-heartbeat"
        style='font-size:23px;color:white'></i>
      <b style="font-size: 23px">&nbsp;Blood Bank Management</b></a>

    <nav>

      <!-- <ul class="nav__links" style="margin-top: 14px">
        <li><a href="http://localhost/BBMS/index.php"><i class="fas fa-home"></i>&nbsp;Home</i></a></li>



        <li><a href="#"><i class="fas fa-procedures"></i>&nbsp; Patient</i></a>
        </li>
        <li><a href="../donor/donor-login.php"><i class="fas fa-user"></i>&nbsp; Donor</i></a>
        </li>
        <li><a href="admin-login.php"><i class="fas fa-user-shield"></i>&nbsp; Admin</i></a>
        </li>
      </ul> -->
      </div>
    </nav>

  </header>
  <!-- side bar -->
  <div class="side-bar">

  <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark bar" style="position: fixed; margin-top: 50px;">
            <a href="admin-home.php"
                class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">

                <h3 style="margin-left: 16px;
        margin-bottom: auto;">Dashboard</h3>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
              <li class="nav-item">
                <a href="admin-home.php" class="nav-link text-white" aria-current="page">
                  <i class="fas fa-home">
                    <use xlink:href="#home"></use>
                  </i>
                  &nbsp;Home
                </a>
              </li>
              <li>
                <a href="donor-list.php" class="nav-link  text-white">
                  <i class="fas fa-user">
                    <use xlink:href="#speedometer2"></use>
                  </i>
                  &nbsp;Donor
      
      
                </a>
              </li>
              <li>
                <a href="patient-list.php" class="nav-link text-white">
                  <i class="fas fa-user-injured">
                    <use xlink:href="#table"></use>
                  </i>
                  &nbsp; Patient
                </a>
              </li>
              <li>
                <a href="admin-donation.php" class="nav-link active">
                  <i class="far fa-heart">
                    <use xlink:href="#grid"></use>
                  </i>
                  &nbsp; Donations
                </a>
              </li>
              <li>
                <a href="admin-blood-request.php" class="nav-link text-white">
                  <i class="fas fa-sync-alt">
                    <use xlink:href="#people-circle"></use>
                  </i>
                  &nbsp;Blood Requests
                </a>
              </li>
              <!-- <li>
                <a href="#" class="nav-link text-white">
                  <i class="fas fa-history">
                    <use xlink:href="#people-circle"></use>
                  </i>
                  &nbsp;Request History
                </a>
              </li> -->
              <li>
                <a href="admin-blood-stock.php" class="nav-link text-white">
                  <i class="fas fa-ambulance">
                    <use xlink:href="#people-circle"></use>
                  </i>
                  &nbsp;Blood Stock
                </a>
              </li>
            </ul>
            <hr>
            <div class="dropdown">
              <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser2"
                data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fas fa-user" width="32" height="32" class="rounded-circle me-2"></i>
                <strong>&nbsp;&nbsp;&nbsp;Admin&nbsp;</strong>
              </a>
              <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser2">
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
        <div class="cont-card" style="">
            <h2 style="text-align: center; margin-top: 36px;">BLOOD DONATION DETAILS</h2>
            <br>
            <?php
        
      if($flag=="not_ok")
        {
          echo "<div class='alert alert-danger'  role='alert' style='margin-top: 0px;
            margin-bottom: 17px; '>
            <strong>Request has been Rejected</strong>
            </div>";
        }
        else if($flag=="approve")
        {
          echo "<div class='alert alert-success'  role='alert' style='margin-top: 0px;
            margin-bottom: 17px; '>
            <strong>Request has been Approved</strong>
            </div>";
        }

     ?>
            <table class="table table-bordered" style="text-align: center;  vertical-align: middle; background-color: #F3F5F9;">
            <thead class="table-dark">
              <tr>
                <th scope="col">Donor Name</th>
                <th scope="col">Disease</th>
                <th scope="col">Age</th>
                <th scope="col">Blood Group</th>
                <th scope="col">Unit</th>
                <th scope="col">Request Date</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
      
            <?php
              $q=$db->query("SELECT * FROM donor");
              while($rl=$q->fetch(PDO::FETCH_OBJ)){
            
      
          ?>
            <tbody>
              <tr>
                <td>
                  <?= $rl->donor_name; ?>
                </td>
                <td>
                  <?= $rl->disease; ?>
                </td>
                <td>
                <?= $rl->age; ?>
                </td>
                <td>
                  <?= $rl->bgroup; ?>
                </td>
                <td>
                  <?= $rl->unit; ?>
                </td>
                <td>
                  <?= $rl->dt; ?>
                </td>
                <td>
                  <?= $rl->status; ?>
                </td>
                <td>
                <?php
                if(($rl->status)=="Pending")
                {
                ?>
                  <form action="" method="post" style="display:inline;">
                    <input type="hidden" name="hidd" value="<?= $rl->sno; ?>">
                    <input type="submit" class="btn btn--radius-2 btn-primary" style="    margin: 6px; width:112px;" value="APPROVE" name="approve">             
                  </form>
                  <form action="" method="post" style="display:inline;">
                   <input type="hidden" name="hidd" value="<?= $rl->sno; ?>">
                   <input type="submit" class="btn btn--radius-2 btn-danger" style="width:112px;" value="REJECT" name="reject">
                 </form>
                 <?php
                }
                else if(($rl->status)=="Rejected"){
                    echo "<div style='color: white; background-color: #f33232;
                '><h6>0 Unit Added To Stock</h6></div>";
                }
                else if(($rl->status)=="Approved"){
                    echo "<div style='color: white; background-color: #24c724;
                '><h6 style='margin:0;'>$rl->unit Unit Added To Stock</h6></div>";
                }
                 ?>
                </td>
                
                
              </tr>
      
            </tbody>
            <?php
                
              }
      ?>
      
      
          </table>

        </div>
      
    </div>
  </div>


</body>

</html>
<?php
include('C:\xampp\htdocs\BBMS\conn.php');
session_start();
?>
<?php
$un=$_SESSION['un'];
if(!$un)
{   
    header("Location: admin-login.php");
}
?>
<?php
if(isset($_POST['edit']) or isset($_POST['sub']))
{   if(isset($_POST['edit'])){
  $_SESSION['uniq']=$_POST['hidd'];

}
    // $id=$GLOBALS['id'];
    // echo "<script>alert('$id');</script>";
        //  echo "<pre>";
        // print_r($_POST);
        // echo "</pre>";
        if(isset($_POST['sub']))
        {   

        $id=$_POST['id'];
        // echo "<script>alert('$id');</script>";
        $uname=$_POST['un'];
        $img_loc1=$_FILES['pic']['tmp_name'];
        $img_name1=$_FILES['pic']['name'];
        // echo "<br>".$img_ext1=pathinfo($img_name1)['extension'];
        $img_des1="../uploaded image/".$img_name1;
        move_uploaded_file($img_loc1,$img_des1);
        
        $img_loc2=$_FILES['ID']['tmp_name'];
        $img_name2=$_FILES['ID']['name'];
        // echo "<br>".$img_ext2=pathinfo($img_name2)['extension'];
        $img_des2="../uploaded image/".$img_name2;
        move_uploaded_file($img_loc2,$img_des2);

        
        $name=$_POST['name'];
        $pass=$_POST['ps'];
        $gender=$_POST['gender'];
        $bgroup=$_POST['bgroup'];
        $age=$_POST['age'];
        $ht=$_POST['ht'];
        $wt=$_POST['wt'];
        $dise=$_POST['dise'];
        $add=$_POST['add'];
        $mob=$_POST['mob'];
        // echo "<pre>";
        // print_r($_POST);
        // echo  $img_des1."<br>";
        // echo $img_des2;
        // echo "</pre>";

       
        
        $q=$db->prepare("UPDATE `donor_registration` SET `uname`=:uname,`pass`=:pass,`name`=:name,`address`=:add,`age`=:age,`height`=:ht,`weight`=:wt,`disease`=:dise,`gender`=:gender,`bgroup`=:bgroup,`mno`=:mob,`profile_pic`=:img_des1,`ID`=:img_des2 WHERE sno=:id");
        $q->bindValue('uname',$uname);
        $q->bindValue('pass',$pass);
        $q->bindValue('name',$name);
        $q->bindValue('add',$add);
        $q->bindValue('age',$age);
        $q->bindValue('ht',$ht);
        $q->bindValue('wt',$wt);
        $q->bindValue('dise',$dise);
        $q->bindValue('gender',$gender);
        $q->bindValue('bgroup',$bgroup);
        $q->bindValue('mob',$mob);
        $q->bindValue('img_des1',$img_des1);
        $q->bindValue('img_des2',$img_des2);
        $q->bindValue('id',$id);
        

        if($q->execute()){
            echo "<script>alert('Donor Registration Successful!');</script>";
            header("Location: donor-list.php");
            
        }
        else{
            echo "Donor Registration Fail";
        }
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


  <title>Update Donor Details</title>

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
      /* padding-left: 42px; */
      /* padding-right: 42px; */
      
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
    .back-color {
            display:inline-block;
            height: 1633px;
            padding-top: 110px;
            width: 1060px;
            border-radius: 0px;
            background: linear-gradient(to top right, #08aeea 0%, #b721ff 100%);
        }

        .conten {


border-radius: 20px;
background-color: white;
max-width: 722px;
/* height: 670px; */
margin: 0 auto;
margin-top: -60px;
box-sizing: border-box;
padding: 0;
display: block;

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
        .form-body {
            display: flex;
            flex-direction: column;
            position: relative;
            padding: 30px 70px;
            padding-bottom: 73px;
        }
        .in {

/* padding: -10px 14px; */
height: 50px;
/* margin: 63px 19px; */
margin: 36px 19px;

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


    <a href="http://localhost/BBMS/index.php" class="logo"> <i class="fas fa-heartbeat"
        style='font-size:23px;color:white'></i>
      <b style="font-size: 23px">&nbsp;Blood Bank Management</b></a>

    <nav>

      <ul class="nav__links" style="margin-top: 14px">
        <li><a href="http://localhost/BBMS/index.php"><i class="fas fa-home"></i>&nbsp;Home</i></a></li>



        <li><a href="#"><i class="fas fa-procedures"></i>&nbsp; Patient</i></a>
        </li>
        <li><a href="../donor/donor-login.php"><i class="fas fa-user"></i>&nbsp; Donor</i></a>
        </li>
        <li><a href="admin-login.php"><i class="fas fa-user-shield"></i>&nbsp; Admin</i></a>
        </li>
      </ul>
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
                <a href="donor-list.php" class="nav-link active">
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
                <a href="admin-donation.php" class="nav-link text-white">
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
              <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
                <!-- <li><a class="dropdown-item" href="#">New project...</a></li>
                <li><a class="dropdown-item" href="#">Settings</a></li> -->
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="logout.php">Sign out</a></li>
              </ul>
            </div>
          </div>





    <!-- main content -->

    <div class="main">
    <div class="back-color">
        <div class="conten">
            <div class="card-cont">
                <div class="card-heading">
                    <h1>Update Donor Details</h1>
                </div>
                <div class="card-body" style="height: 1444px">
                <?php 

                 $id=$_SESSION['uniq'];
            //    echo "<script>alert('$id');</script>";
               
               $q=$db->query("SELECT * FROM donor_registration WHERE sno=$id");
               $rl=$q->fetch(PDO::FETCH_OBJ);
            //    echo "<script>alert('$rl->name');</script>";
               
               
               
                ?>

                    <form method="post" enctype="multipart/form-data" >
                        <div class="form-body">
                            <div class="in" style="margin-left: 82px;">
                                <label for="Name" style="font-size: 18px; margin-left: -28px">Name</label>
                                <input type="text" required name="name" placeholder="Enter name" class="in-sty" value="<?=$rl->name?>">
                            </div>
                            <div class="in">
                                <label for="username" style="font-size: 18px">Username</label>
                                <input type="text" required name="un" id="username" placeholder="Username"
                                    class="in-sty" value="<?=$rl->uname?>">
                            </div>
                            <div class="in">
                                <label for="password" style="font-size: 18px">Password</label>
                                <input type="password" required name="ps" id="password" placeholder="Password" class="in-sty">
                            </div>
                            <div class="in" style="display: inline; margin: 20px 50px">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" required type="radio" name="gender" id="inlineRadio1"
                                    value="male">
                                <label class="form-check-label" for="inlineRadio1" style="font-size: 18px">Male</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" required type="radio" name="gender" id="inlineRadio2"
                                    value="female">
                                <label class="form-check-label" for="inlineRadio2" style="font-size: 18px">Female</label>
                            </div>
                            </div>
                            <select class="form-select form-select-sm" required aria-label=".form-select-sm example" style="width: 168px; display: inline; margin-left: 50px;"  name="bgroup">
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

                              <div class="in" style="margin-left: 67px;">
                                <label for="age" style="font-size: 18px">age</label>
                                <input type="text" required name="age"  placeholder="age"
                                    class="in-sty" value="<?=$rl->age?>">
                            </div>

                            <div class="in" style="margin-left: 46px;">
                                <label for="height" style="font-size: 18px">Height</label>
                                <input type="text" required name="ht"  placeholder="Height"
                                    class="in-sty" value="<?=$rl->height?>">
                            </div>
                            <div class="in" style="margin-left: 46px;">
                                <label for="weight" style="font-size: 18px">Weight</label>
                                <input type="text" required name="wt" placeholder="Weight"
                                    class="in-sty" value="<?=$rl->weight?>">
                            </div>

                            <div class="in" style="margin-left: -19px;">
                                <label for="disease" style="font-size: 18px">Disease(if any)</label>
                                <input type="text" name="dise" required  placeholder="Disease"
                                    class="in-sty" value="<?=$rl->disease?>">
                            </div>


                            <div class="form-floating">
                            <textarea class="form-control" required placeholder="Enter Address here" id="floatingTextarea" name="add" ></textarea>
                             <label for="floatingTextarea">Address</label>
                            </div>

                            <div class="in" style="margin-left: -19px;">
                                <label for="mobile number" style="font-size: 18px;">Mobile Number</label>
                                <input type="text" name="mob" required  placeholder="Number"
                                    class="in-sty" value="<?=$rl->mno?>">
                            </div>

                            <div class="in" style="margin: 12px 0px;">
                                <label for="profile picture" required style="font-size: 18px">Profile Picture</label>
                                <input type="file" name="pic" >
                            </div>

                            <div class="in" style="margin: 5px 48px;">
                                <label for="ID proof" style="font-size: 18px">ID proof</label>
                                <input type="file" required name="ID" >
                            </div>
                            <input type="hidden" name="id" value="<?=$id?>">

                            <div style=" margin-left: 17px;
                height: 26px; margin-top: 22px;">
                                <input class="btn btn--radius-2 btn-danger" type="submit" value="Update" name="sub"
                                    style="width: 94px;
                  height: 47px;">
                            </div>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
      
    </div>
  </div>




</body>

</html>
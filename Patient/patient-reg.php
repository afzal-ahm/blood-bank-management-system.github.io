<?php
require('C:\xampp\htdocs\BBMS\conn.php');
$flag=FALSE;
?>
<?php
if(isset($_POST['sub']))
{   
    $uname=$_POST['un']; 
    $q=$db->query("SELECT * FROM patient_registration WHERE uname='$uname'");
    $rl=$q->fetch(PDO::FETCH_OBJ);
    // echo "<script>alert('$rl->uname;');</script>";
    if($rl)
    {
        $flag = "already";
    }
    else{

    

        
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
        $dise=$_POST['dise'];
        $doc=$_POST['doc'];
        $add=$_POST['add'];
        $mob=$_POST['mob'];

       

        $q=$db->prepare("INSERT INTO patient_registration (uname,pass,name,gender,bgroup,age,disease,doctor_name,address,mno,profile_pic,ID) VALUES (:uname,:pass,:name,:gender,:bgroup,:age,:dise,:doc,:add,:mob,:img_des1,:img_des2)");
        $q->bindValue('uname',$uname);
        $q->bindValue('pass',$pass);
        $q->bindValue('name',$name);
        $q->bindValue('gender',$gender);
        $q->bindValue('bgroup',$bgroup);
        $q->bindValue('age',$age);
        $q->bindValue('dise',$dise);
        $q->bindValue('doc',$doc);
        $q->bindValue('add',$add);
        $q->bindValue('mob',$mob);
        $q->bindValue('img_des1',$img_des1);
        $q->bindValue('img_des2',$img_des2);


        if($q->execute()){
            // echo "<script>alert('Donor Registration Successful!');</script>";
        
            $flag="ok";

            
        }
        else{
            // echo "<script>alert('Donor Registration Fail!');</script>";
            // echo "Donor Registration Fail";
            $flag="not_ok";
        }
    }
 }
    
?>

<!DOCTYPE html>
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


    <title>Patient Signup</title>

    <style>

        * {
            box-sizing: border-box;
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

        .back-color {
            display:inline-block;
            height: 1625px;
            padding-top: 110px;
            width: 1519px;
            border-radius: 0px;
            background: linear-gradient(to top right, #08aeea 0%, #b721ff 100%);
        }

        .conten {


            border-radius: 20px;
            background-color: white;
            max-width: 722px;
            /* height: 670px; */
            margin: 0 auto;
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



                <li><a href="patient-login.php"><i class="fas fa-procedures"></i>&nbsp; Patient</i></a>
                </li>
                <li><a href="../donor/donor-login.php"><i class="fas fa-user"></i>&nbsp; Donor</i></a>
                </li>
                <li><a href="../admin/admin-login.php"><i class="fas fa-user-shield"></i>&nbsp; Admin</i></a>
                </li>
            </ul>
            </div>
        </nav>

    </header>
    <?php
    if($flag == "ok"){
    echo "<div class='alert alert-success'  role='alert' style='margin-top: 50px;
    margin-bottom: 0px; '>
    Patient Registration is <strong>Successful!</strong>
    </div>";

    }
    else if ($flag == "not_ok") {
        echo "<div class='alert alert-danger'  role='alert' style='margin-top: 50px;
    margin-bottom: 0px; '>
    Patient Registration is <strong>fail!</strong>
    </div>";
    }
    else if($flag == "already")
    {
        echo "<div class='alert alert-danger'  role='alert' style='margin-top: 50px;
    margin-bottom: 0px; '>
    <strong>$uname</strong> username is already taken
    </div>";
    }
    ?>

    <div class="back-color">
        <div class="conten">
            <div class="card-cont">
                <div class="card-heading">
                    <h1>PATIENT SIGNUP</h1>
                </div>
                <div class="card-body" style="height: 1381px">

                    <form method="post" enctype="multipart/form-data">
                        <div class="form-body">
                            <div class="in" style="margin-left: 82px;">
                                <label for="Name" style="font-size: 18px; margin-left: -28px">Name</label>
                                <input type="text" name="name" required autofocus placeholder="Enter name" class="in-sty">
                            </div>
                            <div class="in">
                                <label for="username" style="font-size: 18px">Username</label>
                                <input type="text" required name="un" id="username" autofocus placeholder="Username"
                                    class="in-sty">
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
                            <select class="form-select form-select-sm" aria-label=".form-select-sm example" style="width: 168px; display: inline; margin-left: 50px;"  name="bgroup" required>
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
                                <input type="text" name="age" required autofocus placeholder="age"
                                    class="in-sty">
                            </div>

                            
                            <div class="in" style="margin-left: 27px;">
                                <label for="disease" style="font-size: 18px">Disease</label>
                                <input type="text" name="dise" required autofocus placeholder="Disease"
                                class="in-sty" >
                            </div>
                            <div class="in" style="margin-left: -15px;">
                                <label for="doctor" style="font-size: 18px">Doctor Name</label>
                                <input type="text" name="doc" required autofocus placeholder="Doctor Name"
                                    class="in-sty">
                            </div>
                            
                            
                            <div class="form-floating">
                                <textarea class="form-control" required placeholder="Enter Address here" id="floatingTextarea" name="add"></textarea>
                             <label for="floatingTextarea">Address</label>
                            </div>
                            
                            <div class="in" style="margin-left: -30px;">
                                <label for="mobile number" style="font-size: 18px;">Mobile Number</label>
                                <input type="text" name="mob" required autofocus placeholder="Number"
                                    class="in-sty">
                            </div>

                            <div class="in" style="margin: 12px 0px;">
                                <label for="profile picture" style="font-size: 18px">Profile Picture</label>
                                <input type="file" required name="pic" >
                            </div>

                            <div class="in" style="margin: 5px 48px;">
                                <label for="ID proof" style="font-size: 18px">ID proof</label>
                                <input type="file" required name="ID" >
                            </div>

                            <div style=" margin-left: 17px;
                height: 26px; margin-top: 22px;">
                                <input class="btn btn--radius-2 btn-danger" type="submit" value="Signup" name="sub"
                                    style="width: 94px;
                  height: 47px;">
                            </div>
                        </div>
                    </form>
                    <div style="margin-top: -13px; margin-left: 88px;">
                        Already have an account ? <a href="patient-login.php">Click here to login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>




</body>

</html>
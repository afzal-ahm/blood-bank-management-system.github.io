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
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital@1&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Neuton:ital@1&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:ital@1&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">


  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    
  


  <title>Blood Bank</title>

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

    .heading {
      text-align: center;
    }

    .b {
      display: flex;
      justify-content: center;
      padding: 20px;
    }


    .text-box {
    width: 80%;
    color: black;
    position: absolute;
    top: 55%;
    left: 21%;
    transform: translate(-50%, -50%);
    text-align: center;
    font-family: "Neuton", serif;
    line-height: 50px;
}

.text-box h1 {
    font-size: 70px;
    font-family: "Neuton", serif;
    letter-spacing: 5px;
    line-height:  50px;
    font-weight: 600; 
    margin: 0;
}

.text-box p {
    margin: 10px 0 40px;
    font-family: "Neuton", serif;
    font-size: 26px;
    color: black;
    font-weight: 300;
    padding: 10px;
    line-height: 20px;
}



#nav {
  width: 90%;
  color: black;
  position: absolute;
  top: 10%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
  font-family: "Neuton", serif;
  line-height: 50px;
}

#nav img {
  width: 150px;
  padding-left: 20px;
  padding-top: 10px;
  top: 0%;
}

#nav .header-list {
  flex: 1;
  text-align: right;
}

.header-list ul li {
  list-style: none;
  display: inline-block;
  padding: 8px 15px;
  position: relative;
}

.header-list ul li a {
  color: black;
  font-size: 22px;
  text-decoration: none;
  font-family: "Fredoka One", cursive;
}

.header-list ul li::after {
  content: "";
  height: 2px;
  background: #cd5c5c;
  display: block;
  margin: auto;
  transition: 0.5s;
  width: 0%;
}

.header-list ul li:hover::after {
  width: 100%;
}



#homevideo {
    height: auto;
    width: 100%;
    align-items: center;
    justify-content: center;
    transition: 0.5s;
}

#logo {
  position: absolute;
  top: 9%;
  left: 5%;
  transform: translate(-50%, -50%);
  text-align: center;
  font-family: "Neuton", serif;
  line-height: 30px;
  margin-bottom: 10px;
}

.hero-btn {
  border-radius: 5px;
  display: inline-block;
  text-decoration: none;
  color: black;
  border: 2px solid black;
  border-radius: 5px 20px 5px;
  padding: 12px 30px;
  font-size: 35px;
  background: transparent;
  position: relative;
  cursor: pointer;
  width: 30vh;
  letter-spacing: 3px;
  height: 12vh;
  font-family: "Patrick Hand SC", cursive;
 
}

.hero-btn:hover {
  border: 1px solid #cd5c5c;
  background: #cd5c5c;
  transition: 1s;
  font-weight: 300;
}
 

.bottom-title{
  position: relative;
    font-size: 42px;
    line-height: 1.4em;
    font-weight: 800;
    margin-bottom: 20px;
    text-align: center;
    font-family: 'Montserrat', sans-serif;

}
.sty::marker{
color:red;
}


  </style>

</head>

<body>
  <!-- botstrap  -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
    crossorigin="anonymous"></script>


  <!-- <header>


    <a href="http://localhost/BBMS/index.php" class="logo nav-color"> <i class="fas fa-heartbeat"
        style='font-size:23px;color:white'></i>
      <b style="font-size: 23px">&nbsp;Blood Bank Management</b></a>

    <nav>

      <ul class="nav__links" style="margin-top: 14px">
        <li><a href="http://localhost/BBMS/index.php" class="nav-color"><i class="fas fa-home"></i>&nbsp;Home</i></a>
        </li>

        <li><a href="patient/patient-login.php" class="nav-color"><i class="fas fa-procedures"></i>&nbsp;
            Patient</i></a>
        </li>
        <li><a href="donor\donor-login.php" class="nav-color"><i class="fas fa-user"></i>&nbsp; Donor</i></a>
        </li>
        <li><a href="admin\admin-login.php" class="nav-color"><i class="fas fa-user-shield"></i>&nbsp; Admin</i></a>
        </li>
      </ul>
      </div>
    </nav>

  </header> -->



  


  <!-- video  -->
  <video autoplay="" muted="" loop="" plays-inline="" id="homevideo"  >
    <source src="homevideo1.mp4" type="video/mp4">
  </video>

  <div id="logo"> 
    <a href="index.php"><i class="fas fa-heartbeat"
      style='font-size:70px;color:red;'></i></a>
  </div>

  
  

  <!-- header -->

  <div id="nav">
    <div class="header-list" id="headerl">
        
        <ul>
            <li><a href="http://localhost/BBMS/index.php" class="nav-color"><i class="fas fa-home"></i>&nbsp;Home</i></a></li>
            <li><a href="patient/patient-login.php" class="nav-color"><i class="fas fa-procedures"></i>&nbsp;
              Patient</i></a></li>
            <li><a href="donor\donor-login.php" class="nav-color"><i class="fas fa-user"></i>&nbsp; Donor</i></a></li>
            <li><a href="admin\admin-login.php" class="nav-color"><i class="fas fa-user-shield"></i>&nbsp; Admin</i></a></li>
        </ul>
    </div>
  </div>



  <div class="text-box">
    <h1>Start</h1>
    <h1>Saving Lives </h1>
    <p>Become a donor or request for blood And help save lives</p>
    <a href="donor/donor-red.php" class="hero-btn" style="color:black">Register</a>
  </div>


  <br>
  <br>
  <div style="color: black; text-align: center; font-family: 'Montserrat', sans-serif; font-weight: 700; font-size: 42px;">
    LEARN ABOUT DONATION
  </div>


  <div style="color: black;  font-family: 'Montserrat', sans-serif; font-weight: 700; font-size: 35px; margin-left: 24px;">
    <u style="color: #f95a7f;">Blood Group</u>
  </div>
  <P style="margin-left: 12px; font-size: 26px; font-family: 'Lato', sans-serif;">
    Blood group of any human beign will mainly fall in any one of the following groups:
  </P>
  <ol style="margin-left: 23px">
    <li class="sty" style="font-family: 'Oswald', sans-serif; font-size: 19px;">A Positive or A Negative</li>
    <li class="sty" style="font-family: 'Oswald', sans-serif; font-size: 19px;">B Positive or B Negative</li>
    <li class="sty" style="font-family: 'Oswald', sans-serif; font-size: 19px;">O positive or O Negative</li>
    <li  class="sty" style="font-family: 'Oswald', sans-serif; font-size: 19px;">AB Positive or AB Negative</li>


  </ol>
  <p style="margin-left: 12px; font-size: 26px; font-family: 'Lato', sans-serif;     color: #0066ffa3;">
    A healthy diet helps ensure a successful blood donation, and also makes you fell better!
  </p>




  

  <!-- font-family:oswald; text-align: center;
        width: 82%; -->
  

  <div class="b">

    <div>
      <img src="img/donationFact.jpg" alt="img" style="    width: 90%;
      ">
      <blockquote>
        <p style="font-family: oswald;
        text-align: center;
        width: 88%;
        font-size: 18px;
        margin-right: -217px;">After donating blood, the body works to replenish the blood loss. This stimulates
          the production of new blood cells and in turn,
          helps in maintaining good health.</p>
        <p>
        </p>
      </blockquote>
    </div>


    <div style="width: 50%;">
      <table class="table table-responsive table-bordered ">
        <tbody>
          <tr>
            <th colspan="3" style="color:white;background-color: black;">Compatible Blood Type Donors</th>
          </tr>
          <tr>
            <td><b>Blood Type</b></td>
            <td><b>Donate Blood To</b></td>
            <td><b>Receive Blood From</b></td>
          </tr>
          <tr>
            <td><span style="color: #961e1b;"><b>A+</b></span></td>
            <td>A+ AB+</td>
            <td>A+ A- O+ O-</td>
          </tr>
          <tr>
            <td><span style="color: #961e1b;"><b>O+</b></span></td>
            <td>O+ A+ B+ AB+</td>
            <td>O+ O-</td>
          </tr>
          <tr>
            <td><span style="color: #961e1b;"><b>B+</b></span></td>
            <td>B+ AB+</td>
            <td>B+ B- O+ O-</td>
          </tr>
          <tr>
            <td><span style="color: #961e1b;"><b>AB+</b></span></td>
            <td>AB+</td>
            <td>Everyone</td>
          </tr>
          <tr>
            <td><span style="color: #961e1b;"><b>A-</b></span></td>
            <td>A+ A- AB+ AB-</td>
            <td>A- O-</td>
          </tr>
          <tr>
            <td><span style="color: #961e1b;"><b>O-</b></span></td>
            <td>Everyone</td>
            <td>O-</td>
          </tr>
          <tr>
            <td><span style="color: #961e1b;"><b>B-</b></span></td>
            <td>B+ B- AB+ AB-</td>
            <td>B- O-</td>
          </tr>
          <tr>
            <td><span style="color: #961e1b;"><b>AB-</b></span></td>
            <td>AB+ AB-</td>
            <td>AB- A- B- O-</td>
          </tr>
        </tbody>
      </table>
    </div>

  </div>



  <div style="color: black;  font-family: 'Montserrat', sans-serif; font-weight: 700; font-size: 35px; margin-left: 24px;">
    <u style="color: #f95a7f;">UNIVERSAL DONORS AND RECIPIENTS</u>
  </div>

  <p style="margin-left: 12px; font-size: 26px; font-family: 'Lato', sans-serif;     font-weight: 600; margin: 14px 33px">
    The most common blood type is O, followed by type A. Type O individuals are often called <b>"UNIVERSAL DONOR"</b> since their blood can be tranfused into persons with any blood type. Those with type AB blood are called <b>"UNIVERSAL RECIPIENTS"</b> because they can receive blood of any type.
  </p>






  

  <!-- <div style="color: black; text-align: center; font-family: 'Montserrat', sans-serif; font-weight: 700; font-size: 42px;">Height And Weight Requerments for <br>Young Donors (16 - 18 Years old) </div> -->
  
  <!-- <img src="img/female-h-w.png" width="1240px">
  <img src="img/male-h-w.png"> -->


     <!-- slider  -->
  <!-- <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" style="margin-top:50px;">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="slide-1.jpg" height="530px" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="slide-2.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="slide-3.png" height="530px" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/doctor-donate.jpg" height="530px" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div> -->



  <!-- footer  -->
  
  <div class="container my-0" style="padding: 0; max-width: 1520px;">

    <footer class="text-center text-lg-start" style="background-color: rgb(34, 39, 48);">
      <div class="container d-flex justify-content-center py-3" style="padding-bottom: 0rem!important;">
        <button type="button" class="btn  btn-lg btn-floating mx-2 border-0 " >
          <i class="fab fa-facebook-messenger" style="color:white; font-size:24px;  "></i>
        </button>
        <button type="button" class="btn  btn-lg btn-floating mx-2 border-0" >
          <i class="fab fa-youtube" style="color:white; font-size:24px;"></i>
        </button>
        <button type="button" class="btn  btn-lg btn-floating mx-2 border-0" >
          <i class="fab fa-instagram" style="color:white; font-size:24px;"></i>
        </button>
        <button type="button" class="btn  btn-lg btn-floating mx-2 border-0" >
          <i class="fab fa-twitter" style="color:white; font-size:24px;"></i>
        </button>
      </div>
      
      <div class="bottom-title" style="color: white; margin:0;">Blood Bank Managment System</div>
      
      <!-- Copyright -->
      <div class="text-center text-white p-3" style="background-color: rgb(34, 39, 48); font-family: 'Montserrat', sans-serif;">
        © 2022 Copyright<br > Contact here: afzal88588@gmail.com<br>
        <div style="color:white; font-family: 'Montserrat', sans-serif; letter-spacing: 1px;">Design & Develop By :  <a href="#" style=" text-decoration: none;
          cursor: pointer;
          color: #e45b1f"> Richa, Afzal, Abhishek </a></div>
         
      </div>
      <!-- Copyright -->
    </footer>
    
  </div>
  <!-- End of .container -->


</body>

</html>
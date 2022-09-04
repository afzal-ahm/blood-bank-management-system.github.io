<?php
include('C:\xampp\htdocs\BBMS\conn.php');
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Out of Stoke Blood list</title>
  </head>
  <body>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->

    <?php
    $un=$_SESSION['un'];
    if(!$un)
    {
        header("Location:index.php");
    }
    ?>


<h1>Out of Stoke Blood list</h1>

<!--TABLE--> <div class="container">
<table class="table mx-4 my-4 ">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Qty</th>
    </tr>
  </thead>



  <tbody>
    <tr>
    <?php
    $q=$db->query("SELECT * FROM donor_registration WHERE bgroup='A+'");
    $re = $row=$q->rowcount();
       if($re==0)
       {
    ?>
        <td>A+</td>
        <td>
          <?php 
  
         echo $re;
          ?>
        </td>  
    <?php
       }
    ?>
      
    </tr>

    <tr>
    <?php
    $q=$db->query("SELECT * FROM donor_registration WHERE bgroup='A-'");
    $re = $row=$q->rowcount();
       if($re==0)
       {
    ?>
        <td>A-</td>
        <td>
          <?php 
  
         echo $re;
          ?>
        </td>  
    <?php
       }
    ?>
      
    </tr>

    <tr>
    <?php
    $q=$db->query("SELECT * FROM donor_registration WHERE bgroup='B+'");
    $re = $row=$q->rowcount();
       if($re==0)
       {
    ?>
        <td>B+</td>
        <td>
          <?php 
  
         echo $re;
          ?>
        </td>  
    <?php
       }
    ?>
      
    </tr>

    <tr>
    <?php
    $q=$db->query("SELECT * FROM donor_registration WHERE bgroup='B-'");
    $re = $row=$q->rowcount();
       if($re==0)
       {
    ?>
        <td>B-</td>
        <td>
          <?php 
  
         echo $re;
          ?>
        </td>  
    <?php
       }
    ?>
      
    </tr>

    <tr>
    <?php
    $q=$db->query("SELECT * FROM donor_registration WHERE bgroup='AB+'");
    $re = $row=$q->rowcount();
       if($re==0)
       {
    ?>
        <td>AB+</td>
        <td>
          <?php 
  
         echo $re;
          ?>
        </td>  
    <?php
       }
    ?>
      
    </tr>

    <tr>
    <?php
    $q=$db->query("SELECT * FROM donor_registration WHERE bgroup='AB-'");
    $re = $row=$q->rowcount();
       if($re==0)
       {
    ?>
        <td>AB-</td>
        <td>
          <?php 
  
         echo $re;
          ?>
        </td>  
    <?php
       }
    ?>
      
    </tr>

    <tr>
    <?php
    $q=$db->query("SELECT * FROM donor_registration WHERE bgroup='O+'");
    $re = $row=$q->rowcount();
       if($re==0)
       {
    ?>
        <td>O+</td>
        <td>
          <?php 
  
         echo $re;
          ?>
        </td>  
    <?php
       }
    ?>
      
    </tr>

    <tr>
    <?php
    $q=$db->query("SELECT * FROM donor_registration WHERE bgroup='O-'");
    $re = $row=$q->rowcount();
       if($re==0)
       {
    ?>
        <td>O-</td>
        <td>
          <?php 
  
         echo $re;
          ?>
        </td>  
    <?php
       }
    ?>
      
    </tr>


    
    
  </tbody>
     
  
</table>
</div>







  </body>
</html>
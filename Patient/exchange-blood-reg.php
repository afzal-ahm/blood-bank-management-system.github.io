<?php
include('conn.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exchange Registration</title>
</head>
<body>
<?php
    $un=$_SESSION['un'];
    if(!$un)
    {
        header("Location:index.php");
    }
    ?>
    <h1>Exchange Registration</h1>
    
    <form action="" method="post">
    
        <input type="text" name="name" placeholder="Enter name" ><br>
        <input type="text" name="fname" placeholder="Enter Father's name" ><br>
        <textarea name="address" ></textarea><br>
        <input type="text" name="city" placeholder="Enter city" ><br>
        <input type="text" name="age" placeholder="Enter age"><br>
        Male<input type="radio" name="gender" value="male"><br>
       Female <input type="radio" name="gender" value="female"><br>

       Select blood group <select name="s_bgroup">
                <option>A+</option>
                <option>A-</option>
                <option>B+</option>
                <option>B-</option>
                <option>O+</option>
                <option>O-</option>
                <option>AB+</option>
                <option>AB-</option>
            </select><br>

            exchange blood group <select name="e_bgroup">
                <option>A+</option>
                <option>A-</option>
                <option>B+</option>
                <option>B-</option>
                <option>O+</option>
                <option>O-</option>
                <option>AB+</option>
                <option>AB-</option>
            </select><br>
        <input type="email" name="email" placeholder="Enter E-Mail"><br>
        <input type="text" name="mno" placeholder="Enter mobile No."><br>
        <input type="submit" value="Register" name="sub">

    </form>

    <?php
        if(isset($_POST['sub']))
        {   
          //print_r($_POST);

            $name=$_POST['name'];
            $fname=$_POST['fname'];
            $address=$_POST['address'];
            $city=$_POST['city'];
            $age=$_POST['age'];
            $gender=$_POST['gender'];
            $s_bgroup=$_POST['s_bgroup'];
            $e_bgroup=$_POST['e_bgroup'];
            $email=$_POST['email'];
            $mno=$_POST['mno'];  
        
            $q=$db->prepare("SELECT * FROM donor_registration WHERE bgroup='$s_bgroup'");
            $q->execute();
           $rl=$q->fetchALL(PDO::FETCH_ASSOC);
       
           $coun=count($rl);
    
           if(!$coun)
          { 
              echo "<script>alert('$s_bgroup Blood is not available');</script>";
          }
          else
          { 
              // echo "<pre>";
              // print_r($rl);

              $sr=$rl[0]["sno"];

               // echo $sr;
               $query="DELETE FROM `donor_registration` WHERE `donor_registration`.`sno` = '$sr'
               ";

                $up=$db->prepare($query);
                

                if($up->execute()){
                  echo "Delete Successful!<br>";
                }
                else{
                  echo "Delete Unsuccessfull!<br>";
                }

                $query = "INSERT INTO donor_registration (name,fname,address,city,age,gender,bgroup,email,mno) VALUES (:name,:fname,:address,:city,:age,:gender,:e_bgroup,:email,:mno)";

                $u=$db->prepare($query);

                $u->bindValue('name',$name);
                $u->bindValue('fname',$fname);
                $u->bindValue('address',$address);
                $u->bindValue('city',$city);
                $u->bindValue('age',$age);
                $u->bindValue('gender',$gender);
                $u->bindValue('e_bgroup',$e_bgroup);
                $u->bindValue('email',$email);
                $u->bindValue('mno',$mno);
    
                if($u->execute()){
                  echo "Insert Successful!<br>";
                }
                else{
                  echo "Insert Unsuccessfull!<br>";
                }



          }




          



        }
        
    ?>


</body>
</html>
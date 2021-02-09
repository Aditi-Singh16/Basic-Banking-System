<?php
// $str1=array();
// $str2=array();
$url =  "//{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";

$escaped_url = htmlspecialchars( $url, ENT_QUOTES, 'UTF-8' );
// echo '<a href="' . $escaped_url . '">' . $escaped_url . '</a>';
$str1= explode("=",$escaped_url);
$str2=explode("%20",$str1[1]);
$cname=$str2[0]." ".$str2[1];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer Money</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">  
    <style>
      .bottomwave1{
        position:absolute;
        bottom :0em
      }
      .followus{
        z-index:1;
        position: absolute;
        right: 5%;
        left: 90%;
        bottom:1em;
      }
      @media only screen and (min-width: 600px) {
        .bottomwave1{
        position:absolute;
        bottom :-30em
      }
      .followus{
        z-index:1;
        position: absolute;
        right: 5%;
        left: 90%;
        bottom:-30em;
      }
      }
      .container{
        width: 800px;
        height: 450px;
        background-color: white;
        border-radius:20px
      }
      .card{
        width:267px;
        padding:25px;
        border:none;
      }
      .round {
        z-index:1;
        border-radius: 50%;
        padding-left:20px;
        padding-right:20px
      }
        .topcurve{
        position: absolute;
        margin: auto;
        top: 0;
        right: 0;
        left: 0;
        width: 267px;
        height:80px;
        background-color: #4770f5;
      }
      hr.partition{
        border: 1px solid #4770f5;
      }
    </style> 
  </head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.14.0/dist/sweetalert2.all.min.js"></script>
    <script src="https://kit.fontawesome.com/14f5cf4f5a.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <nav class="navbar navbar-expand-lg ">
        <ul class="navbar-nav">
        <li>
            <a href="#"><i class="fa fa-university fa-3x" aria-hidden="true"></i></a>
          </li>
          <li>
            <h3 class="p-3" style="color:white">UBO</h3>
          </li>
          <li class="nav-item active p-2">
            <a class="nav-link" href="./index.html">Home</a>
          </li>
          <li class="nav-item p-2">
            <a class="nav-link" href="./Customer.php">View Customers</a>
          </li>
       </ul>
    </nav>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#4770f5" fill-opacity="1" d="M0,192L40,213.3C80,235,160,277,240,277.3C320,277,400,235,480,202.7C560,171,640,149,720,133.3C800,117,880,107,960,117.3C1040,128,1120,160,1200,192C1280,224,1360,256,1400,272L1440,288L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z"></path></svg>
    <div class="container container-fluid d-flex justify-content-around">
      <div class="card">
        <div class="topcurve"></div>
          <img
            class="round"
            src="./images/6.PNG"
            alt="user"
        />
        <hr class="partition">
        <h5>Name:</h5><p id="cardname"></p>
        <h5>Email:</h5><p id="cardmail"></p>
        <h5>Current Balance:</h5><p id="cardbal"></p>
      </div>
      <form action="<?php echo $escaped_url; ?>" onsubmit = "return myValidation()" name="transeferForm" method="post">
        <h3 style="text-align:center">Transfer Money</h3>
        <div class="form-group">
          <label for="sname">Senders Name:</label>
          <input id="sname" type ="text" name="sname" class="form-control" required readonly><br>
        </div>
        <div class="form-group">
          <label for ="amt">Amount:</label>
          <input id="amt"  type ="text" name="amt" class="form-control" required>
          <br>
        </div>
        <div class="form-group">
          <label for="rname">Receivers Name:</label>
          <input type ="text" name="rname" class="form-control" required>
        </div>
        <button type="submit" id="sub" class="btn btn-primary">Submit</button>
      </form>
      <div class="image-fluid">
        <img src="./images/5.PNG">
      </div>
    </div>
    <svg class="bottomwave1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#4770f5" fill-opacity="1" d="M0,96L60,96C120,96,240,96,360,101.3C480,107,600,117,720,128C840,139,960,149,1080,133.3C1200,117,1320,75,1380,53.3L1440,32L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg>
    <section class="footer">
        <div class="followus"> 
          <ul class="list-unstyled ">
            <li class="p-1">
              <a href="#!" ><i style="box-shadow:1px 2px 1px rgba(64, 58, 77, 0.4);border-radius:50%;background-color:white;color: #3B5998" class="fab fa-facebook fa-2x" ></i></a>
            </li>
            <li class="p-1">
              <a href="#!" ><img style="box-shadow:1px 2px 1px rgba(64, 58, 77, 0.4);width: 30px;height: 30px;" src="./images/7.PNG"/></a>
            </li>
            <li class="p-1">
              <a href="#!" ><img  style="box-shadow:1px 2px 1px rgba(64, 58, 77, 0.4);width: 30px;height: 30px;" src="./images/8.PNG"/></a>
            </li>
          </ul>
        </div>
      </section>
  </body>
</html>
<?php

  if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $sname=$_POST['sname'];
    $rname=$_POST['rname'];
    $amt=$_POST['amt'];
    $validreceiver=false;
    $suffbal = false;
    include 'conn.php';
    $rBal=0;
    $uprBal=0;
        
    // Checking for connections 
    if(!$conn){
      die("Sorry we failed to connect: ". mysqli_connect_error());
    }else{ 


      $sql1 = "SELECT `CurrentBalance` FROM `customers` WHERE `Name`= '$sname'";
      $result1 =$conn->query($sql1); 
      while($rows=$result1->fetch_assoc()){
        $sbal=$rows['CurrentBalance'];
        if($sbal-$amt<0){
          $suffbal=false;

          $upsbal=$sbal;
        }else{
          $suffbal=true;

          $upsbal=$sbal-$amt;
        }

      }
      $sql2 = "SELECT `CurrentBalance` FROM `customers` WHERE `Name`= '$rname'";
      $result2 = $conn->query($sql2);
      while($rows = $result2->fetch_assoc()){
        $rBal=$rows['CurrentBalance'];
        $validreceiver=true;
      }
      if($suffbal && $validreceiver){
        $uprBal=$rBal+$amt;

      }
      else{
        $uprBal=$rBal;
  
      }
      if(!$validreceiver && !$suffbal){
        echo '<script>
          Swal.fire({
            icon: "error",
            title: "Oops :(",
            text: "Please enter valid name to proceed ,also you have insufficient balance",
        })
        </script>';
      }else if(!$validreceiver){
        echo '<script>
          Swal.fire({
          icon: "error",
          title: "Oops :(",
          text: "Please enter valid name to proceed ",
        })
        </script>';
      }else if(!$suffbal){
        echo '<script>
          Swal.fire({
            icon: "error",
            title: "Oops :(",
            text: "Your balance is insufficient",
          })
        </script>';
      }else{
        $sql3="UPDATE `customers` SET `CurrentBalance`=$uprBal WHERE `Name`='$rname'";
        $result3=$conn->query($sql3);

        $sql4="UPDATE `customers` SET `CurrentBalance`=$upsbal WHERE `Name`='$sname'";
        $result4=$conn->query($sql4);

        echo '<script>
          Swal.fire({
            icon: "success",
            title: "Transaction Successful",
          })
        </script>';
      }

      
      $conn->close();  
    }
  }
  include 'conn.php';
  $sql6 = "SELECT `CurrentBalance`,`Email` FROM `customers` WHERE `Name`= '$cname'";
  $result6 =$conn->query($sql6); 
  while($rows = $result6->fetch_assoc()){
    $cbal=$rows['CurrentBalance'];
    $cmail=$rows['Email'];
  }

?>
<script src="./app.js"></script>
<script>
  var  x = document.getElementById("cardname");
  var y = document.getElementById("cardbal");
  var z= document.getElementById("cardmail");
  x.innerHTML = "<?php echo $cname ; ?>";
  y.innerHTML = "<?php echo $cbal ;?>";
  z.innerHTML = "<?php echo $cmail ; ?>";
</script>

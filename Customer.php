<?php 
  
    // Username is root 
    include 'conn.php';
    
    // Checking for connections 
    if (!$conn){
        die("Sorry we failed to connect: ". mysqli_connect_error());
    }else{ 

        $sql = "SELECT * FROM `customers`";
        //$result = mysqli_query($conn, $sql);
        $result =$conn->query($sql); 
        $conn->close();  
    }
?> 
<!DOCTYPE html> 
<html lang="en"> 
  
<head> 
    <meta charset="UTF-8"> 
    <title>Cutomers Detail</title> 
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
        bottom :-40em
      }
      .followus{
        z-index:1;
        position: absolute;
        right: 5%;
        left: 90%;
        bottom:-40em;
      }
      }
    </style> 
</head> 
  
<body> 
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
    <section> 
        <h1>Customers</h1> 
        <!-- TABLE CONSTRUCTION--> 
        <div class="table-responsive">
        <table> 
            <tr> 
                <th>id</th> 
                <th>Name</th> 
                <th>Email</th> 
                <th>Current Balance</th>
                <th>Date</th> 
                <th>Transfer Money</th>
            </tr> 
            <!-- PHP CODE TO FETCH DATA FROM ROWS--> 
            <?php   // LOOP TILL END OF DATA  
                while($rows=$result->fetch_assoc()) 
                { 
             ?> 
            <tr> 
                <!--FETCHING DATA FROM EACH  
                    ROW OF EVERY COLUMN--> 
                <td><?php echo $rows['id'];?></td> 
                <td><?php echo $rows['Name'];?></td> 
                <td><?php echo $rows['Email'];?></td> 
                <td><?php echo $rows['CurrentBalance'];?></td>
                <td><?php echo $rows['Date'];?></td>
                <td><a href="./Transfer.php?Name=<?php  echo $rows['Name']; ?>"><i class="fa fa-exchange" aria-hidden="true"></i>  <i class="fa fa-money" aria-hidden="true"></i></a></td>  
            </tr> 
            <?php 
                } 
             ?> 
        </table> 
        </div>
    </section> 
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
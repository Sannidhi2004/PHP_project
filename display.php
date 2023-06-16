<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    
</head>
<body>
    <div class="container">
    
        <img src="TCSC logo.jpg" alt="" width="100%", height="200px" >
        <h1 align="center">
            Admission form 
        </h1>

        <br>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>uid</th>
                <th>Firstname</th>
                
            </tr>
        </thead>
        <tbody>
          <?php
         
           $con= new mysqli("Localhost","root","","phpadmission");
           if($con->connect_error) {
            echo"Failed to connect to MySQL:" .$con->connect_error;
            exit();
        }

        $sql="select `uid`,`Firstname`,`Lastname`from `studentdata` where 1";
        $result=mysqli_query($con,$sql);
        
        while($row=mysqli_fetch_array($result)){
            
            echo'<tr>';
            $uid=$row['uid'];

            
            echo "<td>".$row['Firstname']."".$row['Lastname']."</td>";
            echo "<td><a href=details.php?uid='$uid'>Click</a> </td>";
            echo'</tr>';

        }


 
        ?>

        </tbody>
    </table>

    <script src=https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="main.js"></script>
   
   
    
</body>
</html>
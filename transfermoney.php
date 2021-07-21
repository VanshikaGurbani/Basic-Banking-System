<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>Transfer Money</title>
    
    <style type="text/css">
      button{
        transition: 1.5s;
      }
      button:hover{
        background-color:#616C6F;
        color: white;
      }
    </style>
</head>

<body style="background-color : #3c5186;">
<?php
    include 'config.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn,$sql);
?>

<?php
  include 'navbar.php';
?>
<div class="container">
        <h2 class="text-center pt-4" style="color : #E8F1F5; font-size:40px;">Money Transfer</h2>
        <br>
            <div class="row">
                <div class="col">
                    <div class="table-responsive-sm">
                    <table class="table table-hover table-sm table-striped table-condensed table-bordered" style="border-color:black;">
                        <thead style="color : #E8F1F5;">
                            <tr>
                            <th scope="col" class="text-center py-2" style="font-size:25px;">Id</th>
                            <th scope="col" class="text-center py-2" style="font-size:25px;">Name</th>
                            <th scope="col" class="text-center py-2" style="font-size:25px;">E-Mail</th>
                            <th scope="col" class="text-center py-2" style="font-size:25px;">Balance</th>
                            <th scope="col" class="text-center py-2" style="font-size:25px;">Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr style="color : #E8F1F5;">
                        <td class="py-2" align="center" style="font-size:20px;"><?php echo $rows['id'] ?></td>
                        <td class="py-2" align="center" style="font-size:20px;"><?php echo $rows['name']?></td>
                        <td class="py-2" align="center" style="font-size:20px;"><?php echo $rows['email']?></td>
                        <td class="py-2" align="center" style="font-size:20px;"><?php echo $rows['balance']?></td>
                        <td align="center">
                            <a href="selecteduserdetail.php?id= <?php echo $rows['id'] ;?>"> 
                                <button type="button" class="btn" style="background-color : #E8F1F5 ; color: #3c5186; text-align: center;">
                                    <strong>Transact</strong>
                                </button>  
                            </a>
                        </td> 
                    </tr>
                <?php
                    }
                ?>
            
                        </tbody>
                    </table>
                    </div>
                </div>
            </div> 
         </div>
         <br>
<br>
         <hr style="height:3px; color:#E8F1F5; background-color:#E8F1F5;">
         <footer class="text-center py-2" style="background-color: #3c5186; color:#E8F1F5;">
            <p>&copy 2021. Made by <b>Vanshika Gurbani</b> <br>The Sparks Foundation</p>
        </footer>
         <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 
</body>
</html>
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

    <link rel="stylesheet" type="text/css" href="css/table.css">
    <title>Transaction History</title>
</head>

<body style="background-color : #3c5186;">

<?php
  include 'navbar.php';
?>

	<div class="container">
        <h2 class="text-center pt-4" style="color : #E8F1F5;">Transaction History</h2>
        
       <br>
       <div class="table-responsive-sm">
    <table class="table table-hover table-striped table-condensed table-bordered">
        <thead style="color : #E8F1F5;">
            <tr>
                <th class="text-center" style="font-size:25px;">S.No.</th>
                <th class="text-center" style="font-size:25px;">Sender</th>
                <th class="text-center" style="font-size:25px;">Receiver</th>
                <th class="text-center" style="font-size:25px;">Amount</th>
                <th class="text-center" style="font-size:25px;">Date & Time</th>
            </tr>
        </thead>
        <tbody>
        <?php

            include 'config.php';

            $sql ="select * from transaction";

            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_assoc($query))
            {
        ?>

            <tr style="color : #E8F1F5;">
            <td class="py-2" style="font-size:20px;"><?php echo $rows['sno']; ?></td>
            <td class="py-2" style="font-size:20px;"><?php echo $rows['sender']; ?></td>
            <td class="py-2" style="font-size:20px;"><?php echo $rows['receiver']; ?></td>
            <td class="py-2" style="font-size:20px;"><?php echo $rows['balance']; ?> </td>
            <td class="py-2" style="font-size:20px;"><?php echo $rows['datetime']; ?> </td>
                
        <?php
            }

        ?>
        </tbody>
    </table>

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
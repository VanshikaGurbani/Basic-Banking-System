<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/styleNew.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>Basic Banking System</title>
    <style>
        .nav-link{
            font-size:20px;
        }
        @media screen and (max-width: 800px) {
        .nav-link {
            font-size: 15px;
        }
        }
    </style>
</head>

<body style="background-color: #3c5186;">
    <?php
    include 'navbar.php';
    ?>
    <div>
        <img src="img/bank.jpg" height="650rem">
    </div>
        
    <div class="card-container">
    <section class="func_card">
            <a href="createuser.php" class="func_link">Create User</a>
        </section>
 
        <section class="func_card">
            <a href="transfermoney.php" class="func_link">Make Transaction</a>
        </section>

        <section class="func_card">
            <a href="transactionhistory.php" class="func_link">
              <!-- <img src="img/history.png" > -->
              History
            </a>
        </section>
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
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Welcome to aDiscuss - Heaven for Programmers</title>
</head>

<body>
    <?php include 'partial/_dbconnect.php';?>
    <?php include 'partial/_header.php';?>
    <div class="container my-4">
        <h2 class="text-center">Contact Us</h2>
        <form action="<?php $_SERVER["REQUEST_URI"]?>" method="POST">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name"
                    placeholder="Enter your Name according to your IC or Passport">
            </div>

            <div class="form-group">
                <label for="phone">Contact No</label>
                <input type="number" class="form-control" id="phone" name="phone"
                    placeholder="Enter your phone number with country code">
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Email address</label>
                <input type="email" class="form-control" id="contactEmmail" name="contactEmmail" placeholder="name@example.com">
            </div>

            <div class="form-group">
                <label for="option">Select your QUery Type</label>
                <select class="form-control" id="option" name="option">
                    <option>Default</option>
                    <option>Web Development</option>
                    <option>Java Programming</option>
                    <option>Web Programming with Python</option>
                    <option>Back-End Development with Php</option>
                    <option>Bootstrap Framework</option>
                </select>
            </div>
            <div class="form-group">
                <label for="concern">Eleborate Your Concern</label>
                <textarea class="form-control" id="concern" name="concern" rows="3"></textarea>
            </div>
            <button class="btn btn-success">Submit</button>
        </form>
    </div>
    <?php include 'partial/_footer.php';?>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>
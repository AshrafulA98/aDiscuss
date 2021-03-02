<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style>
    #ques {
        min-height: 433px;
    }
    </style>

    <title>Welcome to aDiscuss - Heaven for Programmers</title>
</head>

<body>
    <?php include 'partial/_dbconnect.php';?>
    <?php include 'partial/_header.php';?>

    <?php
        $id= $_GET['cateid'];
        $sql = "SELECT * FROM `categories` WHERE category_id ='$id'";
        $result = mysqli_query($conn, $sql);
        while($row= mysqli_fetch_assoc($result)){
            $cateName= $row['category_name'];
            $cateDesc= $row['category_desc'];
        }
    ?>

    <?php
    $showAlert = false;
    $method = $_SERVER['REQUEST_METHOD'];
    if($method=='POST'){
        // Insert the therad into database
        $th_title = $_POST['title'];
        $th_desc = $_POST['desc'];
        $th_title = str_replace("<","&lt",$th_title);
        $th_title = str_replace("<","&gt",$th_title);

        $th_desc = str_replace("<","&lt",$th_desc);
        $th_desc = str_replace("<","&gt",$th_desc);
        $user= $_POST["user_id"];
        $sql = "INSERT INTO `therads` (`therad_title`,`therad_desc`, `thered_cate_id`, `therad_user_id`) VALUES ('$th_title', '$th_desc', '$id', ' $user')";
        $result = mysqli_query($conn, $sql);
        $showAlert = true;

        if($showAlert){
            echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Congrats!</strong> Your therad has been added! wait for the community to the response.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
               </div>';
        }

    }
    ?>

    <div class="container my-4">
        <div class="jumbotron">
            <h1 class="display-4">Welcome to <?php echo $cateName; ?> Forums</h1>
            <p class="lead"><?php echo $cateDesc; ?></p>
            <hr class="my-4">
            <p>This is peer to peer forum to sharing knowledge with each other</p>
            <p>
            <ul>
                <li>No Spam / Advertising / Self-promote in the forums.</li>
                <li>Do not post copyright-infringing material.</li>
                <li>Do not PM users asking for help.</li>
                <li>Do not cross post questions.</li>
                <li>Remain respectful of other members at all times.</li>
            </ul>
            </p>
            <a class="btn btn-success btn-lg" href="#" role="button">Learn more</a>
        </div>
    </div>

    <!-- form to ask the Question  -->
    <?php
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
    echo '<div class="container">
        <h2 class="py-2">Start a Discussion</h2>
        <form action="'.$_SERVER["REQUEST_URI"].'" method="post">
            <div class="form-group">
                <label for="title"><strong>Therad Title</strong></label>
                <input type="text" class="form-control" id="title" name="title">
                <small id="emailHelp" class="form-text text-muted">Keep your title as short as crisp</small>
            </div>
            <input type="hidden" name="user_id" value="'.$_SESSION["user_id"].'">
            <div class="form-group">
                <label for="desc"><strong>Elaborate Your Concern</strong></label>
                <textarea class="form-control" id="desc" name="desc" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-success">Post</button>
        </form>

    </div>';
    }

    else{
        echo'
        <div class="container">
        <h2 class="py-2">Start a Discussion</h2>
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4">You are not Logged in.</h1>
                <p class="lead"> Please Login or Signup to start a Discussion.</p>
            </div>
            </div>
        </div>   
        ';
    }

    ?>

    <!-- ends of fotm -->

    <!-- conatiner for Browsing the Question  -->

    <div class="container" id="ques">
        <h2 class="py-4">Browse Question</h2>
        <!-- Fetch the therad from database -->
        <?php
        $id= $_GET['cateid'];
        $sql = "SELECT * FROM `therads` WHERE thered_cate_id ='$id'";
        $result = mysqli_query($conn, $sql);
        $noResult = true;
        while($row= mysqli_fetch_assoc($result)){
            $noResult = false;
            $th_id = $row['therad_id'];
            $title = $row['therad_title'];
            $desc = $row['therad_desc'];
            $th_time = $row['timestamp'];
            
            $th_user = $row['therad_user_id'];
            $sql2 = "SELECT user_name FROM `users` WHERE user_id= '$th_user'";
            $result2 = mysqli_query($conn, $sql2);
            $row2 = mysqli_fetch_assoc($result2);
            $name = $row2['user_name'];

            echo '
            <div class="media my-3">
                <img src="user.png" width="34px" class="mr-3" alt="...">
                <div class="media-body">'.
                    '<h5 class="mt-0"><a href="therad.php?theradid='.$th_id.'">'.$title.'</a></h5>
                    '.$desc.' </div>'.'<p class="font-weight-bold my-0 ">Asked by: '.$name.'  at '.$th_time.' </p>'.
            '</div>';

    }
    if($noResult){
        echo'<div class="jumbotron jumbotron-fluid">
        <div class="container">
          <h1 class="display-4">No Therads Found</h1>
          <p class="lead">Be the Frist Person by Ask a Question</p>
        </div>
      </div>';
    }
    ?>
    </div>

    <!-- Question container ends here  -->



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
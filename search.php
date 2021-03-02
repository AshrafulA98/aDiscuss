<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
    #ques {
        min-height: 100vh;
    }
    </style>

    <title>Welcome to iDiscuss- Heaven for codders</title>
</head>

<body>

    <?php include 'partial/_dbconnect.php';?>
    <?php include 'partial/_header.php';?>

    <div class="container my-3" id="ques">
        <h1 class="py-3">Search result for <em>"<?php echo $_GET['search']?>"</em></h1>


        <?php
        $noResult = true;
        $query= $_GET['search'];
        $sql = "select * from therads where match (therad_title,therad_desc) against (' $query')";
        $result = mysqli_query($conn, $sql);
        while($row= mysqli_fetch_assoc($result)){
            $noResult = false;
            $th_id= $row['therad_id'];
            $title= $row['therad_title'];
            $desc= $row['therad_desc'];
            $url = "therad.php?theradid=". $th_id;
            // Display the search result 

            echo'<div class="result">
            <h3><a href="'.$url.'" class="text-dark">'.$title.'</a></h3>
            <p>'.$desc.'</p>
            </div>';
        }

        if($noResult){
            echo'<div class="jumbotron jumbotron-fluid">
            <div class="container">
              <h1 class="display-4">No Results Found</h1>
              <p class="lead">Suggestions:
              <ul>
                              <li>Make sure that all words are spelled correctly.</li>
                              <li>Try different keywords.</li>
                              <li>Try more general keywords.</li>
                              <li>Try fewer keywords.</li>
              </ul>                
            </p>
            </div>
          </div>';
        }
    ?>
    </div>


    <?php include'partial/_footer.php'?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>
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
        min-height: 433px;
    }
    </style>

    <title>Welcome to iDiscuss- Heaven for codders</title>
</head>

<body>

    <?php include 'partial/_dbconnect.php';?>
    <?php include 'partial/_header.php';?>
    <!-- Grab the Carousel from bootstarp  -->

    <div id="carouselExampleIndicators" class="carousel slide carousel-fade " data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://source.unsplash.com/1900x500/?NodeJS,programming," class="d-block w-100"
                    alt="No image Found">
            </div>
            <div class="carousel-item">
                <img src="https://source.unsplash.com/1900x500/?php,prorgamming" class="d-block w-100"
                    alt="No image Found">
            </div>
            <div class="carousel-item">
                <img src="https://source.unsplash.com/1900x500/?coding,java" class="d-block w-100" alt="No image Found">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- end of carousel  -->

    <!-- Category container start here  -->
    <div class="container my-4" id="ques">
        <h2 class="text-center my-4">aDiscuss- Categories</h2>
        <div class="row my-4">
            <?php
            $sql = "SELECT * FROM `categories`";
            $result = mysqli_query($conn, $sql);
            while($row= mysqli_fetch_assoc($result)){
                $id = $row['category_id'];
                $cat = $row['category_name'];
                $desc = $row['category_desc'];
                $date = $row['date'];

                 echo '<div class="col-md-4">
                 <div
                     class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                     <div class="card-img-top">
                     <img src="https://source.unsplash.com/400x300/?programming,'. $cat .'," class="bd-placeholder-img" alt="No image found">
                 </div>
                     <div class="col p-4 d-flex flex-column position-static">
                         <strong class="d-inline-block mb-2 text-primary">'.$cat.' Programming</strong>
                         <h3 class="mb-0"><a href="theradList.php?cateid='.$id.'">'.$cat.'</a></h3>
                         <div class="mb-1 text-muted">'.$date.'</div>
                         <p class="card-text mb-auto">' .substr($desc, 0, 90). '...</p>
                         <a href="theradList.php?cateid='. $id .'" class="stretched-link">Continue reading</a>
                     </div>
                 </div>
             </div>';
            }
            ?>

        </div>
    </div>
    <!-- End of Category Container  -->


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
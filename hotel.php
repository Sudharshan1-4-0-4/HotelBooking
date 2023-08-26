<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="hotel.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/d1c2ea8b80.js" crossorigin="anonymous"></script>
</head>

<body>
   
    <div id="sectionhome">
            <nav class="navbar navbar-expand-lg navbar-dark  fixed-top">
                <div class="container">
                    <a class="navbar-brand" href="#">
                        <img src="https://images-platform.99static.com//oCXO0Nitm4HBwRt9zXncfGtDURI=/713x369:1291x947/fit-in/500x500/99designs-contests-attachments/126/126208/attachment_126208624" class="royal-logo" />
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon "></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav ml-auto">
                            
                            <a class="nav-link active" href="sectionfirst.php" id="navItem2">Explore...</a>
                            
                        </div>
                    </div>
                </div>
            </nav>
        
        <div class="background d-flex flex-column justify-content-center">
            <div class="card11">
                <h1 class="heading">Royal Hotel</h1>
                <p class="para">Move to What moves you..</p>
               
               <div class="d-flex flex-row justify-content-center mt-4">
                    <i class="d-none fa fa-thumbs-up like-icon"  id="likeIcon" onclick = "onClickLikeButton()"></i>
                    <a href="sectionfirst.php" ><button class="like-button  ml-2" id="likeButton" onclick="onClickLikeButton()">
                        Book Flat
                    </button></a>
                </div>
            </div>
        </div>
    </div>
   
</body>
    <script src="hotel.js"></script>
</html>
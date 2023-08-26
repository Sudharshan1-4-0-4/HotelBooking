<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="hotel.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>

<body class="inner">
    
    <div id="sectiondeluxe">
        <img src="deluxe.png" class="img3" />
        <div class="card3">
            <h1 class="head">Rs 8000/-</h1>
            <div class="d-flex flex-row">
                <img src="https://assets.ccbp.in/frontend/static-website/flats-list-location-icon-img.png" class="img4" />
                <p class="p">D/N 6-5,Royal street,RK valley</p>
            </div>
            <hr class="hh" />
            <h1 class="head">Description</h1>
            <p class="p">Deluxe rooms are usually larger than their standard counterparts, may include a bathtub and a shower in the bathroom, and include more high-end amenities.</p>
            <div class=" d-flex flex-row">
                <!-- Button trigger modal -->
                <button type="button" class="button3" data-toggle="modal" data-target="#staticBackdrop">
                    Confirm
                </button>
                
  <!-- Modal -->
                <div class="modal custom" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" >
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header model-header-style">
                                <h5 class="modal-title text-bold" id="staticBackdropLabel">Registration Form</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body model-body-style">
                                <form id="myForm" action="hoteldetails.php" method="POST" onsubmit="return validateForm()">
                                    <div class="mb-2">
                                        <label for="name" class="form-label">Name :</label>
                                        <input class="form-control" id="name" type="text" name="name"/>
                                    </div>
                                    <div class="mb-2">
                                        <label for="email" class="form-label">Email :</label>
                                        <input class="form-control" id="email" type="email" name="email"/>
                                    </div>
                                    <div class="mb-2">
                                        <label for="info" class="form-label">Flat Type :</label>
                                        <input class="form-control" type="text" id="info" name="info" value="deluxe" readonly>
                                            
                                    </div>
                                    <div class="d-flex flex-row justify-content-center">
                                        <button class="form-button btn btn-primary" id="btn" type="submit" value="submit" name="submit">submit</button>
                                        
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer model-header-style">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        
                            </div>
                        </div>
                    </div>
                </div>
                <a href="sectionfirst.php"><button class="button4">back</button></a>
            </div>


        </div>
    </div>
    
</body>
    <script src="hotel11.js"></script>
</html>
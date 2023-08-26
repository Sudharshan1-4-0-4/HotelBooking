<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="hotel.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </head>
    <body>


<?php
    session_start();
    $name = $_POST['name'];
    $email = $_POST['email'];
    $flat = $_POST['info'];
    
    $_SESSION['name'] = $name;
    
    if(isset($_POST['submit'])){
        
        $conn = mysqli_connect('localhost','root','','test4');
        /*if($conn){
            echo "connected"."<br/>";
        }
        else{
            echo "not connected";
        }*/
        $query = "use test4;";
        $result = mysqli_query($conn,$query);
        /*if($result){
            echo "yes"."<br>";
        }else{
            echo "no";

        }*/
        /*$user_table = "CREATE TABLE user_details(name1 varchar(25),email varchar(25),flat varchar(10));";
        $result3 = mysqli_query($conn,$user_table);
        if($result3){
            echo "table created";
        }else{
            echo "not created";
        }*/

        $insert_details = "INSERT INTO user_details(name1,email,flat)VALUES('$name','$email','$flat');";
        $result5 = mysqli_query($conn,$insert_details);
        /*if($result5){
            echo "inserted"."<br>";
        }else{
            echo "not";
        }*/
        

        /*$retrive = "select * from user_details;";
        $result6 = mysqli_query($conn, $retrive);
        $rowcheck = mysqli_num_rows($result6);
        if($rowcheck > 0){
            while($record = mysqli_fetch_assoc($result6)){
                echo $record['name1']." ".$record["email"]."<br>";
            }
        }*/
        
        /*$del = "DELETE FROM user_details;";
        $result4 = mysqli_query($conn,$del);
        if($result4){
            echo "deleted";

        }else{
            echo "not deleted";
        }*/

        
        
        
    }

    
        
?>
    <script>

        alert("Your details are submitted!!");
    </script>


</body>
<div class="card-register d-flex flex-column justify-content-center">
        <marquee >..!!Royal Hotel!!..</marquee>
        <h1 class="text-primary">....Thank You <?php echo $_SESSION['name']  ?> For Registered In Royal Hotel...</h1>
        <h1 class="text-primary">... Hava a Nice Day!!...</h1>
        <div>
            <a href="hotel.php"><button class="btn btn-primary">Back to home...</button></a>

        </div>
    </div>
   

</html>

<?php
    session_destroy();
?>
<?php 
if(isset($_REQUEST['name'])){
    // echo "<pre>";
    // print_r($_REQUEST);
    try{
        $_conn = mysqli_connect('localhost','root','','abc');
        if($_conn){
        $name = $_REQUEST['name'];
        $email = $_REQUEST['email']; 
        $password= $_REQUEST['password']; 
        $city  = $_REQUEST['City'];  
        }
        else{
            die('not connected');
        }
    } catch (\Throwable $th) {
        die($th->getMessage()); 
    }
} 
//     if(isset($_REQUEST['name'])) {
//         // echo "<pre>";
//         // print_r($_REQUEST);
//         try {
//             $conn = mysqli_connect('localhost', 'root','', 'abc');
//             if($conn) {
//                 $name = $_REQUEST['name'];
//                 $email = $_REQUEST['email'];
//                 $password = $_REQUEST['password'];
//                 $city = $_REQUEST['City'];
//                 // print_r(mysqli_query($conn, "INSERT into portfolio (name, email, password, city) 
//                 // VALUES ('$name', '$email', '$password', '$city')"));
//                 // die('inserted');
//             }else {
//                 die('not connected');
//             }
//         } catch (\Throwable $th) {
//             die($th->getMessage());
//             // th= try catch 
//         }
//     }
// ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form handling in php</title>
</head>
<body>
    <form action="#" method="post">
        <input type="text" name="name" placeholder=" Enter Your  Name"><br>
        <br>
        <input type="email" name="email" placeholder=" Enter Your Email"><br>
        <br>
        <input type="password" name="password" placeholder=" Enter Your Password"><br>
        <br>
        <input type="checkbox" name="Skills[]"> <span>PHP
        </span><br>
        <input type="checkbox" name="Skills[]" ><span>Javascript
        </span><br>
        <input type="checkbox" name="Skills[]" ><span>CPP
        </span><br>
        <br>
        <input type="radio" name="Gender"> <span>Male
        </span><br>
        <input type="radio" name="Gender"> <span>Female
        </span><br>
        <input type="radio" name="Gender"> <span>Other
        </span><br>
        <br>
        <br>
        <select name="City">
            <option >Select Your City</option>
            <option value="Noida">Noida</option>
            <option value="Lucknow">Lucknow</option>
            <option value="Benguluru">Benguluru</option>
            <option value="Gurgoun">Gurgoun</option>
            <option value="Pune">Pune</option>
            <option value="Bhopal">Bhopal</option> 
            <option value="Delhi">Delhi</option>
        </select>
        <br>
        <br>
        <textarea name="Bio"></textarea>
        <br>
        <br>
        <button type="submit">Sign Up</button>
    </form>
    
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buying</title>
    <link rel="stylesheet" href="register.css">
</head>
<body>
 
    <header>
        <div class="contanernav">
            <div class="imge">
        <span ><a href="Home.php"><img src="images/telephoneicon.png"  alt="" width="70px" style="padding-left: 30px;"></a></span>
        </div><div class="seperate">
        <span class="space"><a href="Home.php">Home </a></span>
        <span class="space"><a href="shopping.php">shopping </a></span>
        <span class="space"><a href="register.php">buying </a></span>
        
        <span class="space" style="color: white;">search <input type="search" style="background-color: white;"></span>
       
        </div>
        </div>
            </header>
        <?php
    if (isset($_GET['flag'])) {
        $flag_value = $_GET['flag'];
        if ($flag_value == 1) {
            echo "<script>alert('Please fill  the entire form');</script>";
          
        }
        if ($flag_value == 2) {
            echo "<span>thank you for fiiling this form";
           
        }
    }
    ?>  
    
    <form method="post" action="buying_action.php">
        <table>
            <tr>
                <th>Please enter this form to be able to purchase</th>
            </tr>
            <tr>
                <td><label for="txt_name">Enter your name:</label></td>
                <td><input type="text" id="txt_name" name="txt_name" placeholder="Enter your name here"></td>
            </tr>
            <tr>
                <td><label for="txt_number">Enter your phone number:</label></td>
                <td><input type="tel" id="txt_number" name="txt_number" placeholder="+961"></td>
            </tr>
            <tr>
                <td><label for="txt_email">Enter your email:</label></td>
                <td><input type="email" id="txt_email" name="txt_email" placeholder="Enter your email"></td>
            </tr>
            <tr>
                <td><label for="txt_location">Enter your location:</label></td>
                <td><input type="text" id="txt_location" name="txt_location" placeholder="Enter your location"></td>
            </tr>
            <tr>
                <td><label for="txt_mobile">What phone do you want to buy:</label></td>
                <td><input type="text" id="txt_mobile" name="txt_mobile" placeholder="Enter what you want here"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Submit"></td>
            </tr>
        </table>
    </form>
    <footer>
        <div class="l" width="100%">
         <img src="images/face.png">
         <img src="images/icons8-insta-48.png">
         <img src="images/icons8-tik-tok-50.png">
        </div>
        <div class="n1">
                <span> <a href="Home.php">Home</a> </span>
                <span> <a href="shopping.php">shopping</a></span>
                <span> <a href="register.php">bying</a></span>
            </div>
       <div class="end">
         <span> © sayah cell :All Right reserved</span>
       </div>
       </footer>
</body>
</html>

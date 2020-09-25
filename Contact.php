<?php
session_start();
include('connexiondb.php');


if (!empty($_POST)){
$updatecontact = "UPDATE contact SET Email='".$_POST["Email"]."' phone='".$_POST["phone"]."' adresse='".$_POST["adresse"]."' ";
mysqli_query($connection,$updatecontact);

$contactmodification = mysqli_query($connection, "SELECT Email, phone, adresse From contact ");
  $rowcontact =mysqli_fetch_array($contactmodification);



}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="" method="POST">
<div class="form-input">
<label>Email</label>
<input type="text"  name="Email"  value="<?php echo $rowcontact['Email'];?>" placeholder=" Email"/>	
</div>
<div class="form-input">
<label>phone</label>
<input type="text"  name="phone"  value="<?php echo $rowcontact['phone'];?>" placeholder="le num"/>	
</div>
<div class="form-input">
<label>adresse</label>
<input type="text"  name="adresse"  value="<?php echo $rowcontact['adresse'];?>" placeholder=" adresse"/>
</div>
<button type="submit" class="btn__form"  name="sibmit">submit</button>
</form>
    
</body>
</html> 

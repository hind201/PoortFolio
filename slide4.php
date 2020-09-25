<?php
session_start();
include('connexiondb.php');


if (!empty($_POST)){
$update = "UPDATE fil_rouge_portfolio SET photo='".$_POST["photo"]."'  where id=14";
mysqli_query($connection,$update);

$sqlmodification = mysqli_query($connection, "SELECT  photo From fil_rouge_portfolio where id=14 ");
  $row1 =mysqli_fetch_array($sqlmodification);



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


<!-- <div class="form-input">
<labe>titre</label>
<input type="titre"  name="titre" value="<?php echo $row['titre'];?>" placeholder="changer le titre"/>	
            </div><br><br><br> -->
<!-- <div class="form-input">
<label>text</label>
<textarea type="text"  name="paragraphe"  value="<?php echo $row['parag'];?>" placeholder="changer la paragraphe"></textarea>	
            </div> -->
  <div class="form-input">
<label>photo</label>
<input type="file"  name="photo"  value="<?php echo $row4['photo'];?>" placeholder="changer la photo">
            </div>



            
            
            
            <button type="submit" class="btn__form"  name="sibmit">submit</button>

    
</body>
</html>
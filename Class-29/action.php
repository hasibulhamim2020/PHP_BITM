<?php
if (isset($_POST['btn'])){
?>

    <h3><?php echo  "Name:" .$_POST['name']; ?></h3>
    <h3><?php echo " Age: ".$_POST['age']; ?></h3>
    <h3><?php echo " Adress: ".$_POST['address']; ?></h3>

<?php
}
?>
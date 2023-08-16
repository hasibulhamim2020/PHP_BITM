<br>
<hr>
<br>
<?php

print_r($_POST);

?>
<br>
<br>
    <hr>
<br>
<form action="action.php" method="POST">

    <label for="name">Name:</label>
    <input type="text" id="name" name="name"> <br> <br>

    <label for="age">Age:</label>
    <input type="number" id="age" name="age"> <br> <br>

    <label for="address">Address:</label>
    <input type="text" id="address" name="address"> <br> <br>

    <input type="submit" name="btn" value="Submit">

</form>


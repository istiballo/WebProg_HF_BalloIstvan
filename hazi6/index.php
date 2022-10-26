<h3>Online conference registration</h3>

<form method="post" action="index.php">
    <label for="fname"> First name:
        <input type="text" name="firstName">
    </label>
    <br><br>
    <label for="lname"> Last name:
        <input type="text" name="lastName">
    </label>
    <br><br>
    <label for="email"> E-mail:
        <input type="text" name="email">
    </label>
    <br><br>
    <label for="attend"> I will attend:<br>
        <input type="checkbox" name="attend[]" value="Event1">Event 1<br>
        <input type="checkbox" name="attend[]" value="Event2">Event2<br>
        <input type="checkbox" name="attend[]" value="Event3">Event2<br>
        <input type="checkbox" name="attend[]" value="Event4">Event3<br>
    </label>
    <br><br>
    <label for="tshirt"> What's your T-Shirt size?<br>
        <select name="tshirt">
            <option value="P">Please select</option>
            <option value="S">S</option>
            <option value="M">M</option>
            <option value="L">L</option>
            <option value="XL">XL</option>
        </select>
    </label>
    <br><br>
    <label for="abstract"> Upload your abstract<br>
        <input type="file" name="abstract"/>
    </label>
    <br><br>
    <input type="checkbox" name="terms" value="">I agree to terms & conditions.<br>
    <br><br>
    <input type="submit" name="submit" value="Send registration"/>
</form>

<?php
    if(isset($_POST['firstName']) && isset($_POST['lastName'])) {
        echo 'Hello ' . $_POST['firstName'] . ' ' . $_POST['lastName'];
        echo '<br>';
    }
    else {
        echo "First and last names are obligatory!";
    }

    if(isset($_POST['email'])) {
        if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
          echo "Email is correct";
        }
        else {
            echo "Email is incorrect";
        }
    }
    else {
        echo "Email is mandatory";
    }

    if(isset($_POST['attend'])) {
        echo "<br>";
        echo "Selected events: ";
        foreach($_POST['attend'] as $event) {
            echo "<br>";
            echo $event;
        }
    }
    else {
        echo "At least one event has te be selected";
    }


    if(isset($_POST['tshirt'])) {
        echo '<br> Shirt size: ' . $_POST['tshirt'];
    }

    if(isset($_POST['abstract'])) {
        echo"<br> FILE: ";
        echo $_POST['abstract'];
        echo "<br>";
    }
    if(!isset($_POST['terms'])) {
        echo "Accepting terms is mandatory!";
    }
?>

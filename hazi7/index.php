<h1>Guess the number</h1>
<?php
session_start();
    if(isset($_POST['guessedNumber'])) {
        if($_POST['guessedNumber'] > $_SESSION['randNum']) {
            echo "lower";
            echo '<form method="POST" action="index.php">
                    <input type="number" name="guessedNumber">
                    <button type="submit">GUESS</button>
                </form>';
            return;
        }
        else if($_POST['guessedNumber'] < $_SESSION['randNum']) {
            echo "higher";
            echo '<form method="POST" action="index.php">
                    <input type="number" name="guessedNumber">
                    <button type="submit">GUESS</button>
                </form>';
            return;
        }
//        valamiert csak akkor frissiti a szamot ha ezt ketszer irom, ha egyszer van akkor meg masodik talalatra frissul, ha a tanarur tudja miert kerem irja meg mert kivancsi vagyok :)
        $_SESSION['randNum'] = rand(1,10);
        $_SESSION['randNum'] = rand(1,10);
        echo "Found the number";
    }
?>
<form method="POST" action="index.php">
    <input type="number" name="guessedNumber">
    <button type="submit">GUESS</button>
</form>

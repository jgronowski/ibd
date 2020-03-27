<?php
session_start();

if(isset($_POST['zaloguj'])) {
    if($_POST['uzytkownik'] == 'admin' && $_POST['haslo'] == 'tajne') {
        $_SESSION['zalogowany'] = 'tak';
        header("Location: tajne.php");
    }else{
        echo"<p style='color: red'>Niepoprawne dane logowania!!</p>";
    }
}
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    </head>
    <body>
        <?php if(isset($_GET['komunikat']) && $_GET['komunikat'] == 1): ?>
            <p style='color: red;'>Najpierw musisz sie zalogowac!</p>
        <?php endif; ?>

        <form method="post" action="przyklad3.php">
            Nazwa użytkownika:
            <input type="text" name="uzytkownik" />
            <br/>

            Hasło:
            <input type="password" name="haslo" />
            <br/>
            <br/>

            <input type="submit" name="zaloguj" value="Zaloguj" />
        </form>
    </body>
</html>
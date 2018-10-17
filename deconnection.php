<?php
session_start();
session_unset();
session_destroy();

?>
<!DOCTYPE html>
<html>

<body>


// remove all session variables

// destroy the session


<a href="index.php">Revenir au login</a>
</body>
<p> "Vous êtes déconnecté <br></p>"

</html>

<?php
header('location: /');
?>
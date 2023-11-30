<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $homepage = $_POST["homepage"];
    $tel = $_POST["tel"];
    $comment = $_POST["comment"];

    // Kombinera namn och kommentar med ett skiljetecken (t.ex. "|")
    $entry = $name . '|' . $email . '|' . $homepage . '|' . $tel . '|' . $comment . PHP_EOL;

    // Spara inlägget i textfilen (använd lämplig sökväg)
    $filename = 'comments.txt';
    file_put_contents($filename, $entry, FILE_APPEND | LOCK_EX);
}

// Omdirigera tillbaka till gästboken
header('Location: guestbook.html');
exit();
?>

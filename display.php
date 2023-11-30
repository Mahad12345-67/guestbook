<?php
$filename = 'comments.txt';

if (file_exists($filename)) {
    $entries = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    // Vänd på arrayen för att visa senaste kommentarerna överst
    $entries = array_reverse($entries);

    foreach ($entries as $entry) {
        // Dela upp varje inlägg i namn och kommentar
        list($name, $email, $homepage, $tel, $comment) = explode('|', $entry);
        echo '<div class="guestbook-entry">';
        echo '<strong>Name:</strong> ' . htmlspecialchars($name) . '<br>';
        echo '<strong>Email:</strong> ' . htmlspecialchars($email) . '<br>';
        echo '<strong>Homepage:</strong> ' . htmlspecialchars($homepage) . '<br>';
        echo '<strong>tel:</strong> ' . htmlspecialchars($tel) . '<br>';
        echo '<strong>Comment:</strong> ' . nl2br(htmlspecialchars($comment));
        echo '</div>';
    }
}
?>

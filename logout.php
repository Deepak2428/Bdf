<?php

session_Start();
session_destroy();

unset($_SESSION["username"]);
unset($_SESSION["id"]);
unset($_SESSION["tenth"]);

header("location:index.html");

?>
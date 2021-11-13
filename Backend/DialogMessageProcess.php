<?php
$title = "";
$content = "";
if (isset($_GET["msg"]) && !empty($_GET["msg"])) {
    if ($_GET["msg"] === "SignUp") {
        $title = "Sign Up";
        $content = "Your signup Complete";
    }
}
?>
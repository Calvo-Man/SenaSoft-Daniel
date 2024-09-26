<?php
session_start();
// session_destroy();

include_once "view/modules/head.php";


if (isset($_GET["route"])) {

    if (
        $_GET["route"] == "homePage" ||
        $_GET["route"] == "service" ||
        $_GET["route"] == "getTrained" ||
        $_GET["route"] == "product"||
        $_GET["route"] == "registerWaste" 
    ) {
        include_once "view/modules/menu.php";
        include_once "view/modules/" . $_GET["route"] . ".php";
        include_once "view/modules/footer.php";

        // Si la ruta es login, se incluye solo la página de login
    } elseif (
        $_GET["route"] == "loginUser" ||
        $_GET["route"] == "registerUser"
    ) {
        include_once "view/modules/" . $_GET["route"] . ".php";

        // Si la ruta no coincide con ninguna de las anteriores, se muestra el 404
    } else {
        include_once "view/modules/404.php";
    }
} else {
    include_once "view/modules/menu.php";
    include_once "view/modules/homePage.php";
    include_once "view/modules/footer.php";
}


include_once "view/modules/foot.php";

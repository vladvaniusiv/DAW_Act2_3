<?php
if (isset($_REQUEST['fname']) && isset($_REQUEST['lname'])) {
    $fname = $_REQUEST['fname'];
    $lname = $_REQUEST['lname'];

    echo "Hola! " . htmlspecialchars($fname) . " " . htmlspecialchars($lname);
} else {
    echo "Por favor, completa los campos del formulario.";
}
?>

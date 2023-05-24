<?php
function tipoUsuario($tipousuario){
    $elegir = $tipousuario;
    switch ($elegir) {
        case 1:
            return "Administrador";
            break;
        case 2:
            return "1er Grado - Grupo A";
            break;
        case 3:
            return "1er Grado - Grupo B";
            break;
        case 4:
            return "2do Grado - Grupo A";
            break;
        case 5:
            return "2do Grado - Grupo B";
            break;
        case 6:
            return "3er Grado - Grupo A";
            break;
        case 7:
            return "3er Grado - Grupo B";
            break;
        case 8:
            return "4to Grado - Grupo A";
            break;
        case 9:
            return "4to Grado - Grupo B";
            break;
        case 10:
            return "5to Grado - Grupo A";
            break;
        case 11:
            return "5to Grado - Grupo B";
            break;
        case 12:
            return "6to Grado - Grupo A";
            break;
        case 13:
            return "6to Grado - Grupo B";
            break;
    }
}

?>
<?
$version = rand();

$pagina = "inicio";

if (isset($_GET['pagina']) && !empty($_GET['pagina'])) {
    $pagina = $_GET['pagina'];
}

include "inc/cbpie/cab.php";

include "inc/$pagina.php";

include "inc/cbpie/pie.php";

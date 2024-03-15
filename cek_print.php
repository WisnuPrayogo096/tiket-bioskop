<?php

require_once "vendor/autoload.php";

use Dompdf\Dompdf;

$dompdf = new Dompdf();

$html = "<h1>Hello World</h1>";

$dompdf->loadHtml($html);

$dompdf->setPaper("A4", "landscape");

$dompdf->render();

$dompdf->stream('sample.pdf')

?>
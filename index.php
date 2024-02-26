<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/practice/.core/config.php") ;
include './vendor/autoload.php';

use Hywax\YaMetrika\Exception\ClientException;
use Hywax\YaMetrika\Service\ReportService;
use Hywax\YaMetrika\Transformer\ReportDataTransformer;

try {
    $reportService = new ReportService([
        'token' => TOKEN,
        'counterId' => COUNTER,
        'resultTransformer' => new ReportDataTransformer(),
    ]);

    $visitors = $reportService->getVisitors();

    print_r($visitors);
} catch (ClientException $e) {
    echo $e->getMessage();
}
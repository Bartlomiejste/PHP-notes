<?php

declare(strict_types=1);

namespace App;

require_once('/application/src/Utils/debug.php');
require_once('/application/src/Controller.php');


const DEFAULT_ACTION = 'list';

$action = $_GET['action'] ?? DEFAULT_ACTION;

$controller = new Controller();
$controller->run($action);

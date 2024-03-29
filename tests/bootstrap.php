<?php

declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

use Rector\Stubs\StubLoader;

// silent deprecations, since we test them
error_reporting(E_ALL ^ E_DEPRECATED);

// performance boost
gc_disable();

// load stubs
$stubLoader = new StubLoader();
$stubLoader->loadStubs();

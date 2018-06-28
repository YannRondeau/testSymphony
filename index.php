<?php

include "vendor/autoload.php";

use Carbon\Carbon;
$carbon = new Carbon();
$now = Carbon::now();
print_r($now);
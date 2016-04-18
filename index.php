<?php
use JustMd5\Express\Express;

require 'vendor/autoload.php';
//echo var_export(Express::getExpressInfo(881443775034378914), true), PHP_EOL;
//echo var_export(Express::getExpressName(881443775034378914), true), PHP_EOL;
print_r(Express::getExpressInfo(881443775034378914));


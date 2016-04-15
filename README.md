Express
=======
*基于快递100的快递接口封装*
#快速简单查询快递信息
使用:
```shell
composer require justmd5\express:dev_master
```
```php
<?php
use JustMd5\Express\Express;

require 'vendor/autoload.php';
print_r(Express::getExpressInfo(881443775034378914));
echo PHP_EOL;

```
last modified time 2016.04.15 16:56

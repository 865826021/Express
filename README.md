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
echo var_export(Express::getExpressInfo(881443775034378914), true), PHP_EOL;

```
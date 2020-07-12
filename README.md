# php-grpc

PHP Stubs for Chatie GRPC

## DO NOT EDIT

Code generated by grpc_php_plugin.

This repo was generated via DevOps from [@chatie/grpc](https://github.com/chatie/grpc)

## Usage

**github.com/wechaty/php-grpc**

### pecl安装

```shell script
pecl install grpc
pecl install protobuf
```

### CentOS yum安装

```shell script
sudo yum install php72-php-pecl-grpc
sudo yum install php72-php-pecl-protobuf
```

### composer

```
composer config repo.packagist composer https://mirrors.aliyun.com/composer/
composer require wechaty/php-grpc
```

### php

```php
require dirname(__FILE__) . '/vendor/autoload.php';

$client = new \Wechaty\PuppetClient("localhost:8788", [
    'credentials' => Grpc\ChannelCredentials::createInsecure()
]);
$request = new \Wechaty\Puppet\DingRequest();
list($response, $status) = $client->Ding($request)->wait();
echo sprintf("code: %s, msg: %s \n", $status->code, $status->details);
```

## Author

- [Chunsheng Zhang](https://github.com/zhangchunsheng) ([张春生](https://linkedin.com/in/justwannabewithyou)) zhangchunsheng423@gmail.com

## Copyright & License

- Code & Docs © 2020-now Chunsheng Zhang \<zhangchunsheng423@gmail.com\>
- Code released under the Apache-2.0 License
- Docs released under Creative Commons

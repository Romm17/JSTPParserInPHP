# JSTP Parser In PHP

encodes and decodes JSTP from / to PHP

## Usage

### Decoding

```url
http://$YourHostName/index.php?decode=$JSTPString
```

#### or use

```php
$parser = new Services_JSTP();
$parser->decode($jstp);
```

### Encoding

```php
$parser = new Services_JSTP();
$jstp $parser->decode($yourObjectOrArrayOrSmth);
```

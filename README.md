iBeon
=====

a Validation and Filtering Security Project.

## About iBeon

iBeon itself having several functions to filter and validate data. By using this you can make your project much more easier.

Overview of some of the features:

* Remove Functions
* Filter Functions
* Count Functions

## Examples

### Initialization
```php
<?php
    include('ibeon.php');
?>
```

##Removing the Numbers from the given input

```php
<?php
    $var="Hello11353";
    echo ib_remNumbers($var);
?>
```
The result will be Hello

##Removing the Symbols from the given input

```php
<?php
    $var="ABC$#D";
    echo ib_remSymbols($var);
?>
```
The result will be ABCD

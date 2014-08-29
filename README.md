iBeon
=====

Data Validation and Filtering Security Project.

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
## Remove Functions

##Removing the Numbers from the given input

```php
<?php
    $var="Hello11353";
    echo ib_remNumbers($var);
?>
```
The result will be **Hello**

##Removing the Symbols from the given input

```php
<?php
    $var="ABC$#D";
    echo ib_remSymbols($var);
?>
```
The result will be **ABCD**

##Removing the Symbols from the given input

```php
<?php
    $var="ABC$#D";
    echo ib_remSymbols($var);
?>
```
The result will be **ABCD**

## Counting Functions

###Counting Integers

```php
<?php
    $var="ABC$#D123";
    echo ib_countNum($var);
?>
```
The result will be **3**

###Counting Letters

```php
<?php
    $var="ABC$#D123";
    echo ib_countNum($var);
?>
```
The result will be **4**

## Restricting the data with *Only Functions*

###Restricting all except Numbers

```php
<?php
    $var="ABC$#D123";
    echo ib_onlyNum($var);
?>
```
The result will be **123**

###Restricting all except Letters

```php
<?php
    $var="ABC$#D123";
    echo ib_onlyNum($var);
?>
```
The result will be **ABCD**

## Special Sting Functions

### String Next Function

```php
<?php
    $var="ABCD";
    echo ib_strNext(($var);
?>
```
The result will be **BCDE**

### String Prev Function

```php
<?php
    $var="BCDE";
    echo ib_strPrev(($var);
?>
```
The result will be **ABCD**

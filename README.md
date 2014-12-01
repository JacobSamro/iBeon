iBeon 2
=====
Enhanced Version of iBeon ( Data Validation and Filtering Security Project.)

## About iBeon 2

iBeon itself having several functions to filter and validate data. By using this you can make your project much more easier.

Python Version is also availiable in this repo ( onside python/ folder)

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

## Create new Object

```php
<?php
$ib =   new ibeon;
?>
```
## Remove Functions

##Removing the Numbers from the given input

```php
<?php
    $var="Hello11353";
    echo $ib->remNumbers($var);
?>
```
The result will be **Hello**

##Removing the Symbols from the given input

```php
<?php
    $var="ABC$#D";
    echo $ib->remSymbols($var);
?>
```
The result will be **ABCD**

## Counting Functions

###Counting Integers

```php
<?php
    $var="ABC$#D123";
    echo $ib->countNumbers($var);
?>
```
The result will be **3**

###Counting Letters

```php
<?php
    $var="ABC$#D123";
    echo $ib->countAlpabets($var);
?>
```
The result will be **4**

## Restricting the data with *Only Functions*

###Restricting all except Numbers

```php
<?php
    $var="ABC$#D123";
    echo $ib->onlyNumbers($var);
?>
```
The result will be **123**

###Restricting all except Letters

```php
<?php
    $var="ABC$#D123";
    echo $ib->onlyAlpabets($var);
?>
```
The result will be **ABCD**

## Special Sting Functions

### String Next Function

```php
<?php
    $var="ABCD";
    echo $ib->strNext(($var);
?>
```
The result will be **BCDE**

### String Prev Function

```php
<?php
    $var="BCDE";
    echo $ib->strPrev(($var);
?>
```
The result will be **ABCD**

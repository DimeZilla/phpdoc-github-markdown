
# Table of Contents

## [Classes](#classes)
* ### [\DimeZilla\Test\SecondTestClass](#secondtestclass)
    * public getInstance
    * public sayMyName
* ### [\DimeZilla\Test\TestClass](#testclass)
    * public __construct
    * public sayMessage
    * protected getMessage
    * private translateMessage

## [Global Functions](#global-functions)
* ### [getPretty](#getpretty)
* ### [heyThere](#heythere)
* ### [yoMomma](#yomomma)
___

### CLASSES
# SecondTestClass
`\DimeZilla\Test\SecondTestClass`

**namespace:** `\DimeZilla\Test`

This class does a lot of really awesome things I promise you!






## **Methods:**
### *public* static getInstance

Gets our static instance

```php
SecondTestClass::getInstance( object $something = null, string $name = &#039;Howard&#039; ): static
```

**description:** A singleton factory creation


#### PARAMETERS:

`$something`
  - *type:* **object**
  - *descrption:* argument.description

`$name`
  - *type:* **string**
  - *descrption:* argument.description

#### RETURNS: static

an instance of the class


___
### *public* static sayMyName

Echos out our name.

```php
SecondTestClass::sayMyName(  ): void
```




#### RETURNS: void



# TestClass
`\DimeZilla\Test\TestClass`

**namespace:** `\DimeZilla\Test`

This class is a bunch of empty functions just to test our comments.






## **Methods:**
### *public* __construct

Instantiates the class with a message.

```php
TestClass::__construct( string $message = &#039;&#039; ): void
```



#### PARAMETERS:

`$message`
  - *type:* **string**
  - *descrption:* argument.description

#### RETURNS: void

there&#039;s not really anything to return in construct


___
### *public* sayMessage

Echoes out our message

```php
TestClass::sayMessage(  ): void
```

**description:** Gets the message from the class and echos is out



#### RETURNS: void


#### **See Also:**
  * \DimeZilla\Test\yoMamma - is what you should see! Hah!
___
### *protected* getMessage

Returns our message

```php
TestClass::getMessage(  ): string
```




#### RETURNS: string



___
### *private* translateMessage

Translates our message to amy language

```php
TestClass::translateMessage( string $lang ): string
```



#### PARAMETERS:

`$lang`
  - *type:* **string**
  - *descrption:* argument.description

#### RETURNS: string




___

### GLOBAL FUNCTIONS
# getPretty
**namespace:** \

What clothes should we wear today? Who needs shoes anyway am I right?

```php
function getPretty( string $pants, array $accessories, object $shirt ): mixed
```

**description:** I mean like, you don't want to go out naked do you? It's like totally cool if you do.

#### Warning:
This function is **deprecated**. This means that this function will likely be removed in a future version.

#### PARAMETERS:

`$pants`
  - *type:* **string**
  - *descrption:* argument.description

`$accessories`
  - *type:* **array**
  - *descrption:* argument.description

`$shirt`
  - *type:* **object**
  - *descrption:* argument.description

#### RETURNS: mixed


#### **See Also:**
  * \link - https://github.com/dimezilla

# heyThere
**namespace:** \

Says Hey There

```php
function heyThere(  ): void
```

**description:** Echo's out hello there



#### RETURNS: void




# yoMomma
**namespace:** \

Did you call your mom today? If not, i'm going to tell you to go call
her. She sacrificied 9 months + 18 years of her live bringing you into
this world. The least you can do is call gosh darnit!

```php
function yoMomma( boolean $didYouCall = false ): string
```

**description:** Who doesn't like a random programing yo mamma joke?


#### PARAMETERS:

`$didYouCall`
  - *type:* **boolean**
  - *descrption:* argument.description

#### RETURNS: string

Praise if you did and a stern talking to if you didn&#039;t!




___
Documentation was generated from source code comments on 2018-08-12 using [phpDocumentor](http://www.phpdoc.org/) and [dimezilla/php-doc-markdown](https://github.com/dimezilla/php-doc-markdown)
___

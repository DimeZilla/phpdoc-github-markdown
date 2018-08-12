# SecondTestClass.php
Second test class to display in our example markup.


## Source:
```
<?php
/**
 * Second test class to display in our example markup.
 */
namespace DimeZilla\Test;

/**
 * This class does a lot of really awesome things I promise you!
 */
class SecondTestClass
{
    /**
     * Stores the instance
     * @var static
     */
    protected static $instance;

    /**
     * Just a simple hey property to say hi.
     * @var string
     */
    public $hey = "What up boss?";

    /**
     * Gets our static instance
     *
     * A singleton factory creation
     * @param  object $something  any object really.
     * @param  string      $name       Any name really
     * @return static                  an instance of the class
     */
    public static function getInstance(object $something = null, string $name = 'Howard') {}

    /**
     * Echos out our name.
     * @return void
     */
    public static function sayMyName(){}
}

```

___
Documentation was generated from source code comments on 2018-08-12 using [phpDocumentor](http://www.phpdoc.org/) and [dimezilla/php-doc-markdown](https://github.com/dimezilla/php-doc-markdown)
___

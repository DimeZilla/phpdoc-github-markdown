# TestFunctions.php
Global functions that we can use anywhere


## Source:
```
<?php
/**
 * Global functions that we can use anywhere
 */

/**
 * Says Hey There
 *
 * Echo's out hello there
 * @return void
 */
function heyThere() {}

/**
 * What clothes should we wear today? Who needs shoes anyway am I right?
 *
 * I mean like, you don't want to go out naked do you? It's like totally cool if you do.
 * @see  link https://github.com/dimezilla
 * @deprecated 5.6 We're going to deprecate this when everyone grows some self confidence!
 * @param  string $pants       any designer
 * @param  array  $accessories an array of things to put over our clothes
 * @param  object $shirt       objectified designer
 * @return mixed
 */
function getPretty(string $pants, array $accessories, object $shirt) {}

if (!function_exists('yoMomma')) {
    /**
     * Did you call your mom today? If not, i'm going to tell you to go call
     * her. She sacrificied 9 months + 18 years of her live bringing you into
     * this world. The least you can do is call gosh darnit!
     *
     * Who doesn't like a random programing yo mamma joke?
     * @param  boolean $didYouCall   did you?
     * @return string  Praise if you did and a stern talking to if you didn't!
     */
    function yoMomma($didYouCall = false) {}
}

```

___
Documentation was generated from source code comments on 2018-08-12 using [phpDocumentor](http://www.phpdoc.org/) and [dimezilla/php-doc-markdown](https://github.com/dimezilla/php-doc-markdown)
___

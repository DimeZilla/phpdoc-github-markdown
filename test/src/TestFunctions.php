<?php
/**
 * Global functions that we can use anywhere
 */

/**
 * Says heyThere
 * @return void
 */
function heyThere() {}

/**
 * What clothes should we wear today? Who needs shoes anyway am I right?
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
     * @param  boolean $didYouCall   did you?
     * @return string  Praise if you did and a stern talking to if you didn't!
     */
    function yoMomma($didYouCall = false) {}
}

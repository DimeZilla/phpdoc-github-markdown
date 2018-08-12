<?php
/**
 * File contains a test class
 */

namespace DimeZilla\Test;

/**
 * This class is a bunch of empty functions just to test our comments.
 */
class TestClass
{

    /**
     * Stores our message
     * @var string
     */
    protected $message = '';

    /**
     * Instantiates the class with a message.
     * @param string $message  the message we will say.
     * @return  void  there's not really anything to return in construct
     */
    public function __construct($message = '') {}

    /**
     * Echoes out our message
     *
     * Gets the message from the class and echos is out
     * @see   yoMamma is what you should see! Hah!
     * @return void
     */
    public function sayMessage() {}

    /**
     * Returns our message
     * @return string
     */
    protected function getMessage() {}

    /**
     * Translates our message to amy language
     * @param  string $lang  any language we pass it.
     * @return string
     */
    private function translateMessage(string $lang) {}
}

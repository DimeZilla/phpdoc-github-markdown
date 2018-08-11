<?php
/**
 * File contains a test class
 */

namespace DimeZilla\Test;

class Testclass
{

    /**
     * Stores our message
     * @var string
     */
    protected $message = '';

    /**
     * Instantiates the class with a message.
     * @param string $message  the message we will say.
     */
    public function __construct($message = '') {}

    /**
     * Echoes out our message
     * @return voic
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

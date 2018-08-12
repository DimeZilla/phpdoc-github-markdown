<?php
/**
 * Contains TwigPlugin
 */
namespace DimeZilla\PHPDocMarkdown\Extension;

use Twig_SimpleFunction;

/**
 * An Extendable class for generating twig plugins.
 * To use, an extending class must define a name variable and a plugins variable.
 */
trait TwigPlugin
{
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * {@inheritdoc}
     */
    public function getFunctions()
    {
        $ret = [];
        foreach ($this->plugins as $handle => $method) {
            $ret[] = new Twig_SimpleFunction($handle, [$this, $method]);
        }
        return $ret;
    }
}

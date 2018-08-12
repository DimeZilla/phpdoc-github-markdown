<?php
/**
 * Contains TwigPlugin
 */
namespace DimeZilla\PHPDocMarkdown\Extension;

use Twig_SimpleFunction;
use Twig_SimpleFilter;

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

        // if we don't have the property, then let it go
        if (!property_exists($this, 'plugins')) {
            return $ret;
        }

        foreach ($this->plugins as $handle => $method) {
            $ret[] = new Twig_SimpleFunction($handle, [$this, $method]);
        }
        return $ret;
    }

    public function getFilters()
    {
        $ret = [];

        // if we don't have the property, then let it go
        if (!property_exists($this, 'filters')) {
            return $ret;
        }

        foreach ($this->filters as $handle => $method) {
            $ret[] = new Twig_SimpleFilter($handle, [$this, $method]);
        }
        return $ret;
    }
}

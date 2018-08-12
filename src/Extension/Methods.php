<?php
/**
 * Contains \DimeZilla\PHPDocMarkdown\Extension\Methods
 */
namespace DimeZilla\PHPDocMarkdown\Extension;

use phpDocumentor\Descriptor\ClassDescriptor;
use Twig_Extension;

/**
 * A twig plugin to get all methods including inheretid methods of a class
 */
class Methods extends Twig_Extension
{
    use TwigPlugin;

    /**
     * required by TwigPlugin.
     * stores the name of our twig plugin.
     * @var string
     */
    protected $name = 'DimezillaMethods';

    /**
     * required by TwigPlugin.
     * @see DimeZilla\PHPDocMarkdown\Extension\TwigPlugin
     * @var array
     */
    protected $plugins = [
        'getMethods' => 'getMethods'
    ];

    public function getMethods($class)
    {
        if (!$class instanceof ClassDescriptor) {
            return [];
        }

        return $class->getMagicMethods()
            ->merge($class->getInheritedMethods())
            ->merge($class->getMethods());
    }
}

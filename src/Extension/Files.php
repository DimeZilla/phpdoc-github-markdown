<?php
/**
 * Contains DimeZilla\PHPDocMarkdown\Extension\TwigSortFiles
 */
namespace DimeZilla\PHPDocMarkdown\Extension;

use Twig_Extension;
use phpDocumentor\Descriptor\Collection;

/**
 * Registers a sortbypath function for twig so that we can sort our files by path
 */
class Files extends Twig_Extension
{
    /**
     * Get our TwigPlugin trait
     */
    use TwigPlugin;

    /**
     * required by TwigPlugin.
     * stores the name of our twig plugin.
     * @var string
     */
    protected $name = 'SimpleFiles';

    protected $plugins = [
        'sortByPath' => 'sortByPath'
    ];

    /**
     * required by TwigPlugin.
     * @see DimeZilla\PHPDocMarkdown\Extension\TwigPlugin
     * @var array
     */
    protected $filters = [
        'sortByPath' => 'sortByPath',
        'stripPHP' => 'stripPHP',
        'addForwardSlash' => 'addForwardSlash'
    ];

    /**
     * Takes a phpdoc files collection and sorts them by path
     * @param  Collection $items  the files we want to sort
     * @return array    the files!
     */
    public function sortByPath(Collection $items) {
        $items = $items->getAll();
        usort($items, function ($a, $b){
            $apath = $a->getPath();
            $bpath = $b->getPath();
            return ($apath === $bpath) ? 0 : ($apath < $bpath ? -1 : 1);
        });

        return $items;
    }

    public function stripPHP($name = '')
    {
        return str_replace('.php', '', $name);
    }

    public function addForwardSlash($name = '')
    {
        return '/' . $name;
    }
}

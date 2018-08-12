<?php
/**
 * Contains DimeZilla\PHPDocMarkdown\Extension\AnchorLink
 */
namespace DimeZilla\PHPDocMarkdown\Extension;

use Twig_Extension;

class AnchorLink extends Twig_Extension
{

    use TwigPlugin;

    /**
     * Stores a collection of our links
     * @var array
     */
    protected static $links = [];

    /**
     * required by TwigPlugin.
     * stores the name of our twig plugin.
     * @var string
     */
    protected $name = 'AnchorLink';

    /**
     * required by TwigPlugin.
     * @see DimeZilla\PHPDocMarkdown\Extension\TwigPlugin
     * @var array
     */
    protected $plugins = [
        'tocLink' => 'makeTocLink',
        'anchorTag' => 'makeAnchorTag'
    ];

    protected function getTag($string = '') {
        return str_replace(' ', '-', strtolower($string));
    }

    /**
     * Outputs an achorLink
     * @param  string $linkName [description]
     * @return [type]           [description]
     */
    public function makeTocLink($link = '', $title = '')
    {
        if (empty($title)) {
            $title = $link;
        }

        $anchor = $this->getTag($link);
        // Check if we already have link to an anchor with the same name, and add count suffix
        // $linkCounts = array_count_values(self::$links);
        // $anchorSuffix = array_key_exists($anchor, $linkCounts)
        //     ? '-' . $linkCounts[$anchor] : '';
        // array_push(self::$links, $anchor);

        return sprintf("[%s](%s)", $title, '#' . $anchor);
    }

    public function makeAnchorTag($link = '')
    {
        return sprintf('<a name="%s"></a>', $this->getTag($link));
    }
}
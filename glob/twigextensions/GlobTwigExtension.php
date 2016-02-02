<?php
namespace Craft;

class GlobTwigExtension extends \Twig_Extension
{
    /**
     * Returns the name of the extension.
     *
     * @return string The extension name
     */
    public function getName()
    {
        return 'Glob';
    }

    /**
     * Returns a list of functions to add to the existing list.
     *
     * @return array An array of functions
     */
    public function getFunctions()
    {
        return array(
            new \Twig_SimpleFunction('glob', array($this, 'globFunction')),
        );
    }

    /**
     * Find pathnames in your templates folder matching a pattern.
     *
     * @param string $path
     * @param string $pattern
     *
     * @return array|null
     */
    public function globFunction($path = '', $pattern = '*.{html,twig}')
    {
        return craft()->glob->getPaths($path, $pattern);
    }
}

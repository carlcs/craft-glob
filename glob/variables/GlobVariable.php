<?php
namespace Craft;

class GlobVariable
{
    /**
     * Find pathnames in your templates folder matching a pattern.
     *
     * @param string $path
     * @param string $pattern
     *
     * @return array|null
     */
    public function glob($path = '', $pattern = '*.{html,twig}')
    {
        return craft()->glob->getPaths($path, $pattern);
    }
}

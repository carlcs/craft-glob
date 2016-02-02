<?php
namespace Craft;

class GlobService extends BaseApplicationComponent
{
    /**
     * Find pathnames in your templates folder matching a pattern.
     *
     * @param string $path
     * @param string $pattern
     *
     * @return array|null
     */
    public function getPaths($path, $pattern)
    {
        $templatesPath = craft()->path->getTemplatesPath();

        // Craft::dd($templatesPath.$path.$pattern);
        $paths = glob($templatesPath.$path.$pattern, GLOB_BRACE);

        if (is_array($paths)) {
            $callback = function ($value) use ($templatesPath) {
                return str_replace($templatesPath, '', $value);
            };

            return array_map($callback, $paths);
        }
    }
}

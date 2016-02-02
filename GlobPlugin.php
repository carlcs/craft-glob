<?php
namespace Craft;

class GlobPlugin extends BasePlugin
{
    public function getName()
    {
        return 'Glob';
    }

    public function getVersion()
    {
        return '1.0.1';
    }

    public function getSchemaVersion()
    {
        return '1.0';
    }

    public function getDeveloper()
    {
        return 'carlcs';
    }

    public function getDeveloperUrl()
    {
        return 'https://github.com/carlcs/craft-glob';
    }

    public function getDocumentationUrl()
    {
        return 'https://github.com/carlcs/craft-glob';
    }

    public function getReleaseFeedUrl()
    {
        return 'https://github.com/carlcs/craft-glob/raw/master/releases.json';
    }

    public function addTwigExtension()
    {
        Craft::import('plugins.glob.twigextensions.GlobTwigExtension');
        return new GlobTwigExtension();
    }
}

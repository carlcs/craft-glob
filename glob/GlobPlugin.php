<?php
namespace Craft;

class GlobPlugin extends BasePlugin
{
	function getName()
	{
		return 'Glob';
	}

	function getVersion()
	{
		return '1.0';
	}

	function getSchemaVersion()
	{
		return null;
	}

	function getDeveloper()
	{
		return 'carlcs';
	}

	function getDeveloperUrl()
	{
		return 'https://github.com/carlcs/craft-glob';
	}

	function getDocumentationUrl()
	{
		return 'https://github.com/carlcs/craft-glob';
	}

	function getReleaseFeedUrl()
	{
		return 'https://github.com/carlcs/craft-glob/raw/master/releases.json';
	}

	public function addTwigExtension()
	{
		Craft::import('plugins.glob.twigextensions.GlobTwigExtension');
		return new GlobTwigExtension();
	}
}

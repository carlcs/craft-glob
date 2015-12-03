# Glob plugin for Craft

Craft plugin that adds a Twig function to find pathnames in your templates folder matching a pattern.

The plugin uses the PHP [`glob`][1] function internally.


## Installation

To install the plugin, copy the glob/ folder into craft/plugins/. Then go to Settings → Plugins and click the "Install" button next to "Glob".

## Twig function

### glob( path, pattern )

Find pathnames in your templates folder matching a pattern.

```twig
{% set plugins = [
    'Asset Metadata',
    'Number Convert',
] %}

{% for plugin in plugins %}
    {% set dirPath = 'tests/' ~ plugin|camel|lower ~ '/' %}

    {% for path in glob(dirPath) %}
        <a href="/{{ path }}">{{ path }}</a>
    {% endfor %}
{% endfor %}
```

#### Parameters

`path` (optional)
:   The sub-path in craft/templates/ you want to search in.

`pattern` (optional)
:   The pattern as described in the PHP [`glob`][1] documentation (Default value is `'*.{html,twig}'`).


  [1]: http://php.net/manual/en/function.glob.php

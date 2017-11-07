# php-cs-fixer-config

> Shared [friendsofphp/php-cs-fixer](http://cs.sensiolabs.org/) configuration for TU Media.

## Local Setup

**Install this package globally:**

    $ composer global require tumedia/php-cs-fixer-config

Since this package requires `friendsofphp/php-cs-fixer`, the `php-cs-fixer` CLI will now be available.

## Per-Project Setup

### `.php_cs`

**Put a `.php_cs` file in your project root:**

``` php
<?php

return Tumedia\CS\Config::tap(function ($config) {
    $config->getFinder()->in(__DIR__)->exclude(['directory-to-exclude']);
});
```

> **Pro-Tip:** Add `.php_cs.cache` to your `.gitignore` file

### Running the fixer

    $ php-cs-fixer fix

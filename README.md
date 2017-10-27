# php-cs-fixer-config

> Shared friendsofphp/php-cs-fixer configuration for TU Media.

## Local Setup

**Install this package globally:**

    $ composer global require tumedia/php-cs-fixer-config

**Install `php-cs-fixer` globally:**

    $ composer global require friendsofphp/php-cs-fixer

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

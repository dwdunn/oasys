# Oasys (Open Authentication SYStem)

<pre><a href="http://tc.dreamfactory.com:8111/viewType.html?buildTypeId=oasys_release&guest=1">
    <img src="http://tc.dreamfactory.com:8111/app/rest/builds/buildType:(id:oasys_release)/statusIcon"/>
</a></pre>

Multi-provider, extensible authentication framework

## Installation

Package installation is handled by Composer.

* If you haven't already, please [install Composer](http://getcomposer.org/doc/00-intro.md#installation-nix)
* Create `composer.json` in the root of your project:

``` json
{
    "require": {
        "dreamfactory/oasys": "dev-develop"
    }
}
```

* Run `composer install`
* Require Composer's `vendor/autoload` script in your bootstrap/init script

## Feedback and Contributions

* Feedback is welcome in the form of pull requests and/or issues.
* Contributions should generally follow the strategy outlined in ["Contributing
  to a project"](https://help.github.com/articles/fork-a-repo#contributing-to-a-project)
* Please submit pull requests against the `develop` branch

## Credits

* This code is an amalgamation of four different libraries that I've been carting around for years.  It wouldn't have been possible if there weren't so many poorly crafted
generic authentication systems available. ;)

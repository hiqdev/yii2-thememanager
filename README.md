# Yii2 Theme Manager

**Pluggable themes for Yii2**

[![Latest Stable Version](https://poser.pugx.org/hiqdev/yii2-thememanager/v/stable)](https://packagist.org/packages/hiqdev/yii2-thememanager)
[![Total Downloads](https://poser.pugx.org/hiqdev/yii2-thememanager/downloads)](https://packagist.org/packages/hiqdev/yii2-thememanager)
[![Build Status](https://img.shields.io/travis/hiqdev/yii2-thememanager.svg)](https://travis-ci.org/hiqdev/yii2-thememanager)
[![Scrutinizer Code Coverage](https://img.shields.io/scrutinizer/coverage/g/hiqdev/yii2-thememanager.svg)](https://scrutinizer-ci.com/g/hiqdev/yii2-thememanager/)
[![Scrutinizer Code Quality](https://img.shields.io/scrutinizer/g/hiqdev/yii2-thememanager.svg)](https://scrutinizer-ci.com/g/hiqdev/yii2-thememanager/)
[![Dependency Status](https://www.versioneye.com/php/hiqdev:yii2-thememanager/dev-master/badge.svg)](https://www.versioneye.com/php/hiqdev:yii2-thememanager/dev-master)

This [Yii2] plugin provides easy theming for Yii2 projects.
And allows to create and use themes as composer packages.
So changing a theme on a site becomes as simple as changing
a single require line in `composer.json`.

At the moment there are several themes available:

- AdminLte          - [yii2-theme-adminlte]
- Agency            - [yii2-theme-agency]
- DataServ          - [yii2-theme-dataserv]
- Flat              - [yii2-theme-flat]
- Hyde              - [yii2-theme-hyde]
- Obaju             - [yii2-theme-obaju]
- Yii2 original     - [yii2-theme-original]
- Sailor            - [yii2-theme-sailor]
- Twenty Fifteen    - [yii2-theme-twentyfifteen]

[yii2]:                     http://www.yiiframework.com/
[yii2-theme-adminlte]:      https://github.com/hiqdev/yii2-theme-adminlte
[yii2-theme-agency]:        https://github.com/hiqdev/yii2-theme-agency
[yii2-theme-dataserv]:      https://github.com/hiqdev/yii2-theme-dataserv
[yii2-theme-flat]:          https://github.com/hiqdev/yii2-theme-flat
[yii2-theme-hyde]:          https://github.com/hiqdev/yii2-theme-hyde
[yii2-theme-obaju]:         https://github.com/hiqdev/yii2-theme-obaju
[yii2-theme-original]:      https://github.com/hiqdev/yii2-theme-original
[yii2-theme-sailor]:        https://github.com/hiqdev/yii2-theme-sailor
[yii2-theme-twentyfifteen]: https://github.com/hiqdev/yii2-theme-twentyfifteen

## Installation

This package is not intended to be required directly in your project.
Instead you should require theme(s) you've chosen and this package
will get required as a dependency.

Please see [hiqdev/hisite-template] as example of project using this theming
library.

[hiqdev/hisite-template]: https://github.com/hiqdev/hisite-template

## Idea

The main goal of this theming library is to allow creation and use of easy
pluggable themes: to change a theme on a site it is enough just to require
other theme package in project's `composer.json`.

To achieve this goal several technologies were used:

- [Yii2 theming] with `pathMap` auto assembling;
- [Yii2 dependency injection] for widgets and menus;
- [composer-config-plugin] to create themes as plugins i.e. code combined and distributed
  together with configuration.

This package provides:

- bootrstrappable `ThemeManager` component that collects and setups in application view
  proper `Theme` object with proper `pathMap`;
- widgets and menus that can be configured through params and substituted with DI;
- theme `DebugPanel` showing actual `pathMap`.

[composer-config-plugin]:    https://github.com/hiqdev/composer-config-plugin
[yii2 dependency injection]: http://www.yiiframework.com/doc-2.0/guide-concept-di-container.html
[yii2 theming]:              http://www.yiiframework.com/doc-2.0/guide-output-theming.html

## Configuration

This extension is supposed to be used with [composer-config-plugin].

Also you can use it usual way by copy-pasting config.
See [src/config/web.php] for configuration example.

Available configuration parameters:

- `themeManager.defaultTheme` - default theme
- `copyright.year` - **CopyrightYears** widget
- `copyright.years`
- `logo.url` - **LogoLink** widget
- `logo.name`
- `logo.options`
- `logo.image`
- `logo.imageOptions`
- `logo.smallImage`
- `logo.smallImageOptions`
- `organization.url` - **OrganizationLink** widget
- `organization.name`
- `organization.options`
- `poweredBy.url` - **PoweredBy** widget
- `poweredBy.name`
- `poweredBy.version`
- `poweredBy.options`
- `socialLinks.links` - **SocialLinks** widget

For more details please see [src/config/params.php].

[composer-config-plugin]:   https://github.com/hiqdev/composer-config-plugin
[src/config/params.php]:    src/config/params.php
[src/config/web.php]:       src/config/web.php

## License

This project is released under the terms of the BSD-3-Clause [license](LICENSE).
Read more [here](http://choosealicense.com/licenses/bsd-3-clause).

Copyright © 2015-2017, HiQDev (http://hiqdev.com/)

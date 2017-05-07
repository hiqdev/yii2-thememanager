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

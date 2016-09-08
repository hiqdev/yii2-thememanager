hiqdev/yii2-thememanager
------------------------

## [0.0.2] - 2016-09-02

- Added widgets: OrganizationLink, SocialLinks, PoweredBy, LoginForm, Breadcrumbs
    - [d675571] 2016-09-02 added LoginForm widget [sol@hiqdev.com]
    - [40907ee] 2016-09-01 + PoweredBy widget [sol@hiqdev.com]
    - [a3dbaec] 2016-09-01 + widget path to pathMap [sol@hiqdev.com]
    - [f497ed7] 2016-08-26 added Breadcrumbs widget [sol@hiqdev.com]
    - [4ca3a60] 2016-08-26 + hasWidget() [sol@hiqdev.com]
    - [e2a5674] 2016-08-26 added Flash for Theme changed [sol@hiqdev.com]
    - [4eeb955] 2016-08-25 Fixed OrganizationLink from trim(variable) to trim(variable) !== "" [andreyklochok@gmail.com]
    - [ce60121] 2016-08-25 fixed OrganizationLink widget to use organizationName/Url [sol@hiqdev.com]
    - [97b9234] 2016-08-25 fixed typo [sol@hiqdev.com]
    - [f834412] 2016-08-25 Added SocialLinks widget, complemented OrganizationLink widget [andreyklochok@gmail.com]
    - [7d19283] 2016-08-25 added widgets [sol@hiqdev.com]
    - [a26edd8] 2016-08-25 + ThemeManager::widget() [sol@hiqdev.com]
    - [4730098] 2016-08-23 Grammar fix [andreyklochok@gmail.com]
- Added viewPaths parameter
    - [e8a26cf] 2016-09-02 csfixed [sol@hiqdev.com]
    - [6190dc6] 2016-08-31 redone pathDirs -> viewPaths [sol@hiqdev.com]
    - [f2713bf] 2016-08-28 forced adding pathDirs in Theme [sol@hiqdev.com]
    - [10092cc] 2016-08-22 + pathDirs parameter [sol@hiqdev.com]
- Removed View, AssetConverter and AssetManager
    - [1f9a236] 2016-08-23 removed View, AssetConverter and AssetManager [sol@hiqdev.com]
    - [87125e7] 2016-08-23 removed AssetManager from bootstrap [sol@hiqdev.com]
    - [ea0c7a7] 2016-08-23 removed AssetManager from config [sol@hiqdev.com]

## [0.0.1] - 2016-08-22

- Changed bootstrapping
    - [ef164cf] 2016-08-19 + isHomePage to ThemeManager component [sol@hiqdev.com]
    - [d90ee48] 2016-08-19 csfixed [sol@hiqdev.com]
    - [0d9f909] 2016-08-18 + isHomePage() [sol@hiqdev.com]
    - [0393701] 2016-08-13 changed bootstrapping not finished [sol@hiqdev.com]
    - [87a496c] 2016-08-13 + bootstrap themeManager [sol@hiqdev.com]
    - [b2dd956] 2016-07-16 csfixed [sol@hiqdev.com]
- Changed: redone to `composer-config-plugin`
    - [46bc352] 2016-05-20 fixed module adding, removed Plugin.php [sol@hiqdev.com]
    - [14ed956] 2016-05-19 redone to composer-config-plugin [sol@hiqdev.com]
    - [0b8316a] 2016-05-04 inited tests [sol@hiqdev.com]
    - [95a5da1] 2016-05-04 changed ThemeManager to be more lazy in setting theme [sol@hiqdev.com]
    - [2b63cdc] 2016-05-04 added views and widgets path parametrizing [sol@hiqdev.com]
    - [5a428dc] 2016-04-29 csfixed [sol@hiqdev.com]
    - [c440e44] 2016-04-29 rehideved [sol@hiqdev.com]
    - [9c06c71] 2016-04-29 redone `yii2-extraconfig.php` to `hisite-config.php` [sol@hiqdev.com]
    - [91f43e8] 2016-02-29 + require yii2-collection [sol@hiqdev.com]
    - [94faceb] 2016-02-29 removing bootstrapping [sol@hiqdev.com]
    - [a0e282c] 2016-02-29 + yii-extraconfig [sol@hiqdev.com]
    - [cbb82cb] 2016-02-24 - require plugin manager [sol@hiqdev.com]
- Fixed minor issues
    - [7f5d47f] 2016-02-24 phpcsfixed [sol@hiqdev.com]
    - [650863d] 2016-02-24 rehideved [sol@hiqdev.com]
    - [c85f4dd] 2016-02-17 fixed PHP notice [sol@hiqdev.com]
    - [3898f12] 2016-01-27 Add renderAjax if request isAjax [andreyklochok@gmail.com]
    - [219c4e1] 2015-12-09 Fixed Settings::load() signature [d.naumenko.a@gmail.com]
    - [108f84d] 2015-11-23 Changed namespace to yii2-collection [d.naumenko.a@gmail.com]
    - [479f995] 2015-11-05 Chaching placeholders removed [d.naumenko.a@gmail.com]
- Fixed getting current theme
    - [c5ad453] 2016-02-24 added parameters checks [sol@hiqdev.com]
    - [3b8e173] 2015-08-25 fixed getting current theme [sol@hiqdev.com]
    - [d3afbe9] 2015-08-18 + better getting default theme [sol@hiqdev.com]
- Changed: moved to src
    - [18e4255] 2015-08-18 php-cs-fixed [sol@hiqdev.com]
    - [9fc695f] 2015-08-18 + `.php_cs` [sol@hiqdev.com]
    - [f46612a] 2015-08-18 moved to src [sol@hiqdev.com]
    - [10f3fa6] 2015-08-18 moved to src [sol@hiqdev.com]
    - [b0aa3f5] 2015-08-18 moved to src [sol@hiqdev.com]
    - [68e389d] 2015-08-18 rehideved with new features: better README and .gitignore [sol@hiqdev.com]
- Added AssetManager and AssetConverter
    - [87ca207] 2015-06-12 improved RegisterAssets - moved to ThemeManager [sol@hiqdev.com]
    - [28c4cd5] 2015-06-11 + AssetConverter [sol@hiqdev.com]
    - [a64ccb3] 2015-06-11 + AssetManager, renamed to ThemeManager [sol@hiqdev.com]
    - [a703a1b] 2015-06-10 * Theme: + assets and get/registerAssets [sol@hiqdev.com]
- Added basics
    - [765ff2a] 2015-06-10 hideved [sol@hiqdev.com]
    - [7c492ea] 2015-06-10 + proper finding settings class at Theme [sol@hiqdev.com]
    - [a95617b] 2015-06-02 fixed theme saving [sol@hiqdev.com]
    - [b0d0772] 2015-05-29 simplified access to current theme settings [sol@hiqdev.com]
    - [874899d] 2015-05-28 Added missing use for InvalidConfigException [d.naumenko.a@gmail.com]
    - [0ee7e85] 2015-05-27 + Settings [sol@hiqdev.com]
    - [42d384c] 2015-05-26 hideved [sol@hiqdev.com]
    - [73b4ea1] 2015-05-20 + real Manager and Theme [sol@hiqdev.com]
    - [3d9e1b3] 2015-04-18 doc [sol@hiqdev.com]
    - [40e739b] 2015-04-18 doc [sol@hiqdev.com]
    - [67527f2] 2015-04-18 inited [sol@hiqdev.com]

## [Development started] - 2015-04-18

[46bc352]: https://github.com/hiqdev/yii2-thememanager/commit/46bc352
[14ed956]: https://github.com/hiqdev/yii2-thememanager/commit/14ed956
[0b8316a]: https://github.com/hiqdev/yii2-thememanager/commit/0b8316a
[95a5da1]: https://github.com/hiqdev/yii2-thememanager/commit/95a5da1
[2b63cdc]: https://github.com/hiqdev/yii2-thememanager/commit/2b63cdc
[5a428dc]: https://github.com/hiqdev/yii2-thememanager/commit/5a428dc
[c440e44]: https://github.com/hiqdev/yii2-thememanager/commit/c440e44
[9c06c71]: https://github.com/hiqdev/yii2-thememanager/commit/9c06c71
[91f43e8]: https://github.com/hiqdev/yii2-thememanager/commit/91f43e8
[94faceb]: https://github.com/hiqdev/yii2-thememanager/commit/94faceb
[a0e282c]: https://github.com/hiqdev/yii2-thememanager/commit/a0e282c
[cbb82cb]: https://github.com/hiqdev/yii2-thememanager/commit/cbb82cb
[7f5d47f]: https://github.com/hiqdev/yii2-thememanager/commit/7f5d47f
[650863d]: https://github.com/hiqdev/yii2-thememanager/commit/650863d
[c85f4dd]: https://github.com/hiqdev/yii2-thememanager/commit/c85f4dd
[3898f12]: https://github.com/hiqdev/yii2-thememanager/commit/3898f12
[219c4e1]: https://github.com/hiqdev/yii2-thememanager/commit/219c4e1
[108f84d]: https://github.com/hiqdev/yii2-thememanager/commit/108f84d
[479f995]: https://github.com/hiqdev/yii2-thememanager/commit/479f995
[c5ad453]: https://github.com/hiqdev/yii2-thememanager/commit/c5ad453
[3b8e173]: https://github.com/hiqdev/yii2-thememanager/commit/3b8e173
[d3afbe9]: https://github.com/hiqdev/yii2-thememanager/commit/d3afbe9
[18e4255]: https://github.com/hiqdev/yii2-thememanager/commit/18e4255
[9fc695f]: https://github.com/hiqdev/yii2-thememanager/commit/9fc695f
[f46612a]: https://github.com/hiqdev/yii2-thememanager/commit/f46612a
[10f3fa6]: https://github.com/hiqdev/yii2-thememanager/commit/10f3fa6
[b0aa3f5]: https://github.com/hiqdev/yii2-thememanager/commit/b0aa3f5
[68e389d]: https://github.com/hiqdev/yii2-thememanager/commit/68e389d
[87ca207]: https://github.com/hiqdev/yii2-thememanager/commit/87ca207
[28c4cd5]: https://github.com/hiqdev/yii2-thememanager/commit/28c4cd5
[a64ccb3]: https://github.com/hiqdev/yii2-thememanager/commit/a64ccb3
[a703a1b]: https://github.com/hiqdev/yii2-thememanager/commit/a703a1b
[765ff2a]: https://github.com/hiqdev/yii2-thememanager/commit/765ff2a
[7c492ea]: https://github.com/hiqdev/yii2-thememanager/commit/7c492ea
[a95617b]: https://github.com/hiqdev/yii2-thememanager/commit/a95617b
[b0d0772]: https://github.com/hiqdev/yii2-thememanager/commit/b0d0772
[874899d]: https://github.com/hiqdev/yii2-thememanager/commit/874899d
[0ee7e85]: https://github.com/hiqdev/yii2-thememanager/commit/0ee7e85
[42d384c]: https://github.com/hiqdev/yii2-thememanager/commit/42d384c
[73b4ea1]: https://github.com/hiqdev/yii2-thememanager/commit/73b4ea1
[3d9e1b3]: https://github.com/hiqdev/yii2-thememanager/commit/3d9e1b3
[40e739b]: https://github.com/hiqdev/yii2-thememanager/commit/40e739b
[67527f2]: https://github.com/hiqdev/yii2-thememanager/commit/67527f2
[ef164cf]: https://github.com/hiqdev/yii2-thememanager/commit/ef164cf
[d90ee48]: https://github.com/hiqdev/yii2-thememanager/commit/d90ee48
[0d9f909]: https://github.com/hiqdev/yii2-thememanager/commit/0d9f909
[0393701]: https://github.com/hiqdev/yii2-thememanager/commit/0393701
[87a496c]: https://github.com/hiqdev/yii2-thememanager/commit/87a496c
[b2dd956]: https://github.com/hiqdev/yii2-thememanager/commit/b2dd956
[4730098]: https://github.com/hiqdev/yii2-thememanager/commit/4730098
[10092cc]: https://github.com/hiqdev/yii2-thememanager/commit/10092cc
[e8a26cf]: https://github.com/hiqdev/yii2-thememanager/commit/e8a26cf
[d675571]: https://github.com/hiqdev/yii2-thememanager/commit/d675571
[40907ee]: https://github.com/hiqdev/yii2-thememanager/commit/40907ee
[a3dbaec]: https://github.com/hiqdev/yii2-thememanager/commit/a3dbaec
[6190dc6]: https://github.com/hiqdev/yii2-thememanager/commit/6190dc6
[f2713bf]: https://github.com/hiqdev/yii2-thememanager/commit/f2713bf
[f497ed7]: https://github.com/hiqdev/yii2-thememanager/commit/f497ed7
[e2a5674]: https://github.com/hiqdev/yii2-thememanager/commit/e2a5674
[4ca3a60]: https://github.com/hiqdev/yii2-thememanager/commit/4ca3a60
[4eeb955]: https://github.com/hiqdev/yii2-thememanager/commit/4eeb955
[ce60121]: https://github.com/hiqdev/yii2-thememanager/commit/ce60121
[97b9234]: https://github.com/hiqdev/yii2-thememanager/commit/97b9234
[f834412]: https://github.com/hiqdev/yii2-thememanager/commit/f834412
[7d19283]: https://github.com/hiqdev/yii2-thememanager/commit/7d19283
[a26edd8]: https://github.com/hiqdev/yii2-thememanager/commit/a26edd8
[87125e7]: https://github.com/hiqdev/yii2-thememanager/commit/87125e7
[ea0c7a7]: https://github.com/hiqdev/yii2-thememanager/commit/ea0c7a7
[1f9a236]: https://github.com/hiqdev/yii2-thememanager/commit/1f9a236

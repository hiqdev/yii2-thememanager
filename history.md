hiqdev/yii2-thememanager
------------------------

## [0.3.0] - 2017-01-12

- Fixed minor issues
    - [645bac7] 2017-01-12 csfixed [@hiqsol]
    - [ea1c1cd] 2016-12-30 Translations updated [@SilverFire]
    - [f300ba3] 2016-12-30 Added a unified method for producing an image from a theme asset [@tafid]
    - [43a4ccb] 2016-12-30 Improved collect data [@tafid]
    - [77dac5b] 2016-12-29 Use `YII_DEBUG_MODULE` constant instead of `YII_DEBUG` to add thememanager panel [@SilverFire]
    - [37941a7] 2016-12-23 doc [@hiqsol]
    - [5b2a1a3] 2016-12-19 redone translation category to `hiqdev:thememanager` [@hiqsol]
    - [466ba7d] 2016-12-19 redone translation category to `hiqdev:thememanager` [@hiqsol]
- Added Faq and TextPage widgets
    - [54a2c07] 2016-12-23 Added Faq widget [@tafid]
    - [9c38c60] 2016-12-21 Added TextPage widget [@tafid]
- Added abstract menus
    - [c829c74] 2016-12-22 + AbstractFooterMenu [@hiqsol]
    - [6425fcb] 2016-12-22 + SidebarMenu widget [@hiqsol]
    - [c64be6c] 2016-12-21 fixed menu interface: widget -> run, render -> widget [@hiqsol]
    - [bf8cd7d] 2016-12-21 Merge branch 'tofid' [@tafid]
    - [865f3a1] 2016-12-20 + abstract menus [@hiqsol]
- Removed widget, hasWidget and callStatic from ThemeManager, redone creating widgets to straight yii DI
    - [b59dfe6] 2016-12-21 redone Menu::render -> widget [@hiqsol]
    - [7356b05] 2016-12-21 removed widget, hasWidget and callStatic from ThemeManager [@hiqsol]
    - [407d4b8] 2016-12-21 + abstract menus [@hiqsol]
    - [f92ab1d] 2016-12-21 + Flashes widget (empty) [@hiqsol]
    - [65ed824] 2016-12-21 improved UserMenu widget [@hiqsol]
    - [c2fb625] 2016-12-20 redone config for straight DI [@hiqsol]

## [0.2.0] - 2016-12-06

- Added UserMenu, FancyPanel
    - [f7761a3] 2016-12-03 csfixed: changed header comment to phpdoc [@hiqsol]
    - [86eeff5] 2016-12-03 csfixed [@hiqsol]
    - [6a56a9e] 2016-12-03 used hidev-hiqdev instead of hidev-vendor [@hiqsol]
    - [143104e] 2016-12-02 used proper container definitions setting [@hiqsol]
    - [28c0c5e] 2016-11-29 translation [@tafid]
    - [ac24ec6] 2016-11-16 redone dependencies to definitions [@hiqsol]
    - [db5f0d8] 2016-11-16 added UserMenu widget [@hiqsol]
    - [c793f5f] 2016-11-16 redone widgets to yii dependency injection [@hiqsol]
    - [add8772] 2016-11-03 improved debug config [@hiqsol]
    - [6e0afba] 2016-10-25 csfixed [@hiqsol]
    - [f8c6d00] 2016-10-25 translations [@hiqsol]
    - [1f54379] 2016-10-20 Added php doc, added options to Html::img [@tafid]
    - [fdf724a] 2016-10-20 Removed NotSupported exception, publish logo [@tafid]
    - [34f2fe3] 2016-10-20 Fixed wrong message source [@SilverFire]
    - [46259ef] 2016-10-19 Fixed Settings::load() to work with defaults [@SilverFire]
    - [d09a08b] 2016-10-19 fixed for PHP 7.0 compatibility [@hiqsol]
    - [8dfae0a] 2016-10-06 Added FancyPanel widget [@tafid]
- Fixed many widgets
    - [8c23df8] 2016-10-23 redone SocialLinks widget [@hiqsol]
    - [65d6081] 2016-10-21 fixed LogoLink widget when no image given [@hiqsol]
    - [5d526c9] 2016-10-14 simplified LoginForm pages, shows, texts, disables [@hiqsol]
    - [f489bcd] 2016-10-14 + get text/bool attributes, init options and detectIcons [@hiqsol]
    - [6b68562] 2016-10-13 greatly improved LoginForm to be suitable for any login-like pages: signup, restore-password, reset-password [@hiqsol]
    - [f5b4445] 2016-10-12 * LoginForm: + signup & restore password page options [@hiqsol]
    - [9d8d39c] 2016-10-11 fixed CopyrightYears widget [@hiqsol]
- Added SessionSettingsStorage
    - [5b1b174] 2016-10-19 Implemented SettingsStorage usage [@SilverFire]
    - [1e32601] 2016-10-19 Added SessionSettingsStorage [@SilverFire]
    - [bed82dc] 2016-10-17 added detectInputType in LoginForm widget [@hiqsol]
- Added Themes debug panel
    - [0ebb43c] 2016-10-02 added themes debug panel [@hiqsol]
- Changed building pathMap
    - [b99abb3] 2016-10-01 improved building pathMap again with themes own pathMap [@hiqsol]
    - [022202a] 2016-09-29 improved building pathMap: adding app viewPath mapping by default and resolving aliases in pathMap [@hiqsol]

## [0.1.0] - 2016-09-28

- Changed: redone building theme pathMap with vars substituting
    - [cc5e84c] 2016-09-28 redone building theme pathMap with compilePathMap and substituteVars [@hiqsol]
    - [429f3ec] 2016-09-28 redone building pathMap with viewPath, widgetPaths and themedPaths [@hiqsol]
- Changed: redone widgets to pass params through config
    - [ef55143] 2016-09-21 redone widgets to pass params through config not code [@hiqsol]
    - [adb42d2] 2016-09-21 used original `widget()` function [@hiqsol]
    - [4fbc1bc] 2016-09-19 Change poweredBy view, add thememanager translate messages [@tafid]

## [0.0.2] - 2016-09-08

- Added widgets: OrganizationLink, SocialLinks, PoweredBy, LoginForm, Breadcrumbs
    - [d675571] 2016-09-02 added LoginForm widget [@hiqsol]
    - [40907ee] 2016-09-01 + PoweredBy widget [@hiqsol]
    - [a3dbaec] 2016-09-01 + widget path to pathMap [@hiqsol]
    - [f497ed7] 2016-08-26 added Breadcrumbs widget [@hiqsol]
    - [4ca3a60] 2016-08-26 + hasWidget() [@hiqsol]
    - [e2a5674] 2016-08-26 added Flash for Theme changed [@hiqsol]
    - [4eeb955] 2016-08-25 Fixed OrganizationLink from trim(variable) to trim(variable) !== "" [@tafid]
    - [ce60121] 2016-08-25 fixed OrganizationLink widget to use organizationName/Url [@hiqsol]
    - [97b9234] 2016-08-25 fixed typo [@hiqsol]
    - [f834412] 2016-08-25 Added SocialLinks widget, complemented OrganizationLink widget [@tafid]
    - [7d19283] 2016-08-25 added widgets [@hiqsol]
    - [a26edd8] 2016-08-25 + ThemeManager::widget() [@hiqsol]
    - [4730098] 2016-08-23 Grammar fix [@tafid]
- Added viewPaths parameter
    - [e8a26cf] 2016-09-02 csfixed [@hiqsol]
    - [6190dc6] 2016-08-31 redone pathDirs -> viewPaths [@hiqsol]
    - [f2713bf] 2016-08-28 forced adding pathDirs in Theme [@hiqsol]
    - [10092cc] 2016-08-22 + pathDirs parameter [@hiqsol]
- Removed View, AssetConverter and AssetManager
    - [1f9a236] 2016-08-23 removed View, AssetConverter and AssetManager [@hiqsol]
    - [87125e7] 2016-08-23 removed AssetManager from bootstrap [@hiqsol]
    - [ea0c7a7] 2016-08-23 removed AssetManager from config [@hiqsol]

## [0.0.1] - 2016-08-22

- Changed bootstrapping
    - [ef164cf] 2016-08-19 + isHomePage to ThemeManager component [@hiqsol]
    - [d90ee48] 2016-08-19 csfixed [@hiqsol]
    - [0d9f909] 2016-08-18 + isHomePage() [@hiqsol]
    - [0393701] 2016-08-13 changed bootstrapping not finished [@hiqsol]
    - [87a496c] 2016-08-13 + bootstrap themeManager [@hiqsol]
    - [b2dd956] 2016-07-16 csfixed [@hiqsol]
- Changed: redone to `composer-config-plugin`
    - [46bc352] 2016-05-20 fixed module adding, removed Plugin.php [@hiqsol]
    - [14ed956] 2016-05-19 redone to composer-config-plugin [@hiqsol]
    - [0b8316a] 2016-05-04 inited tests [@hiqsol]
    - [95a5da1] 2016-05-04 changed ThemeManager to be more lazy in setting theme [@hiqsol]
    - [2b63cdc] 2016-05-04 added views and widgets path parametrizing [@hiqsol]
    - [5a428dc] 2016-04-29 csfixed [@hiqsol]
    - [c440e44] 2016-04-29 rehideved [@hiqsol]
    - [9c06c71] 2016-04-29 redone `yii2-extraconfig.php` to `hisite-config.php` [@hiqsol]
    - [91f43e8] 2016-02-29 + require yii2-collection [@hiqsol]
    - [94faceb] 2016-02-29 removing bootstrapping [@hiqsol]
    - [a0e282c] 2016-02-29 + yii-extraconfig [@hiqsol]
    - [cbb82cb] 2016-02-24 - require plugin manager [@hiqsol]
- Fixed minor issues
    - [7f5d47f] 2016-02-24 phpcsfixed [@hiqsol]
    - [650863d] 2016-02-24 rehideved [@hiqsol]
    - [c85f4dd] 2016-02-17 fixed PHP notice [@hiqsol]
    - [3898f12] 2016-01-27 Add renderAjax if request isAjax [@tafid]
    - [219c4e1] 2015-12-09 Fixed Settings::load() signature [@SilverFire]
    - [108f84d] 2015-11-23 Changed namespace to yii2-collection [@SilverFire]
    - [479f995] 2015-11-05 Chaching placeholders removed [@SilverFire]
- Fixed getting current theme
    - [c5ad453] 2016-02-24 added parameters checks [@hiqsol]
    - [3b8e173] 2015-08-25 fixed getting current theme [@hiqsol]
    - [d3afbe9] 2015-08-18 + better getting default theme [@hiqsol]
- Changed: moved to src
    - [18e4255] 2015-08-18 php-cs-fixed [@hiqsol]
    - [9fc695f] 2015-08-18 + `.php_cs` [@hiqsol]
    - [f46612a] 2015-08-18 moved to src [@hiqsol]
    - [10f3fa6] 2015-08-18 moved to src [@hiqsol]
    - [b0aa3f5] 2015-08-18 moved to src [@hiqsol]
    - [68e389d] 2015-08-18 rehideved with new features: better README and .gitignore [@hiqsol]
- Added AssetManager and AssetConverter
    - [87ca207] 2015-06-12 improved RegisterAssets - moved to ThemeManager [@hiqsol]
    - [28c4cd5] 2015-06-11 + AssetConverter [@hiqsol]
    - [a64ccb3] 2015-06-11 + AssetManager, renamed to ThemeManager [@hiqsol]
    - [a703a1b] 2015-06-10 * Theme: + assets and get/registerAssets [@hiqsol]
- Added basics
    - [765ff2a] 2015-06-10 hideved [@hiqsol]
    - [7c492ea] 2015-06-10 + proper finding settings class at Theme [@hiqsol]
    - [a95617b] 2015-06-02 fixed theme saving [@hiqsol]
    - [b0d0772] 2015-05-29 simplified access to current theme settings [@hiqsol]
    - [874899d] 2015-05-28 Added missing use for InvalidConfigException [@SilverFire]
    - [0ee7e85] 2015-05-27 + Settings [@hiqsol]
    - [42d384c] 2015-05-26 hideved [@hiqsol]
    - [73b4ea1] 2015-05-20 + real Manager and Theme [@hiqsol]
    - [3d9e1b3] 2015-04-18 doc [@hiqsol]
    - [40e739b] 2015-04-18 doc [@hiqsol]
    - [67527f2] 2015-04-18 inited [@hiqsol]

## [Development started] - 2015-04-18

[@hiqsol]: https://github.com/hiqsol
[sol@hiqdev.com]: https://github.com/hiqsol
[@SilverFire]: https://github.com/SilverFire
[d.naumenko.a@gmail.com]: https://github.com/SilverFire
[@tafid]: https://github.com/tafid
[andreyklochok@gmail.com]: https://github.com/tafid
[@BladeRoot]: https://github.com/BladeRoot
[bladeroot@gmail.com]: https://github.com/BladeRoot
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
[cc5e84c]: https://github.com/hiqdev/yii2-thememanager/commit/cc5e84c
[429f3ec]: https://github.com/hiqdev/yii2-thememanager/commit/429f3ec
[ef55143]: https://github.com/hiqdev/yii2-thememanager/commit/ef55143
[adb42d2]: https://github.com/hiqdev/yii2-thememanager/commit/adb42d2
[4fbc1bc]: https://github.com/hiqdev/yii2-thememanager/commit/4fbc1bc
[f7761a3]: https://github.com/hiqdev/yii2-thememanager/commit/f7761a3
[86eeff5]: https://github.com/hiqdev/yii2-thememanager/commit/86eeff5
[6a56a9e]: https://github.com/hiqdev/yii2-thememanager/commit/6a56a9e
[143104e]: https://github.com/hiqdev/yii2-thememanager/commit/143104e
[28c0c5e]: https://github.com/hiqdev/yii2-thememanager/commit/28c0c5e
[ac24ec6]: https://github.com/hiqdev/yii2-thememanager/commit/ac24ec6
[db5f0d8]: https://github.com/hiqdev/yii2-thememanager/commit/db5f0d8
[c793f5f]: https://github.com/hiqdev/yii2-thememanager/commit/c793f5f
[add8772]: https://github.com/hiqdev/yii2-thememanager/commit/add8772
[6e0afba]: https://github.com/hiqdev/yii2-thememanager/commit/6e0afba
[f8c6d00]: https://github.com/hiqdev/yii2-thememanager/commit/f8c6d00
[8c23df8]: https://github.com/hiqdev/yii2-thememanager/commit/8c23df8
[65d6081]: https://github.com/hiqdev/yii2-thememanager/commit/65d6081
[1f54379]: https://github.com/hiqdev/yii2-thememanager/commit/1f54379
[fdf724a]: https://github.com/hiqdev/yii2-thememanager/commit/fdf724a
[34f2fe3]: https://github.com/hiqdev/yii2-thememanager/commit/34f2fe3
[46259ef]: https://github.com/hiqdev/yii2-thememanager/commit/46259ef
[d09a08b]: https://github.com/hiqdev/yii2-thememanager/commit/d09a08b
[5b1b174]: https://github.com/hiqdev/yii2-thememanager/commit/5b1b174
[1e32601]: https://github.com/hiqdev/yii2-thememanager/commit/1e32601
[bed82dc]: https://github.com/hiqdev/yii2-thememanager/commit/bed82dc
[5d526c9]: https://github.com/hiqdev/yii2-thememanager/commit/5d526c9
[f489bcd]: https://github.com/hiqdev/yii2-thememanager/commit/f489bcd
[6b68562]: https://github.com/hiqdev/yii2-thememanager/commit/6b68562
[f5b4445]: https://github.com/hiqdev/yii2-thememanager/commit/f5b4445
[9d8d39c]: https://github.com/hiqdev/yii2-thememanager/commit/9d8d39c
[8dfae0a]: https://github.com/hiqdev/yii2-thememanager/commit/8dfae0a
[0ebb43c]: https://github.com/hiqdev/yii2-thememanager/commit/0ebb43c
[b99abb3]: https://github.com/hiqdev/yii2-thememanager/commit/b99abb3
[022202a]: https://github.com/hiqdev/yii2-thememanager/commit/022202a
[645bac7]: https://github.com/hiqdev/yii2-thememanager/commit/645bac7
[ea1c1cd]: https://github.com/hiqdev/yii2-thememanager/commit/ea1c1cd
[f300ba3]: https://github.com/hiqdev/yii2-thememanager/commit/f300ba3
[43a4ccb]: https://github.com/hiqdev/yii2-thememanager/commit/43a4ccb
[77dac5b]: https://github.com/hiqdev/yii2-thememanager/commit/77dac5b
[37941a7]: https://github.com/hiqdev/yii2-thememanager/commit/37941a7
[54a2c07]: https://github.com/hiqdev/yii2-thememanager/commit/54a2c07
[c829c74]: https://github.com/hiqdev/yii2-thememanager/commit/c829c74
[6425fcb]: https://github.com/hiqdev/yii2-thememanager/commit/6425fcb
[c64be6c]: https://github.com/hiqdev/yii2-thememanager/commit/c64be6c
[bf8cd7d]: https://github.com/hiqdev/yii2-thememanager/commit/bf8cd7d
[9c38c60]: https://github.com/hiqdev/yii2-thememanager/commit/9c38c60
[b59dfe6]: https://github.com/hiqdev/yii2-thememanager/commit/b59dfe6
[7356b05]: https://github.com/hiqdev/yii2-thememanager/commit/7356b05
[407d4b8]: https://github.com/hiqdev/yii2-thememanager/commit/407d4b8
[f92ab1d]: https://github.com/hiqdev/yii2-thememanager/commit/f92ab1d
[65ed824]: https://github.com/hiqdev/yii2-thememanager/commit/65ed824
[c2fb625]: https://github.com/hiqdev/yii2-thememanager/commit/c2fb625
[865f3a1]: https://github.com/hiqdev/yii2-thememanager/commit/865f3a1
[5b2a1a3]: https://github.com/hiqdev/yii2-thememanager/commit/5b2a1a3
[466ba7d]: https://github.com/hiqdev/yii2-thememanager/commit/466ba7d
[Under development]: https://github.com/hiqdev/yii2-thememanager/compare/0.2.0...HEAD
[0.2.0]: https://github.com/hiqdev/yii2-thememanager/compare/0.1.0...0.2.0
[0.1.0]: https://github.com/hiqdev/yii2-thememanager/compare/0.0.2...0.1.0
[0.0.2]: https://github.com/hiqdev/yii2-thememanager/compare/0.0.1...0.0.2
[0.0.1]: https://github.com/hiqdev/yii2-thememanager/releases/tag/0.0.1
[0.3.0]: https://github.com/hiqdev/yii2-thememanager/compare/0.2.0...0.3.0

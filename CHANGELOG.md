# hiqdev/yii2-thememanager

## [0.4.1] - 2022-06-29

- ThemeManager have to set View::theme before render ([@SilverFire])

## [0.4.0] - 2022-06-29

- Do not initialize a session connect unless required ([@SilverFire])
- Added `AlertWidget` ([@tafid], [@SilverFire])
- LoginForm::getBoolAttributes() will be retrun scenario active only ([@tafid])
- Other minor changes ([smy980807@ukr.net], [@hiqsol], [@SilverFire])

## [0.3.2] - 2022-06-29

- Fixed minor issues ([@hiqsol], [@tafid])
- Added `NavbarMenu` ([@hiqsol])
- Moved theme tuning views to `src/views/themes` <- src/themes ([@hiqsol])
- Improved docs ([@hiqsol])
- Added `Markdown` widget ([@hiqsol])
- Fixed configs ([@hiqsol])

## [0.3.1] - 2022-06-29

- Renamed poweredBy params to dot style ([@hiqsol])
- Added `OrientationInterface` ([@tafid])
- Added `themeManager.defaultTheme` parameter ([@hiqsol])
- Added Faq, FancyPanel widgets ([@tafid])
- Added in-site theming ([@hiqsol])
- Added LogoLink widget ([@tafid], [@hiqsol])
- Added `DetailedTheme` class ([@tafid])

## [0.3.0] - 2022-06-29

- Fixed minor issues ([@hiqsol], [@SilverFire], [@tafid])
- Added Faq and TextPage widgets ([@tafid])
- Added abstract menus ([@hiqsol])
- Removed widget, hasWidget and callStatic from ThemeManager, redone creating widgets to straight yii DI ([@hiqsol])

## [0.2.0] - 2022-06-29

- Added UserMenu, FancyPanel ([@hiqsol], [@tafid], [@SilverFire])
- Fixed many widgets ([@hiqsol])
- Added SessionSettingsStorage ([@SilverFire], [@hiqsol])
- Added Themes debug panel ([@hiqsol])
- Changed building pathMap ([@hiqsol])

## [0.1.0] - 2022-06-29

- Changed: redone building theme pathMap with vars substituting ([@hiqsol])
- Changed: redone widgets to pass params through config ([@hiqsol], [@tafid])

## [0.0.2] - 2022-06-29

- Added widgets: OrganizationLink, SocialLinks, PoweredBy, LoginForm, Breadcrumbs ([@hiqsol], [@tafid])
- Added viewPaths parameter ([@hiqsol])
- Removed View, AssetConverter and AssetManager ([@hiqsol])

## [0.0.1] - 2022-06-29

- Changed bootstrapping ([@hiqsol])
- Changed: redone to `composer-config-plugin` ([@hiqsol])
- Fixed minor issues ([@hiqsol], [@tafid], [@SilverFire])
- Fixed getting current theme ([@hiqsol])
- Changed: moved to src ([@hiqsol])
- Added AssetManager and AssetConverter ([@hiqsol])
- Added basics ([@hiqsol], [@SilverFire])

## [Development started] - 2022-06-29

## [dev] - 2022-06-29

[@hiqsol]: https://github.com/hiqsol
[sol@hiqdev.com]: https://github.com/hiqsol
[@SilverFire]: https://github.com/SilverFire
[d.naumenko.a@gmail.com]: https://github.com/SilverFire
[@tafid]: https://github.com/tafid
[andreyklochok@gmail.com]: https://github.com/tafid
[@BladeRoot]: https://github.com/BladeRoot
[bladeroot@gmail.com]: https://github.com/BladeRoot
[Under development]: https://github.com/hiqdev/yii2-thememanager/compare/0.3.2...HEAD
[0.2.0]: https://github.com/hiqdev/yii2-thememanager/compare/0.1.0...0.2.0
[0.1.0]: https://github.com/hiqdev/yii2-thememanager/compare/0.0.2...0.1.0
[0.0.2]: https://github.com/hiqdev/yii2-thememanager/compare/0.0.1...0.0.2
[0.0.1]: https://github.com/hiqdev/yii2-thememanager/releases/tag/0.0.1
[0.3.0]: https://github.com/hiqdev/yii2-thememanager/compare/0.2.0...0.3.0
[0.3.1]: https://github.com/hiqdev/yii2-thememanager/compare/0.3.0...0.3.1
[0.3.2]: https://github.com/hiqdev/yii2-thememanager/compare/0.3.1...0.3.2
[Development started]: https://github.com/hiqdev/yii2-thememanager/compare/dev...Development started
[0.4.0]: https://github.com/hiqdev/yii2-thememanager/compare/0.3.2...0.4.0
[0.4.1]: https://github.com/hiqdev/yii2-thememanager/compare/0.4.0...0.4.1

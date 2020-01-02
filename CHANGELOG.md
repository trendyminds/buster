# Buster Changelog

## 1.1.1 - 2020-01-02

### Changed
- Update Node packages to address vulnerabilities provided by GitHub

## 1.1.0 - 2019-09-09

### Added
- Plugin now flushes data caches when running

## 1.0.6.1 - 2019-04-05

### Fixed
- Use `getHostInfo` to generate URLs that can be called when logged out

## 1.0.6 - 2019-04-05

### Fixed
- Use `actionUrl` instead of relying on `{{siteUrl}}` to generate the cache clearing URL

## 1.0.5 - 2019-02-01

### Fixed
- Fix build

## 1.0.4 - 2019-02-01

### Fixed
- Throw exception on error so $.post responds with correct method

## 1.0.3 - 2019-02-01

### Fixed
- Corrected issue where user lacked privileges to clear cache unless they had access to the respective utility

## 1.0.2 - 2019-02-01

### Added
- Setup ability to clear cache using a URL request

## 1.0.1 - 2019-02-01

### Added
- Compress all assets

## 1.0.0 - 2019-02-01

### Added
- Initial release

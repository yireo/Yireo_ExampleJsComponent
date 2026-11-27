# Changelog
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]

## [0.0.1] - 27 November 2026
### Added
- Example block on every frontend page that passes a message to a RequireJS component, which logs it to the browser console

### Changed
- Composer requirements modernized and Magento_Store declared as module dependency
- Removed the generic RequireJS alias `example`; use `Yireo_ExampleJsComponent/js/example` instead

### Fixed
- Template output is now escaped
- Inline script replaced with `x-magento-init` so the module complies with the Content Security Policy

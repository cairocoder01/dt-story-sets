### Task Summary
Rename the plugin infrastructure from the `corsacca-starter-template` to `dt-story-sets`. This includes updating all namespaces, text domains, and file references in PHP, JS, CSS, and PO/MO files, as well as updating the repository links in README.md and version control settings.

### Files to Modify
- `composer.json` — Update name and namespace.
- `dt-story-sets.php` — Update plugin header and namespace references.
- `languages/*.po` / `*.mo` — Update project references to `dt-story-sets`.
- `README.md` — Update all repo links to `cairocoder01/dt-story-sets`.
- `version-control.json` — Update for plugin update checker.
- All files in `admin/`, `post-type/`, `rest-api/`, `site-link/`, `tile/`, `magic-link/`, `test/` — Perform search-and-replace for the old slug (`corsacca-starter-template`) and old namespaces.

### Implementation Plan
1. Search and replace all instances of `corsacca-starter-template` with `dt-story-sets` across the repository.
2. Update the `composer.json` file with the correct name and namespace (`DT_Story_Sets`).
3. Update the main plugin file `dt-story-sets.php` to reflect the correct text domain and plugin name in the header.
4. Update `version-control.json` to ensure the update checker points to the correct GitHub repository (`cairocoder01/dt-story-sets`).
5. Update repository URLs in `README.md` and any other documentation files.
6. Review and update `languages/*.po` files to reflect the correct project path for translation.
7. Address any TODO comments related to renaming discovered during the process.

### Acceptance Criteria
- [ ] PHP lint passes on all modified files.
- [ ] PHPCS reports zero violations on modified files.
- [ ] PHPUnit multisite suite passes (after resolving environment issues).
- [ ] Plugin name and slug are consistent as `dt-story-sets`.
- [ ] Plugin update checker functions correctly using the new repository URL.
- [ ] README.md links are updated to `cairocoder01/dt-story-sets`.
- [ ] No remaining references to `corsacca-starter-template` in the codebase.

### Edge Cases & Constraints
- Do not modify files in `vendor/` or `node_modules/`.
- Ensure the main plugin file header remains valid for WordPress.
- Keep the plugin slug consistently `dt-story-sets` without expanding it to `disciple-tools-`.
- Ensure translation files are updated correctly.

### Task Summary
Rename the plugin from the template name (disciple-tools-plugin-starter) to `dt-story-sets`. This includes renaming namespaces, function prefixes, file contents, updating TODO comments, updating repository links, and enabling the plugin update checker.

### Files to Modify
- `composer.json` — Update package name, description, and autoloading namespace.
- `package.json` — Update project name and description.
- All PHP files — Search and replace the old namespace and function prefixes with the new `DtStorySets` namespace and `dt_story_sets_` prefix.
- `README.md` — Update all documentation links to `cairocoder01/dt-story-sets`.
- Any other configuration files (e.g., `plugin.php` if it exists in the root) — Update headers and references to the old name.

### Implementation Plan
1.  Perform a comprehensive search for the old plugin name and namespace across the repository to identify all locations requiring updates.
2.  Update `composer.json` and `package.json` with the new name and configuration.
3.  Refactor namespaces in all PHP files to `DtStorySets`.
4.  Rename function prefixes from the old `dt_plugin_starter_` (or similar) to `dt_story_sets_`.
5.  Address all `TODO` comments related to renaming throughout the codebase.
6.  Update `README.md` and documentation files to reflect the new repository URL (`cairocoder01/dt-story-sets`).
7.  Implement the plugin update checker as required.
8.  Execute linting (`npm run lint`, `npm run prettier`, `./tests/test_phpcs.sh`) and the full test suite (`vendor/bin/phpunit`) to verify the changes.

### Acceptance Criteria
- [ ] All files containing the old plugin name are updated.
- [ ] Namespaces and function prefixes are consistent and updated.
- [ ] PHP lint passes on all modified files.
- [ ] PHPCS reports zero violations.
- [ ] PHPUnit multisite suite passes.
- [ ] Plugin update checker is integrated.
- [ ] All repository links in documentation point to `cairocoder01/dt-story-sets`.

### Edge Cases & Constraints
- Do not modify the module-loading block in `functions.php`.
- Do not drop or alter existing database tables.
- Ensure hook names are updated to match the new function prefixes.
- Use `esc_html()`, `esc_attr()`, `esc_url()` consistently for all output changes.
- Ensure all user input at boundaries is properly sanitized.

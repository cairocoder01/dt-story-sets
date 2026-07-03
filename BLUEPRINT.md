### Task Summary
Rename the plugin from the generic starter template name to `dt-story-sets`. This involves updating namespaces, plugin headers, file names, documentation links, and enabling the plugin update checker.

### Files to Modify
- `dt-story-sets.php` — Update plugin header, namespaces, and main class initialization.
- `composer.json` — Update name and autoload namespaces.
- `README.md` — Update all links to `cairocoder01/dt-story-sets`.
- All PHP files in subdirectories (`admin/`, `post-type/`, `rest-api/`, `site-link/`, `tile/`) — Update namespaces and function prefixes.

### Implementation Plan
1. Search the codebase for references to the old starter template name and namespace.
2. Update `composer.json` with the correct project name `dt-story-sets` and update the PSR-4 autoloading namespace.
3. Update `dt-story-sets.php` to reflect the new plugin name in headers and main class instantiation.
4. Perform a global search-and-replace for the old namespace/prefix (e.g., `DtPluginStarter`) to the new one (e.g., `DtStorySets`).
5. Update all repository links in `README.md` and other documentation to `cairocoder01/dt-story-sets`.
6. Enable and configure the plugin update checker to point to `cairocoder01/dt-story-sets`.
7. Address any TODO comments found during the refactoring that reference the rename task.

### Acceptance Criteria
- [ ] PHP lint passes on all modified files
- [ ] PHPCS reports zero violations on modified files
- [ ] PHPUnit multisite suite passes
- [ ] Plugin is correctly named and registered in WordPress
- [ ] All documentation links correctly point to `cairocoder01/dt-story-sets`
- [ ] Namespace and function prefixes are consistent across the codebase

### Edge Cases & Constraints
- Do not modify files in `vendor/`.
- Ensure the plugin update checker is correctly configured for the new repository.
- Do not drop or alter existing database tables.

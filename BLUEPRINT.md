### Task Summary
Rename the plugin's internal identifiers, namespaces, and documentation to match `dt-story-sets` and update repository references. Implement a GitHub-based update checker and ensure all links point to the `cairocoder01/dt-story-sets` repository.

### Files to Modify
- `composer.json` — Update package name, namespace, and autoloading.
- `package.json` — Update name and description.
- `dt-story-sets.php` (or identified main plugin file) — Update plugin header and namespace.
- `README.md` — Update repository links and documentation.
- All PHP files — Rename namespaces and generic strings to match the new plugin name.

### Implementation Plan
1. Use `grep` to identify all occurrences of the starter plugin name or generic namespace in the codebase.
2. Rename the main plugin file to `dt-story-sets.php` if it retains the starter name.
3. Update `composer.json` to set the new package name and ensure PSR-4 autoloading uses the new namespace (e.g., `DtStorySets`).
4. Perform a find-and-replace for the old namespace across all PHP files to the new namespace.
5. Implement the GitHub update checker in the main plugin file, configuring it to track `cairocoder01/dt-story-sets`.
6. Update all URLs, badges, and documentation links in `README.md` and the `documentation/` directory to point to `cairocoder01/dt-story-sets`.
7. Verify functionality and structure.

### Acceptance Criteria
- [ ] PHP lint passes with no errors
- [ ] PHPCS reports no violations on modified files
- [ ] PHPUnit multisite suite passes
- [ ] Plugin activates with correct name and metadata
- [ ] Update checker correctly identifies repository `cairocoder01/dt-story-sets`
- [ ] No broken links in `README.md` or documentation

### Edge Cases & Constraints
- Do not rename existing post type slugs (stored in `wp_posts.post_type`).
- Do not modify functions.php entry point (per rules).
- Ensure namespaces follow PSR-4 compliance.
- Do not drop or alter existing database tables.

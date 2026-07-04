### Task Summary
Rename the plugin from the `disciple-tools-plugin-starter` structure to `dt-story-sets`. This involves updating namespaces, function prefixes, file references, repository links in `README.md`, and enabling the plugin update checker to point to `cairocoder01/dt-story-sets`.

### Files to Modify
- `dt-story-sets.php` — Update plugin headers and main plugin functions.
- `composer.json` — Update package name and namespaces.
- `README.md` — Update all repository links and descriptions.
- All PHP files in `admin/`, `post-type/`, `rest-api/`, `site-link/`, `tile/` — Update namespaces and function prefixes.
- Any files identified containing `TODO` comments.

### Implementation Plan
1. Search the codebase for remaining occurrences of the starter plugin name/namespace and update them to `dt-story-sets`.
2. Rename classes, functions, and namespaces in all PHP files to use the `DtStorySets` prefix (or appropriate naming convention for this repo).
3. Update repository links and documentation in `README.md` to point to `cairocoder01/dt-story-sets`.
4. Implement the plugin update checker, ensuring it points to the `cairocoder01/dt-story-sets` repository.
5. Review and implement tasks listed in `TODO` comments throughout the codebase.
6. Verify changes: `php -l` on modified files, `./tests/test_phpcs.sh` for coding standards, and `WP_MULTISITE=1 vendor/bin/phpunit` for functionality.

### Acceptance Criteria
- [ ] PHP lint passes on all modified files
- [ ] PHPCS reports no violations
- [ ] PHPUnit multisite suite passes
- [ ] Plugin update checker is active and configured correctly
- [ ] All `TODO` comments resolved
- [ ] Repo links in `README.md` updated to `cairocoder01/dt-story-sets`

### Edge Cases & Constraints
- Do not modify `functions.php` (if it exists outside the plugin core) or the module-loading block.
- Do not modify files in `vendor/`, `node_modules/`, `dt-core/libraries/`, or `dt-core/dependencies/`.
- No hardcoded credentials or API keys.
- Run `npm run lint` and `npm run prettier` if JS files are modified.

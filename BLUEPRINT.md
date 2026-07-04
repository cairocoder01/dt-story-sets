### Task Summary
Rename the plugin from the starter template name to `dt-story-sets` across the codebase, ensuring all namespaces, file names, function prefixes, and references are consistent. Update all repository links to `cairocoder01/dt-story-sets` and review for any lingering TODOs or starter template references.

### Files to Modify
- `composer.json` — verify name and metadata.
- `dt-story-sets.php` — ensure all references to the old starter name are replaced with `dt-story-sets`.
- `languages/` — update .pot and .po files if they contain "starter" references.
- `README.md` — update all links and documentation to reflect the new plugin name.
- Any other files identified during a search for "starter" or old naming conventions.

### Implementation Plan
1. Search the entire repository for any remaining references to the old starter plugin name (e.g., "starter", "disciple-tools-plugin-starter") that should be updated.
2. Update all file names if any were missed and still contain the old name.
3. Update `README.md` to ensure all links point to `cairocoder01/dt-story-sets`.
4. Review and update translation files (`languages/default.pot` and others) to remove "Default starter functionality" or similar placeholders.
5. Verify the plugin update checker configuration in `dt-story-sets.php` correctly points to the new repo.
6. Run `php -l` on modified files, `./tests/test_phpcs.sh` for coding standards, and `WP_MULTISITE=1 vendor/bin/phpunit` to verify integrity.

### Acceptance Criteria
- [ ] PHP lint passes on all modified files
- [ ] PHPCS reports zero violations
- [ ] PHPUnit multisite suite passes
- [ ] No remaining references to "starter" or old plugin name in code, documentation, or language files
- [ ] All documentation links point to `cairocoder01/dt-story-sets`
- [ ] Plugin update checker is correctly configured

### Edge Cases & Constraints
- Do not modify files in `vendor/` or `node_modules/`.
- Do not drop or alter existing database tables.
- All strings must be properly localized using `__()` or related functions.

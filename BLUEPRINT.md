### Task Summary
Complete the rename of the `dt-story-sets` plugin by updating remaining hardcoded text domains (`disciple_tools` -> `dt-story-sets`), normalizing URL roots (e.g., `story-set_app` -> `dt-story-sets_app`), and updating option keys (e.g., `story-sets-option` -> `dt-story-sets-option`) for consistency, including a migration for existing options.

### Files to Modify
- magic-link/templates/dt-story-sets-template.php — Update text domain and URL references.
- admin/admin-menu-and-tabs.php — Update option keys and implement migration.
- magic-link/post-type-magic-link/magic-link-post-type.php — Update URL roots.
- All other PHP files — Perform a global search and replace for hardcoded `disciple_tools` text domain references.

### Implementation Plan
1.  Run a grep search for `disciple_tools` in the codebase (excluding `vendor` and `node_modules`) to identify all files needing text domain updates.
2.  Update all identified files to use `dt-story-sets` as the text domain.
3.  In `admin/admin-menu-and-tabs.php`, rename the option key to `dt-story-sets-option`. Implement a migration in the plugin activation hook (in `dt-story-sets.php`) to transfer existing data from `story-sets-option` to `dt-story-sets-option`, then delete the old option.
4.  In `magic-link/` files, update URL roots from `story-set_app` to `dt-story-sets_app`.
5.  Verify all GitHub URLs and references in the codebase point to `cairocoder01/dt-story-sets`.
6.  Run `php -l` and `./tests/test_phpcs.sh` to ensure code quality, and fix any violations.
7.  Run `WP_MULTISITE=1 vendor/bin/phpunit` to verify functionality. If tests fail due to missing environment files, attempt to run `tests/install-wp-tests.sh` to resolve the environment issues before proceeding.

### Acceptance Criteria
- [ ] PHP lint passes on all modified files
- [ ] PHPCS reports zero violations
- [ ] PHPUnit suite passes (no regressions)
- [ ] All instances of `disciple_tools` (text domain) replaced with `dt-story-sets`.
- [ ] Option key successfully migrated to `dt-story-sets-option`.
- [ ] URL roots normalized to `dt-story-sets_app`.
- [ ] Plugin version-control URLs correctly point to `cairocoder01/dt-story-sets`.

### Edge Cases & Constraints
- Ensure the migration only runs once on activation.
- Do not modify files in `vendor/` or `node_modules/`.
- Ensure all translations are correctly handled with the new domain.
- Verify that changing URL roots does not break existing, critical system magic links (if it does, document why it is necessary for consistency).

### Task Summary
Rename all internal references, classes, namespaces, and documentation links from the original starter template to `dt-story-sets` within the codebase, and finalize the plugin update checker configuration to point to the `cairocoder01/dt-story-sets` repository.

### Files to Modify
- `composer.json` — ensure metadata and namespaces are correct
- `package.json` — ensure metadata is correct
- `dt-story-sets.php` — ensure all references, class names, and plugin headers align with `dt-story-sets`
- `README.md` — update links to point to the correct repo
- `CONTRIBUTING.md` (if it exists) — update links
- Various PHP files in `post-type/`, `rest-api/`, `admin/`, `magic-link/` — replace old namespace/prefix references with `Dt_Story_Sets`

### Implementation Plan
1. Use a global search (or equivalent) to find any remaining references to the old starter plugin name or prefix (e.g., `dt_plugin_starter`, `disciple-tools-plugin-starter`).
2. Update the main plugin class name and file references if any old prefixes remain.
3. Update all documentation and configuration files to point exclusively to the `cairocoder01/dt-story-sets` repository.
4. Verify the update checker URL in `dt-story-sets.php` and `version-control.json` correctly points to the new repo.
5. Apply consistent renaming across all files.
6. Run `composer install` and `npm install` if needed to ensure environment consistency.
7. Run tests.

### Acceptance Criteria
- [ ] PHP lint passes on all modified files
- [ ] PHPCS reports no violations on modified files
- [ ] PHPUnit multisite suite passes
- [ ] Plugin name, text domain, and internal class names are consistent with `dt-story-sets`
- [ ] Repository links in README, `dt-story-sets.php`, and `version-control.json` point to `cairocoder01/dt-story-sets`
- [ ] Update checker correctly configured to the new repository

### Edge Cases & Constraints
- Do not modify files in `vendor/` or `dt-core/`.
- Ensure the activation/deactivation hooks are updated to use the new class names.
- Do not drop or alter existing database tables.
- All strings must be translated and properly escaped.

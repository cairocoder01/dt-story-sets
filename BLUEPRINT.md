### Task Summary
Rename the `dt-story-sets` plugin to `dt-story-sets`, including all file names, namespaces, and repository references. Update project configuration files to reflect the new identity and implement a plugin update checker pointing to the new repository `cairocoder01/dt-story-sets`.

### Files to Modify
- `dt-story-sets.php` (rename to `dt-story-sets.php`) — main plugin entry point and update checker configuration.
- `composer.json` — update package name and author details.
- `package.json` — update project metadata and scripts if necessary.
- `README.md` — update repository links and documentation to reflect the new name.
- `CONTRIBUTING.md` — update repository references.
- `src/**/*.php` — update namespace `DiscipleTools\StarterTemplate` to `DiscipleTools\StorySets`.
- `.github/workflows/*.yml` — update workflow references to the new plugin structure.

### Implementation Plan
1.  Perform a project-wide search-and-replace for the old slug `dt-story-sets` to `dt-story-sets`.
2.  Perform a project-wide search-and-replace for the old namespace `DiscipleTools\StarterTemplate` to `DiscipleTools\StorySets`.
3.  Rename the main plugin file `dt-story-sets.php` to `dt-story-sets.php`.
4.  Update `composer.json` and `package.json` to reflect the new package name `dt-story-sets`.
5.  Update all repository URLs in `README.md`, `CONTRIBUTING.md`, and any other config files to `cairocoder01/dt-story-sets`.
6.  Implement the plugin update checker in the main plugin file (`dt-story-sets.php`) using the standard `plugin-update-checker` library, pointing to `cairocoder01/dt-story-sets`.
7.  Review all TODO comments in the codebase, resolve them according to the plugin's new purpose, and ensure all code reflects the rename.

### Acceptance Criteria
- [ ] PHP lint passes on all modified files
- [ ] PHPCS reports zero violations on all modified files
- [ ] PHPUnit suite passes (requires addressing the missing 'ctype' extension in the test environment)
- [ ] Plugin name, slug, and namespace are fully and consistently updated
- [ ] Repository links consistently point to `cairocoder01/dt-story-sets`
- [ ] Plugin update checker is functional and points to the correct repository

### Edge Cases & Constraints
- Do not modify the module-loading block in `functions.php`.
- Do not drop or alter existing database tables.
- The new namespace `DiscipleTools\StorySets` should be kept concise.
- All user-facing strings must be appropriately updated and escaped.
- Ensure the missing 'ctype' extension issue in the test environment is documented if it remains a blocker for PHPUnit.

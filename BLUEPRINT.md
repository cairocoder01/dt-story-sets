### Task Summary
Complete the rename of the plugin to `dt-story-sets` by updating remaining translation file metadata and implementing the functional `TODO` comments throughout the codebase to ensure they are specific to the new `dt-story-sets` plugin.

### Files to Modify
- `languages/dt-story-sets-es_ES.po` — Update `Language-Team` URL to remove starter template reference.
- `languages/dt-story-sets-fr_FR.po` — Update `Language-Team` URL to remove starter template reference.
- `magic-link/post-type-magic-link/magic-link-post-type.php` — Replace functional `TODO`s with specific configurations for the `dt-story-sets` post type and URL structure.
- `rest-api/rest-api.php` — Address `TODO`s to properly define REST endpoints and permission strategies.
- `charts/charts-loader.php` — Clarify `TODO`s for future chart additions.

### Implementation Plan
1.  In `languages/dt-story-sets-es_ES.po` and `languages/dt-story-sets-fr_FR.po`, update the `Language-Team` header URL to remove reference to `corsacca-starter-template`.
2.  In `magic-link/post-type-magic-link/magic-link-post-type.php`, update the `$root`, `$type`, and `$post_type` properties with appropriate values for `dt-story-sets`.
3.  In `rest-api/rest-api.php`, update the `add_api_routes` method to define the REST endpoint routes specifically for this plugin and implement the permission checks.
4.  In `charts/charts-loader.php`, update the `TODO` comment to provide specific guidance for future chart extensions for `dt-story-sets`.
5.  Run `php -l` on all modified files, `tests/test_phpcs.sh` to ensure compliance, and `WP_MULTISITE=1 vendor/bin/phpunit` to verify integrity.

### Acceptance Criteria
- [ ] Translation file headers updated, removing starter template references.
- [ ] Functional `TODO` comments in `magic-link`, `rest-api`, and `charts` updated with implementation-specific directions.
- [ ] PHP lint passes on all modified files.
- [ ] PHPCS passes with zero violations.
- [ ] PHPUnit multisite test suite passes.
- [ ] Plugin rename is complete and consistent across the repo.

### Edge Cases & Constraints
- Do not modify files outside the repository.
- Ensure all translations are wrapped in correct text domain functions.
- Do not remove the functional `TODO` placeholders if they are necessary for future development, but update their content to be specific to this plugin.

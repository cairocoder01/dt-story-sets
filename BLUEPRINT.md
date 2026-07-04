### Task Summary
Rename the plugin from the starter template to `dt-story-sets` (already mostly done). Review and clean up `TODO` comments in `dt-story-sets.php` and update remaining hardcoded repository links to `cairocoder01/dt-story-sets`. Ensure the plugin update checker is correctly pointing to the right URL (it is).

### Files to Modify
- `dt-story-sets.php` — remove template `TODO`s, update links if necessary.
- `languages/*.po` — update report-msgid-bugs-to links.
- Other files as necessary to replace hardcoded links that point to old or wrong repositories.

### Implementation Plan
1.  Read `dt-story-sets.php` and remove `TODO`s that are template instructions.
2.  Review all occurrences from the `grep` results to identify actual hardcoded repo links that must be updated.
3.  Update the `Report-Msgid-Bugs-To` links in language files.
4.  Run tests.

### Acceptance Criteria
- [ ] PHP lint passes on all modified files
- [ ] PHPCS reports zero violations
- [ ] PHPUnit suite passes (no regressions)
- [ ] Plugin update checker is functional
- [ ] All repository links point to `cairocoder01/dt-story-sets`
- [ ] Template `TODO` comments removed from `dt-story-sets.php`

### Edge Cases & Constraints
- Do not modify `functions.php`.
- Do not drop or alter existing database tables.
- Do not rename existing post type slugs if they are already `dt_story_set` related.

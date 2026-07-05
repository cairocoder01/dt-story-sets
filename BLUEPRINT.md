### Task Summary
Rename the plugin title in `dt-story-sets.php` to remove the redundant "Dt" prefix and update the `documentation/community/story-set-readme.md` to properly describe the plugin instead of the starter template it was copied from.

### Files to Modify
- dt-story-sets.php — Update Plugin Name to "Disciple.Tools - Story Sets".
- documentation/community/story-set-readme.md — Update title and description to remove references to the "starter" template and "samples".

### Implementation Plan
1. In `dt-story-sets.php`, update line 3: `Plugin Name: Disciple.Tools - Dt Story Sets` to `Plugin Name: Disciple.Tools - Story Sets`.
2. In `documentation/community/story-set-readme.md`, update line 3: `# Disciple.Tools - Dt Story Sets` to `# Disciple.Tools - Story Sets`.
3. In `documentation/community/story-set-readme.md`, rewrite the description (line 5-17) to accurately describe the `dt-story-sets` plugin's purpose, removing the text that describes it as a template/starter for developers.

### Acceptance Criteria
- [ ] PHP lint passes with no errors
- [ ] PHPCS reports no violations on modified files
- [ ] PHPUnit multisite suite passes
- [ ] Plugin name in the WordPress Plugins admin view correctly displays "Disciple.Tools - Story Sets".
- [ ] `documentation/community/story-set-readme.md` accurately describes the `dt-story-sets` plugin, not the starter template.

### Edge Cases & Constraints
- Do not modify `functions.php` entry point.
- Do not drop or alter existing database tables.
- Ensure text domain remains `dt-story-sets`.

### Task Summary
Finalize the rename of the plugin from the starter template to `dt-story-sets` by auditing the codebase for any remaining references to the old template name, `corsacca-starter-template`, in language files and documentation, as well as fixing documentation inconsistencies.

### Files to Modify
- `languages/dt-story-sets-es_ES.po` — remove references to `corsacca-starter-template` in the header
- `languages/dt-story-sets-fr_FR.po` — remove references to `corsacca-starter-template` in the header
- `CONTRIBUTING.md` — fix references from `tests` to `test` to match the actual directory structure

### Implementation Plan
1. Audit all files for any remaining references to `corsacca-starter-template`.
2. Update the language files `languages/dt-story-sets-es_ES.po` and `languages/dt-story-sets-fr_FR.po` to correct the `Language-Team` header.
3. Fix documentation inconsistencies in `CONTRIBUTING.md` (specifically changing `./tests/` to `./test/` to match the directory structure).
4. Scan the codebase for any remaining `TODO` comments and address them.
5. Run `php -l` on all modified files.
6. Run `./test/test_phpcs.sh` and ensure standards pass.
7. Run PHPUnit tests and ensure they pass (ignoring environmental setup issues).
8. Inspect `git status`, `git diff`, and `git log` before committing.

### Acceptance Criteria
- [ ] No references to `corsacca-starter-template` remain in the codebase.
- [ ] All documentation files (`CONTRIBUTING.md`, etc.) are accurate.
- [ ] PHP lint passes on modified files.
- [ ] PHPCS reports zero violations.
- [ ] PHPUnit test suite runs without new errors.

### Edge Cases & Constraints
- Do not modify `vendor/` or `node_modules/`.
- Do not drop or alter existing database tables.
- Do not rename `wp_posts.post_type` slugs.

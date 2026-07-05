### Task Summary
Rename the plugin from `disciple-tools-plugin-starter` (or placeholders) to `dt-story-sets` across the entire repository. This involves updating namespaces, file headers, configuration files, and documentation links. Additionally, address any remaining TODOs related to the renaming, ensure the plugin update checker is correctly configured, and point all repository links to `cairocoder01/dt-story-sets`.

### Files to Modify
- `composer.json` — update name, namespace, and description.
- `README.md` — update links, name, and description.
- `dt-story-sets.php` — review for any leftover starter code/placeholders in headers or registration logic.
- `phpcs.xml` — ensure the project name is correctly set.
- All files identified via grep that contain "disciple-tools-plugin-starter" or "disciple_tools_plugin_starter".

### Implementation Plan
1.  **Grep:** Perform a recursive search for "disciple-tools-plugin-starter" and "disciple_tools_plugin_starter" to identify all files needing changes.
2.  **Namespaces & Constants:** Update all PHP namespaces from the old starter namespace to `Dt_Story_Sets`. Rename any plugin-specific constants that still use the old prefix.
3.  **Config Files:** Update `composer.json` for proper autoloading and package identification.
4.  **Metadata & Docs:** Update `README.md` to ensure all links point to `cairocoder01/dt-story-sets`.
5.  **Update Checker:** Verify and ensure the plugin update checker is configured to point to the `cairocoder01/dt-story-sets` repository.
6.  **TODOs:** Systematically review and resolve any TODO comments in the code related to the renaming task.
7.  **Verification:** Run `./tests/test_phpcs.sh` and ensure PHP syntax is correct (`php -l`).

### Acceptance Criteria
- [ ] No remaining instances of "disciple-tools-plugin-starter" or its variants in the code.
- [ ] Namespaces updated to `Dt_Story_Sets`.
- [ ] Plugin metadata updated correctly.
- [ ] README.md links point to `cairocoder01/dt-story-sets`.
- [ ] Plugin update checker configured correctly.
- [ ] PHPCS reports no violations.
- [ ] PHPUnit tests pass (if environment allows).

### Edge Cases & Constraints
- Do not modify `vendor/`.
- Ensure all translations remain intact.
- Ensure the plugin slug `dt-story-sets` is consistent across all files.

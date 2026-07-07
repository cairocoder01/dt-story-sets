Thank you for joining us in contributing to Disciple.Tools! These are the guidelines we expect you to follow in writing code that will be used in or with D.T.

### Translations
D.T  is already being used in multiple languages. Please help us make D.T translable by taking  full advantage of Wordpress’ translatable strings. Any string that will be read by the user must be marked as translatable. Ex:
`<label class="section-header"><?php esc_html_e( 'Other', 'dt-story-sets' )?></label>`

Make sure you look for these in PHP, HTML and JavaScript code.

### PHPCS
We use [PHPCS](https://github.com/squizlabs/PHP_CodeSniffer) and [PHPCS WordPress Coding Standards](https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards) to test for syntax errors, security vulnerabilities and some styling rules. We expect your commits to pass these tests.

In the theme you can run `./test/test_phpcs.sh` or create a pull request to our repo and Github Actions CI will run the tests for you.

If you are working on a plugin based off our [dt-story-sets](https://github.com/cairocoder01/dt-story-sets) plugin run `./test/test_phpcs.sh`

### PHPUnit Testing
To set up the PHPUnit environment:
1. Run `./test/install-wp-tests.sh`.
2. Ensure `dt_location_grid.tsv.zip` is present in the `wp-data` path.

You might need to run `composer install` first.

Note: rules for PHPCS are located in the `phpcs.xml` file. We sometimes update the rule list as PHPCS updates. We’ll update the [dt-story-sets](https://github.com/cairocoder01/dt-story-sets) `phpcs.xml`, you might want to look there to get the latest version.

### GitHub and Commits
For new plugins copy our [dt-story-sets](https://github.com/cairocoder01/dt-story-sets).

To commit to the theme or an existing plugin start by creating a fork of the repository. When you are ready, create a pull request into our repo.

Note: Depending on your context you may wish to use an anonymous GitHub account.

### `WP_DEBUG`
Enable `WP_DEBUG` in your `wp-config.php`: `define('WP_DEBUG', true);`
Checking out a PR and seeing the orange debug table is disappointing.

We look forward to hearing from you!

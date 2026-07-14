<?php

class PluginTest extends TestCase
{
    public function test_plugin_installed() {
        activate_plugin( 'dt-story-sets/dt-story-sets.php' );

        $this->assertContains(
            'dt-story-sets/dt-story-sets.php',
            get_option( 'active_plugins' )
        );
    }
}

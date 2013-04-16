<?php

/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4 cc=76; */

/**
 * Neatline test case.
 *
 * @package     omeka
 * @subpackage  neatline
 * @copyright   2012 Rector and Board of Visitors, University of Virginia
 * @license     http://www.apache.org/licenses/LICENSE-2.0.html
 */


class NeatlineItemTray_TestCase extends Neatline_AbstractTestCase
{


    /**
     * Bootstrap the plugin.
     */
    public function setUp()
    {

        parent::setUp();

        // Authenticate and set the current user.
        $this->user = $this->db->getTable('User')->find(1);
        $this->_authenticateUser($this->user);

        // Install Neatline and NeatlineItemTray.
        $pluginHelper = new Omeka_Test_Helper_Plugin;
        $pluginHelper->setUp('Neatline');
        $pluginHelper->setUp('NeatlineItemTray');

        // Register script paths.
        get_view()->setScriptPath(NL_ITEM_TRAY_DIR . '/views/shared');
        get_view()->addScriptPath(NL_DIR . '/views/shared');

    }


    /**
     * Get the Jasmine fixtures directory.
     *
     * @return string The directory.
     */
    protected function getFixturesPath()
    {
        return NL_ITEM_TRAY_DIR . '/tests/jasmine/fixtures/';
    }


}

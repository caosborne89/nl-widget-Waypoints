<?php

/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4 cc=80; */

/**
 * @package     omeka
 * @subpackage  neatline-Waypoints
 * @copyright   2012 Rector and Board of Visitors, University of Virginia
 * @license     http://www.apache.org/licenses/LICENSE-2.0.html
 */


class NeatlineWaypoints_Case_Default extends Neatline_Case_Default
{


    /**
     * Install Neatline Waypoints.
     */
    public function setUp()
    {
        parent::setUp();
        $this->helper->setUp('NeatlineWaypoints');
    }


}

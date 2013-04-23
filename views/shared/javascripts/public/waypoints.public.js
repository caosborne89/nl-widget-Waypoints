
/* vim: set expandtab tabstop=2 shiftwidth=2 softtabstop=2 cc=76; */

/**
 * @package     omeka
 * @subpackage  neatline-Waypoints
 * @copyright   2012 Rector and Board of Visitors, University of Virginia
 * @license     http://www.apache.org/licenses/LICENSE-2.0.html
 */

Neatline.module('Waypoints', function(
  Waypoints, Neatline, Backbone, Marionette, $, _) {


  /**
   * Load waypoint records, ordered by weight.
   */
  var load = function() {

    var params = {
      widget: 'Waypoints', order: 'weight'
    };

    Waypoints.__collection.update(params, function(records) {
      ingest(records);
    });

  };
  Neatline.commands.setHandler(Waypoints.ID+':load', load);
  Neatline.vent.on('refresh', load);


  /**
   * Render a records collection in the list.
   *
   * @param {Object} records: The collection of records.
   */
  var ingest = function(records) {
    Waypoints.__view.ingest(records);
  };
  Neatline.commands.setHandler(Waypoints.ID+':ingest', ingest);


});

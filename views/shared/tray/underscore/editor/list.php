<?php

/* vim: set expandtab tabstop=2 shiftwidth=2 softtabstop=2 cc=76; */

/**
 * Item tray editor record list.
 *
 * @package     omeka
 * @subpackage  neatline-ItemTray
 * @copyright   2012 Rector and Board of Visitors, University of Virginia
 * @license     http://www.apache.org/licenses/LICENSE-2.0.html
 */

?>

<script id="item-tray-editor-list-template" type="text/templates">
  <% records.each(function(r) { %>
    <div class="alert alert-info" data-id="<%= r.id %>">
      <%= r.get('title') %>
    </div>
  <% }); %>
</script>

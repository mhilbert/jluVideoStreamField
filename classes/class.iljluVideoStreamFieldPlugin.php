<?php

require_once('./Modules/DataCollection/classes/Fields/Plugin/class.ilDclFieldTypePlugin.php');

/**
 * Class iljluVideoStreamFieldPlugin
 *
 * @author  Michael Herren <mh@studer-raimann.ch>
 * @version 1.0.0
 */
class iljluVideoStreamFieldPlugin extends ilDclFieldTypePlugin {

	/**
	 * Get Plugin Name. Must be same as in class name il<Name>Plugin
	 * and must correspond to plugins subdirectory name.
	 *
	 * Must be overwritten in plugin class of plugin
	 *
	 * @return    string    Plugin Name
	 */
	function getPluginName(): string {
		return "jluVideoStreamField";
	}

	/**
	 * Defines which storage will used to save the field data of the plugin.
	 * Per default the data will be saved as text (1). It can also be saved
	 * as integer (2) or datetime (3) or you can implement and define an own
	 * storage (0) wich you handle yourself.
	 *
	 * @return    int       Storage Location
	 */
	public function getStorageLocation(): int {
		return 1;
	}
}

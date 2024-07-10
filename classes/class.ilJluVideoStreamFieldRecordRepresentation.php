<?php
require_once('./Modules/DataCollection/classes/Fields/Base/class.ilDclBaseRecordRepresentation.php');
/**
 * Class ilJluVideoStreamFieldRecordRepresentation
 *
 * @author  Michael Herren <mh@studer-raimann.ch>
 * @version 1.0.0
 */
class ilJluVideoStreamFieldRecordRepresentation extends ilDclBaseRecordRepresentation {

	/**
	 * Outputs html of a certain field
	 * @param mixed $value
	 * @param bool|true $link
	 *
	 * @return string
	 */
	public function getHTML($link = true) {
#		return "<strong>".$this->record_field->getValue()."</strong>";
		if (preg_match("/^https?:\/\//", $this->record_field->getValue())) {
			return "<video src='".$this->record_field->getValue()."' controls onContextmenu='return false;' width='100%'></video>";
		}
		else {
			return "";
		}
	}

}

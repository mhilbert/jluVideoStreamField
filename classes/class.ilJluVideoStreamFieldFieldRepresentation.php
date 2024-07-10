<?php
require_once('./Modules/DataCollection/classes/Fields/Plugin/class.ilDclPluginFieldRepresentation.php');

/**
 * Class ilJluVideoStreamFieldFieldRepresentation
 *
 * @author  Michael Herren <mh@studer-raimann.ch>
 * @version 1.0.0
 */
class ilJluVideoStreamFieldFieldRepresentation extends ilDclPluginFieldRepresentation {

	/**
	 * @param ilPropertyFormGUI $form
	 * @param int               $record_id
	 *
	 * @return ilDclTextInputGUI
	 */
	public function getInputField(ilPropertyFormGUI $form, ?int $record_id = NULL): ?ilFormPropertyGUI {
		$input = new ilDclTextInputGUI($this->getField()->getTitle(), 'field_' . $this->getField()->getId());
		$this->setupInputField($input, $this->getField());

		return $input;
	}


	/**
	 * Add filter input to TableGUI
	 *
	 * @param ilTable2GUI $table
	 *
	 * @return null
	 */
	public function addFilterInputFieldToTable(ilTable2GUI $table) {
		$input = $table->addFilterItemByMetaType("filter_" . $this->getField()->getId(), ilTable2GUI::FILTER_TEXT, false, $this->getField()->getId());
		$this->setupFilterInputField($input);

		// return the current filter value
		return $this->getFilterInputFieldValue($input);
	}

}

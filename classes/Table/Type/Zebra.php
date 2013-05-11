<?php defined('SYSPATH') OR die('No direct access allowed.');

/**
 * Zebra Table Class
 *
 * Demonstration table class to obtain basic zebra striping
 *
 * Check the Intermediate demos here: http://kohana.keyframesandcode.com/demos/table/
 * Feel free to change or amend this class as you see fit!
 *
 * @package Table
 * @category Extensions
 * @author Dave Stewart
 * @version 1.0
 * @access public
 */

class Table_Type_Zebra extends Table {

	// set all properties in the constructor
	public function Zebra_Table($data)
	{
		$this->set_body_data($data);
		$this->set_column_titles(Table::AUTO);
		$this->set_row_titles(array_shift(array_keys($this->body_data[0])));
	}

	// zebra stripe rows
	protected function _generate_row($index)
	{
		if($index % 2 == 0)
		{
			return new Tr('', 'zebra');
		}
	}

	// optimize cell generation
	protected function _generate_body_cell($index, $key)
	{
		return '<td>' . $this->body_data[$index][$key] . '</td>';
	}
	
}// End Table_Type_Zebra
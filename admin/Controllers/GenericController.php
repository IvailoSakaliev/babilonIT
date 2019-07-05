<?php 
	include ("../Database/Database.php");
	class GenericController 
	{
		private $data;
		private $id;
		private $table;
		function __construct()
		{
			$this->data = new Database();
		}
		function Add($table, $values)
		{
			$this->data->Add($table, $values);
		}
		function Index($table)
		{
			$result = $this->data->GetAll($table);
			return $result;
		}
		function Delete($table, $id)
		{
			$this->data->Delete($table, $id);
		}
		function GetByID($table, $id)
		{
			$result = $this->data->GetByID($table, $id);
			return $result;
		}
		function Edit($table, $id, $value)
		{
			$this->data->Edit($table, $id, $value);
		}
	}
 ?>
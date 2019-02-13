<?php 

namespace Hcode;

class Model {

	private $values = [];

	public function __call($name, $args) {

		$method = substr($name,0,3);
		$fieldName = substr($name,3,strlen($name));

		var_dump($method);
		var_dump($fieldName);

		if(strcmp($method,"set") == 0)
			$this->values[$fieldName] = $args[0];
		else
		if(strcmp($method,"get") == 0)
			return $this->values[$fieldName];
	}

	public function setData($data = array())
	{
		foreach ($data as $key => $value) {
			$this->{"set".$key}($value);
		}
	}

	public function getValues()
	{
		return $this->values;
	}
}

 ?>








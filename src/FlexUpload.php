<?php

namespace FlexUpload;

class FlexUpload {

	private $entity;
	private $entityId;
	private $label;
	private $files;
	private $multyple;
	
	public function __construct($data)
	{	
		$this->entity   = isset($data['entity']) ? $data['entity'] : null;
		$this->entityId = isset($data['entityId']) ? $data['entityId'] : null;
		$this->label    = isset($data['label']) ? $data['label'] : null;
		$this->files    = isset($data['files']) ? $data['files'] : null;
		$this->multyple = isset($data['multyple']) ? $data['multyple']: null;		
	}

	public function get() {
		return "get";
	}

	public function save() {
		return "save";
	}

	public function update() {
		return "update";
	}

	public function delete() {
		return "delete";
	}

	private function validate() {
		return "validate";
	}
}
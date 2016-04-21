<?php
namespace NorthslopePL\Metassione\Tests\OtherExamples;

class OtherOnePropertyKlass
{
	/**
	 * @var int
	 */
	private $value;

	/**
	 * @param int $value
	 */
	public function setValue($value)
	{
		$this->value = $value;
	}

	/**
	 * @return int
	 */
	public function getValue()
	{
		return $this->value;
	}

}
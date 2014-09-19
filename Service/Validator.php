<?php

namespace Zebba\Bundle\ValidatorBundle\Service;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ValidatorInterface;
use Zebba\Bundle\ValidatorBundle\Validator\ValidatorResult;

class Validator
{
	/** @var ValidatorInterface */
	private $validator;

	/**
	 * Constructor
	 *
	 * @param ValidatorInterface $validator
	 */
	public function __construct(ValidatorInterface $validator)
	{
		$this->validator = $validator;
	}

	/**
	 *
	 * @param mixed $value
	 * @param array|null $groups
	 * @param bool $traverse
	 * @param bool $deep
	 * @return ValidatorResult
	 */
	public function validate($value, $groups = null, $traverse = false, $deep = false)
	{
		return new ValidatorResult($this->validator->validate($value, $groups, $traverse, $deep));
	}

	/**
	 *
	 * @param mixed $containingValue
	 * @param string $property
	 * @param array|null $groups
	 * @return ValidatorResult
	 */
	public function validateProperty($containingValue, $property, $groups = null)
	{
		return new ValidatorResult($this->validator->validateProperty($containingValue, $property, $groups));
	}

	/**
	 *
	 * @param string $containingValue
	 * @param string $property
	 * @param string $value
	 * @param array|null $groups
	 * @return ValidatorResult
	 */
	public function validatePropertyValue($containingValue, $property, $value, $groups = null)
	{
		return new ValidatorResult($this->validator->validatePropertyValue($containingValue, $property, $value, $groups));
	}

	/**
	 *
	 * @param mixed $value
	 * @param Constraint|Constraint[] $constraints
	 * @param array|null $groups
	 * @return ValidatorResult
	 */
	public function validateValue($value, $constraints, $groups)
	{
		return new ValidatorResult($this->validator->validateValue($value, $constraints, $groups));
	}
}
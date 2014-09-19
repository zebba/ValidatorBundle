<?php

namespace Zebba\Bundle\ValidatorBundle\Validator;

use Symfony\Component\Validator\ConstraintViolationListInterface;

class ValidatorResult implements ValidationResultInterface
{
	/** @var ConstraintViolationList */
	private $errors;

	/**
	 *
	 * @param ConstraintViolationListInterface $errors
	 */
	public function __construct(ConstraintViolationListInterface $errors)
	{
		$this->errors = $errors;
	}

	/**
	 *
	 * @return ConstraintViolationListInterface
	 */
	public function getErrors()
	{
		return $this->errors;
	}

	/**
	 *
	 * @return boolean
	 */
	public function isValid()
	{
		return (0 === $this->errors->count());
	}
}
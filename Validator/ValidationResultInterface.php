<?php

namespace Zebba\Bundle\ValidatorBundle\Validator;

use Symfony\Component\Validator\ConstraintViolationListInterface;

interface ValidationResultInterface
{
	/**
	 * @return ConstraintViolationListInterface
	 */
	public function getErrors();

	/**
	 * @return boolean
	 */
	public function isValid();
}
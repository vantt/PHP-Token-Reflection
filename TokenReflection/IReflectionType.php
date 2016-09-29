<?php
/**
 * PHP Token Reflection
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this library in the file LICENSE.md.
 */
namespace TokenReflection;

/**
 * Common reflection return type interface.
 */
interface IReflectionType extends IReflection
{
	/**
	 * Checks if null is allowed
	 *
	 * @return bool
	 */
	public function allowsNull();

	/**
	 * Checks if it is a built-in type
	 *
	 * @return bool
	 */
	public function isBuiltin();

	/**
	 * To string
	 *
	 * @return string
	 */
	public function __toString();
}

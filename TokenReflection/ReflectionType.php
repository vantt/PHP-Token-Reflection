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
 * Tokenized function/method return type reflection.
 */
class ReflectionType extends ReflectionElement implements IReflectionType
{
	/**
	 * Type name consists of these
	 *
	 * @var array
	 */
	private $typeNameTokens = array(
		T_STRING,
		T_NS_SEPARATOR,
		T_ARRAY,
		T_CALLABLE,
	);

	/** @var string */
	private $typeName;

	/** @var bool */
	private $allowsNull = false;

	/**
	 * Checks if null is allowed
	 *
	 * @return bool
	 */
	public function allowsNull() {
		return $this->allowsNull;
	}

	/**
	 * Checks if it is a built-in type
	 *
	 * @return bool
	 */
	public function isBuiltin() {
		return in_array($this->typeName, array(
			'string',
			'bool',
			'int',
			'float',
			'array',
			'callable',
		));
	}

	/**
	 * To string
	 *
	 * @return string
	 */
	public function __toString() {
		return $this->typeName;
	}

	/**
	 * Parses reflected element metadata from the token stream.
	 *
	 * @param Stream\StreamBase $tokenStream Token substream
	 * @param IReflection $parent Parent reflection object
	 * @return ReflectionElement
	 */
	protected function parse(Stream\StreamBase $tokenStream, IReflection $parent)
	{
		switch ($tokenStream->getTokenValue()) {
			case '?':
				$tokenStream->skipWhitespaces();
			case 'null':
				$this->allowsNull = true;
		}

		$typeName = '';
		while (in_array($tokenStream->getType(), $this->typeNameTokens)) {
			$typeName .= $tokenStream->getTokenValue();
			$tokenStream->next();
		}
		$typeName = ltrim($typeName, '\\');

		if (!$typeName) {
			throw new Exception\ParseException(
				$this,
				$tokenStream,
				sprintf('Invalid type name definition: "%s".', $typeName),
				Exception\ParseException::LOGICAL_ERROR
			);
		}
		$this->typeName = $typeName;

		return $this;
	}

	/**
	 * Parses the reflection object name.
	 *
	 * @param Stream\StreamBase $tokenStream Token substream
	 * @return ReflectionElement
	 */
	protected function parseName(Stream\StreamBase $tokenStream) {
		return $this;
	}
}

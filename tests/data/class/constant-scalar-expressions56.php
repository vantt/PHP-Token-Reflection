<?php

if (PHP_VERSION_ID >= 50600) {
	class TokenReflection_Test_ClassConstantScalarExpressions56
	{
		const FOO = 1 ** 2;
		const BAR = array(1 => 'one');
		const BAZ = 'foo' . 'bar';
		const BAD = self::FOO ? 'one' : 'two';
	}
}
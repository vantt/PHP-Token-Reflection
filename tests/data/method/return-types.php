<?php

namespace We\Need\ToGo\Deeper {
class MethodReturnType { }
}

namespace {
abstract class TokenReflection_Test_Method_Test {

	function methodNoReturnType() {
	}

	function methodReturnsBool():bool{
		return false;
	}

	function methodReturnsBoolean():boolean{
		return false;
	}

	function methodReturnsInt():int{
		return 42;
	}

	function methodReturnsInteger():integer{
		return 42;
	}

	function methodReturnsFloat(): float{
		return 4.2;
	}

	function methodReturnsDouble(): double{
		return 4.2;
	}

	function methodReturnsString()  :   string  {
		return '42';
	}

	function methodReturnsCallable()  :callable {
		return function(){};
	}

	function methodReturnsArray()  : array{
		return [42];
	}

	function methodReturnsObject()  : stdClass{
		return (object)[];
	}

	function methodReturnsClass()  : \We\Need\ToGo\Deeper\MethodReturnType{
		return new \We\Need\ToGo\Deeper\MethodReturnType;
	}

	abstract function methodAbstract(): int;
}
}

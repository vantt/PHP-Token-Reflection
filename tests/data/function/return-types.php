<?php

namespace We\Need\ToGo\Deeper {
class FunctionReturnType { }
}

namespace {

function tokenReflectionFunctionNoReturnType() {
}

function tokenReflectionFunctionReturnsBool():bool{
	return false;
}

function tokenReflectionFunctionReturnsBoolean():boolean{
	return false;
}

function tokenReflectionFunctionReturnsInt():int{
	return 42;
}

function tokenReflectionFunctionReturnsInteger():integer{
	return 42;
}

function tokenReflectionFunctionReturnsFloat(): float{
	return 4.2;
}

function tokenReflectionFunctionReturnsDouble(): double{
	return 4.2;
}

function tokenReflectionFunctionReturnsString()  :   string  {
	return '42';
}

function tokenReflectionFunctionReturnsCallable()  :callable {
	return function(){};
}

function tokenReflectionFunctionReturnsArray()  : array{
	return [42];
}

function tokenReflectionFunctionReturnsObject()  : stdClass{
	return (object)[];
}

function tokenReflectionFunctionReturnsClass()  : \We\Need\ToGo\Deeper\FunctionReturnType{
	return new \We\Need\ToGo\Deeper\FunctionReturnType;
}

}

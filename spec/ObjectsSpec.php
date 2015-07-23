<?php

namespace spec\CesarV\Helpers;

use PhpSpec\ObjectBehavior;

class ObjectsSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('CesarV\Helpers\Objects');
    }
    
    function it_should_get_class_name_without_namespace()
    {
        $class = new SomeClass();
        
        $this->getClassNoNamespace($class)->shouldReturn('SomeClass');
    }
}

class SomeClass{}
<?php

namespace spec\CesarV\Helpers;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ArraysSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('CesarV\Helpers\Arrays');
    }
    
    function it_should_pluck_values_out_of_arrays()
    {
        $subject = array(
            array('element' => 'A', 'other' => 'B'), 
            array('element' => 'B', 'blah' => 'B'), 
            array('element' => 'C', 'hello' => 'B'), 
            array('element' => 'D', 'brah' => 'B'), 
        );
        
        static::pluck('element', $subject)->shouldReturn(array('A', 'B', 'C', 'D'));
    }
    
    function it_should_get_value()
    {
        $subject = array(
            'val1' => 1,
            'val2' => 2,
        );
        
        static::get($subject, 'val2')->shouldReturn(2);
    }
    
    function it_should_default_if_value_doesnt_exsist()
    {
        static::get(array(), 'notthere', 'default')->shouldReturn('default');
    }
    
    function it_should_get_value_or_fail()
    {
        $this->shouldThrow('OutOfBoundsException')->duringGetOrFail(array(), 'not there');
    }
}

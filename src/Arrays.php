<?php

namespace CesarV\Helpers;

class Arrays
{
    /**
     * Pluck an element out of a 2-d array
     * 
     * Flatten a 2-d array into a 1-d by pulling out only a particular key from the 2-d array's 
     * members.
     * 
     * I.e. 
     * 
     * $subject = [
     *  ['pluck' => 'A', 'other' => 'B'],
     *  ['pluck' => 'B', 'blah' => 'C'],
     *  ['pluck' => 'C', 'hello' => 'D'],
     * ]; 
     * 
     * pluck('pluck', $subject); // ['A','B','C']
     * 
     * @param string $key Element's key
     * @param array $subject Subject 2-d array
     * @return array
     */
    public static function pluck($key, $subject)
    {
        $return = array();
        
        foreach ($subject as $item)
        {
            $return[] = $item[$key];
        }
        
        return $return;
    }
}

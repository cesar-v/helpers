<?php namespace CesarV\Helpers;

class Objects 
{
    /**
     * Get a class's unqualified name.
     * 
     * @param object $object
     * @return string
     */
    public static function getClassNoNamespace($object)
    {
        $className = get_class($object);
        $className = explode('\\', $className);
        return array_pop($className);
    }
}

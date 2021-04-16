<?php
namespace Infrastructure\Payload;

use Illuminate\Http\Request;
use Infrastructure\ValueObject\ValueObject;
use ReflectionClass;

abstract class BasePayload
{
    /**
     * @param array|Request|BasePayload $data
     * @return static
     */
    public static function make(array|Request|BasePayload $data)
    {
        $child = new static;
        $data = is_array($data) ? $data : $data->toArray();
        $properties = $child->getPropertyNames();
        foreach ($properties as $key)
        {
            $translatedKey = !empty($child::translation()[$key]) ? $child::translation()[$key] : $key;
            if (key_exists($translatedKey, $data))
            {
                $child->$key = $data[$translatedKey];
            }
        }

        return $child;
    }

    public function toArray()
    {
        $array = [];
        foreach ($this->getPropertyNames() as $key)
        {
            // Skip if not inicializated
            if (!isset($this->$key))
            {
                continue;
            }

            $array[$key] = $this->$key;
        }

        return $array;
    }

    private function getPropertyNames(): array
    {
        $class = new ReflectionClass(get_called_class()); // get class object
        $properties = $class->getProperties(); // get class properties
        $ownProperties = array();

        foreach ($properties as $property) {
            // skip inherited properties
            /*if ($property->getDeclaringClass()->getName() !== $class->getName()) {
                continue;
            }*/

            $ownProperties[] = $property->getName();
        }
        return $ownProperties;
    }

    public static function translation(): array
    {
        return [];
    }
}

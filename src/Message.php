<?php

namespace Ogroen\Messages;

use ReflectionClass;
use ReflectionProperty;

abstract class Message
{
    public function serialize()
    {
        $serialize = [
            'class' => static::class,
            'fields' => []
        ];

        $reflection = new ReflectionClass($this);

        foreach ($reflection->getProperties(ReflectionProperty::IS_PRIVATE) as $v) {
            $serialize['fields'][$v->getName()] = $this->{'get'.ucfirst($v->getName())}();
        }

        return json_encode($serialize);
    }

    public static function deserialize(string $string)
    {
        $array = json_decode($string, true);

        if (!is_array($array) || !array_key_exists('class', $array)) {
            throw new \Exception('Don\'t have class field');
        }

        if (!class_exists($array['class'])) {
            throw new \Exception('Class "'.$array['class'].'" don\'t exist');
        }

        $binder = new Binder();
//var_dump($array);die;
        $obj = $binder->bind($array['class'], array_key_exists('fields', $array) ? $array['fields'] : []);

        return $obj;
    }
}
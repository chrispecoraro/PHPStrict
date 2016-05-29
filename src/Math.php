<?php

namespace PHPStrict;

class Math
{
    public static function addIntegers(int ...$integers): int
    {
        return array_sum($integers);
    }

    public static function addFloats(...$floats): float
    {
        self::validateFloatParameters($floats);
        return call_user_func_array(array(__CLASS__, "addValidatedFloats"), $floats);
    }

    private static function addValidatedFloats(float ...$floats): float
    {
        return array_sum($floats);
    }

    public static function subtractIntegers(int $int1, int $int2): int
    {
        return $int1 - $int2;
    }

    public static function subtractFloats($float1, $float2)
    {
        self::validateFloatParameters([$float1, $float2]);
        return self::subtractValidatedFloats($float1, $float2);
    }

    private static function subtractValidatedFloats(float $float1, float $float2): float
    {
        return $float1 - $float2;
    }

    public static function multiplyIntegers(int $integer1, int $integer2): int
    {
        return $integer1 * $integer2;
    }

    public static function multiplyFloats($float1, $float2): float
    {
        self::validateFloatParameters([$float1, $float2]);
        return self::multiplyValidatedFloats($float1, $float2);
    }

    private static function multiplyValidatedFloats(float $float1, float $float2): float
    {
        return $float1 * $float2;
    }

    /**
     * @param $arguments
     * @return bool
     * @throws \Exception
     */
    private static function validateFloatParameters($arguments)
    {
        foreach ($arguments as $argument) {
            if (is_float($argument) === false) {
                throw new \Exception('Argument ' . $argument . ' is 
                not a floating point number');
            }
        }
        return true;
    }
}


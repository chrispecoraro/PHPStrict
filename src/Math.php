<?php

namespace PHPStrict;

class Math
{
    /**
     * @param \int[] ...$integers
     * @return int
     */
    public static function addIntegers(int ...$integers): int
    {
        return array_sum($integers);
    }

    /**
     * @param array ...$floats
     * @return float
     * @throws \Exception
     */
    public static function addFloats(...$floats): float
    {
        self::validateFloatParameters($floats);
        return call_user_func_array(array(__CLASS__, "addValidatedFloats"), $floats);
    }

    /**
     * @param \float[] ...$floats
     * @return float
     */
    private static function addValidatedFloats(float ...$floats): float
    {
        return array_sum($floats);
    }

    /**
     * @param int $int1
     * @param int $int2
     * @return int
     */
    public static function subtractIntegers(int $int1, int $int2): int
    {
        return $int1 - $int2;
    }

    /**
     * @param float $float1
     * @param float $float2
     * @return float
     * @throws \Exception
     */
    public static function subtractFloats($float1, $float2)
    {
        self::validateFloatParameters([$float1, $float2]);
        return self::subtractValidatedFloats($float1, $float2);
    }

    /**
     * @param float $float1
     * @param float $float2
     * @return float
     */
    private static function subtractValidatedFloats(float $float1, float $float2): float
    {
        return $float1 - $float2;
    }

    /**
     * @param int $integer1
     * @param int $integer2
     * @return int
     */
    public static function multiplyIntegers(int $integer1, int $integer2): int
    {
        return $integer1 * $integer2;
    }

    /**
     * @param float $float1
     * @param float $float2
     * @return float
     * @throws \Exception
     */
    public static function multiplyFloats($float1, $float2): float
    {
        self::validateFloatParameters([$float1, $float2]);
        return self::multiplyValidatedFloats($float1, $float2);
    }

    /**
     * @param float $float1
     * @param float $float2
     * @return float
     * @throws \Exception
     */
    public static function divideFloats($float1, $float2): float
    {
        self::validateFloatParameters([$float1, $float2]);
        return $float1 / $float2;
    }
    /**
     * @param int $integer1
     * @param int $integer2
     * @return float|int
     * @throws \Exception
     */
    public static function divideIntegers(int $integer1, int $integer2)
    {
        return $integer1 / $integer2;
    }

    /**
     * @param float $float1
     * @param float $float2
     * @return float
     */
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
<?php

namespace PHP7Strict;

class Math
{
    public static function addIntegers(int ...$integers): int
    {
        return array_sum($integers);
    }
    public static function addFloats(float ...$floats): float
    {
        return array_sum($floats);
    }
    public static function subtractIntegers(int $int1, int $int2): int
    {
        return $int1 - $int2;
    }
    public static function subtractFloats(float $float1, float $float2): float
    {
        return $float1 - $float2;
    }
    public static function multiplyIntegers(int $integer1, int $integer2): int
    {
        return $integer1 * $integer2;
    }
    public static function multiplyFloats(float $float1, float $float2): float
    {
        return $float1 * $float2;
    }
}

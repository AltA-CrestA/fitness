<?php

namespace App\Enums;

enum ExerciseEnum
{
    case Legs;
    case Chest;
    case Back;
    case Core;
    case Shoulders;
    case Cardio;

    public static function getValues(): array
    {
        $result = [];

        foreach (self::cases() as $case)
        {
            $result[] = $case->name;
        }

        return $result;
    }
}

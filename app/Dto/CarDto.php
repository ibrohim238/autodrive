<?php

namespace App\Dto;

use Carbon\Carbon;
use Spatie\DataTransferObject\DataTransferObject;

class CarDto extends DataTransferObject
{
    public string $mark;
    public string $model;
    public ?string $generation;
    public int $year;
    public int $run;
    public ?string $color;
    public string $bodyType;
    public string $engineType;
    public string $transmission;
    public string $gearType;
    public ?int $generation_id;

    public static function fromArray(array $data): CarDto
    {
        return new self(
            mark: $data['mark'],
            model: $data['model'],
            generation: $data['generation'],
            year: $data['year'],
            run: $data['run'],
            color: $data['color'],
            bodyType: $data['body-type'],
            engineType: $data['engine-type'],
            transmission: $data['transmission'],
            gearType: $data['gear-type'],
            generation_id: $data['generation_id'],
        );
    }
}

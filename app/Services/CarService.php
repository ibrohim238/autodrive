<?php

namespace App\Services;

use App\Dto\CarDto;
use App\Models\Car;

class CarService
{
    public function __construct(
      private Car $car
    ) {
    }

    public function create(CarDto $dto): Car
    {
        $this->fill($dto)->save();

        return $this->car;
    }

    public function fill(CarDto $dto): static
    {
        $this->car->fill($dto->toArray());

        return $this;
    }

    public function save(): static
    {
        $this->car->save();

        return $this;
    }
}

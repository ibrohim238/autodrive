<?php

namespace App\Console\Commands;

use App\Dto\CarDto;
use App\Services\CarService;
use App\XmlParser;
use Illuminate\Console\Command;

class DbXmlParser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'xml:parse {--path=xml/data.xml}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(): int
    {
        $cars = XmlParser::run($this->option('path'));

        foreach ($cars as $car) {
            app(CarService::class)->create(CarDto::fromArray($car));
        }

        return true;
    }
}

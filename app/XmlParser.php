<?php

namespace App;

class XmlParser
{
    public static function run(string $path)
    {
        $xmlFile = file_get_contents(public_path($path));

        $xmlObject = simplexml_load_string($xmlFile, JsonXMLElement::class);

        $jsonFormatData = json_encode($xmlObject);
        return json_decode($jsonFormatData, true)['offers']['offer'];
    }
}

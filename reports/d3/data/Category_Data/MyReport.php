<?php
require_once "../../../../common.php";

class MyReport extends \koolreport\KoolReport
{
    function settings()
    {
        return array(
            "dataSources" => array(
                "d3Data" => array(
                    'filePath' => '../../../../data/c3_string_x.csv',
                    'fieldSeparator' => ';',
                    'class' => "\koolreport\datasources\CSVDataSource"
                ),
            )
        );
    }

    function setup()
    {
        $this->src("d3Data")->pipe($this->dataStore('data'));
    }
}

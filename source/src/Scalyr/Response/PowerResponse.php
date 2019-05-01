<?php


namespace Adknown\ProxyScalyr\Scalyr\Response;


class PowerResponse extends aResponse
{

    /**
     * Specifies the name of each column in the output table
     * Formatted as: [
     *      0 => ["name" => "columnName1"],
     *      1 => ["name" => "columnName2"],
     *      ...
     * ]
     * @var array[string]string
     */
    public $columns;

    /**
     * Specifies the value of each cell in the output table.
     * The outer array has one entry per table row
     * Each inner array has one entry per table column
     * Formatted as: [
     *      [ valueForColumn1, valueForColumn2, ... ], // row 1
     *      [ valueForColumn1, valueForColumn2, ... ], // row 2
     *      ...
     * ]
     * @var mixed[][]
     */
    public $values;

    /** @var int */
    public $matchingEvents;

    /** @var int */
    public $omittedEvents;

    /**
     * @param array $obj
     * @throws \Exception
     */
    public function AssignValues(array $obj)
    {
        $this->AllFieldsPresent(['status', 'matchingEvents', 'omittedEvents', 'columns', 'values'], $obj);

        $this->status = $obj['status'];
        $this->columns = $obj['columns'];
        $this->values = $obj['values'];
        $this->matchingEvents = $obj['matchingEvents'];
        $this->omittedEvents = $obj['omittedEvents'];
    }
}
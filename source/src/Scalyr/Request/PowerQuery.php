<?php


namespace Adknown\ProxyScalyr\Scalyr\Request;


class PowerQuery extends aBase
{
    /**
     * A datetime string for the start time you're searching for
     *
     * @var string
     */
    public $startTime;

    /**
     * A datetime string for the end time you're searching for
     * Defaults to the current time.
     *
     * @var string
     */
    public $endTime;

    /**
     * @var string
     *             the execution priority for this query; defaults to "low". Use "low" for background operations where a delay of a second or so is acceptable. Low-priority queries have more generous rate limits.
     */
    public $priority;

    /**
     * @var string
     */
    public $query;

    /**
     * Numeric constructor.
     *
     * @param string $query
     * @param string $startTime A datetime string for the start time you're searching for
     * @param string $endTime
     * @param string $priority
     *
     */
    public function __construct(string $query, string $startTime, string $endTime = "", string $priority = self::PRIORITY_LOW)
    {
        $this->query = $query;
        $this->startTime = $startTime;
        $this->endTime = $endTime;
        $this->priority = $priority;
    }
}
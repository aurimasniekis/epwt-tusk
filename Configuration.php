<?php

namespace EPWT\Tusk;

/**
 * Class Configuration
 * @package EPWT\Tusk
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class Configuration
{
    /**
     * @var int
     */
    public $workerProcesses = 4;

    /**
     * @var array
     */
    public $listen = ["127.0.0.1:8080"];

    /**
     * @var int
     */
    public $timeout = 30;

    /**
     * @var string
     */
    public $pid;

    /**
     * @var string
     */
    public $stdErrorLog;

    /**
     * @var string
     */
    public $stdOutLog;
}

<?php

namespace EPWT\Tusk;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

/**
 * Interface ApplicationInterface
 * @package EPWT\Tusk
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
interface ApplicationInterface
{
    /**
     * @param RequestInterface $request
     *
     * @return ResponseInterface
     */
    public function handleRequest(RequestInterface $request);

    public function beforeFork($server, $worker);

    public function afterFork($server, $worker);
}

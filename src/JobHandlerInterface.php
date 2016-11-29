<?php

namespace Neutron\Messaging;

interface JobHandlerInterface
{
    /**
     * Handle job
     */
    public function handle();
}
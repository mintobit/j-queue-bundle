<?php

namespace Mintobit\JQueueBundle\Services;

interface JobProducerInterface
{
    /**
     * @param int   $typeId
     * @param array $data
     *
     * @return int Job identifier
     */
    public function produce($typeId, array $data);
}
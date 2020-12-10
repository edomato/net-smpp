<?php

namespace edomato\Net\Smpp\Pdu\Contract;

interface Factory
{
    public function createFromBuffer(string $buffer): Pdu;
}

<?php

namespace edomato\Net\Smpp\Pdu;

class GenericNack extends Pdu implements Contract\GenericNack
{
    public function getCommandId(): int
    {
        return 0x80000000;
    }
}

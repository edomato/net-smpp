<?php

namespace edomato\Net\Smpp\Pdu;

class BindTransmitter extends Bind implements Contract\BindTransmitter
{
    public function getCommandId(): int
    {
        return 0x00000002;
    }
}

<?php

namespace edomato\Net\Smpp\Pdu;

class CancelSm extends Pdu implements Contract\CancelSm
{
    public function getCommandId(): int
    {
        return 0x00000008;
    }
}

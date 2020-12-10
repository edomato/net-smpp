<?php

namespace edomato\Net\Smpp\Pdu;

class BindTransceiver extends Bind implements Contract\BindTransceiver
{
    public function getCommandId(): int
    {
        return 0x00000009;
    }
}

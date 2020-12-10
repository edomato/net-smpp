<?php

namespace edomato\Net\Smpp\Pdu;

class BindTransmitterResp extends BindResp implements Contract\BindTransmitterResp
{
    public function getCommandId(): int
    {
        return 0x80000002;
    }
}

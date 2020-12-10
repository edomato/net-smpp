<?php

namespace edomato\Net\Smpp\Pdu;

class BindReceiverResp extends BindResp implements Contract\BindReceiverResp
{
    public function getCommandId(): int
    {
        return 0x80000001;
    }
}

<?php

namespace edomato\Net\Smpp\Pdu;

class ReplaceSmResp extends Pdu implements Contract\ReplaceSmResp
{
    public function getCommandId(): int
    {
        return 0x80000007;
    }
}

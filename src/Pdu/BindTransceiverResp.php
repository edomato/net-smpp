<?php

namespace edomato\Net\Smpp\Pdu;

class BindTransceiverResp extends BindResp implements Contract\BindTransceiverResp
{
    public function getCommandId(): int
    {
        return 0x80000009;
    }
}

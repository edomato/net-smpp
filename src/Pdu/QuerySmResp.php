<?php

namespace edomato\Net\Smpp\Pdu;

class QuerySmResp extends Pdu implements Contract\QuerySmResp
{
    public function getCommandId(): int
    {
        return 0x80000003;
    }
}

<?php

namespace edomato\Net\Smpp\Pdu\Contract;

interface BindResp extends Pdu
{
    public function getSystemId(): string;
}

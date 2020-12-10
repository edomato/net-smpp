<?php

namespace edomato\Net\Smpp\Pdu\Contract;

interface SubmitSmResp extends Pdu
{
    public function getMessageId(): string;
}

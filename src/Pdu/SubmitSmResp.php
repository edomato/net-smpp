<?php

namespace edomato\Net\Smpp\Pdu;

use edomato\Net\Smpp\Utils\DataWrapper;

class SubmitSmResp extends Pdu implements Contract\SubmitSmResp
{
    /**
     * @var string
     */
    private $messageId;

    public function __construct($body = '')
    {
        parent::__construct($body);

        if (strlen($body) === 0) {
            return;
        }

        $wrapper = new DataWrapper($body);
        $this->messageId = $wrapper->readNullTerminatedString(65);
    }

    public function getCommandId(): int
    {
        return 0x80000004;
    }

    public function getMessageId(): string
    {
        return $this->messageId;
    }

    public function setMessageId(string $messageId): self
    {
        $this->messageId = $messageId;
        return $this;
    }

    public function __toString(): string
    {
        $wrapper = new DataWrapper('');
        $wrapper->writeNullTerminatedString($this->getMessageId());
        $this->setBody($wrapper->__toString());
        return parent::__toString();
    }
}

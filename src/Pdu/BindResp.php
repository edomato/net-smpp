<?php

namespace edomato\Net\Smpp\Pdu;

use edomato\Net\Smpp\Utils\DataWrapper;

abstract class BindResp extends Pdu implements Contract\BindResp
{
    use TLVTrait;

    /**
     * @var string
     */
    private $systemId;

    public function __construct($body = '')
    {
        parent::__construct($body);
        if (strlen($body) === 0) {
            return;
        }

        $wrapper = new DataWrapper($body);
        $this->setSystemId(
            $wrapper->readNullTerminatedString(16)
        );
        /**
         * optional
         *
         * sc_interface_version TLV
         */
        if ($wrapper->bytesLeft()) {
            $this->generateFromDatawrapper($wrapper);
        }
    }

    public function getSystemId(): string
    {
        return $this->systemId;
    }

    public function setSystemId(string $systemId): self
    {
        $this->systemId = $systemId;
        return $this;
    }
}

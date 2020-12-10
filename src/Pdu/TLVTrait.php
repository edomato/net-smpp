<?php

namespace edomato\Net\Smpp\Pdu;

use edomato\Net\Smpp\Utils\DataWrapper;

trait TLVTrait
{
    /** @var TLV[] */
    protected $tlv = [];

    /**
     * Get the number of TLVs
     *
     * @return int
     */
    public function count(): int
    {
        return count($this->tlv);
    }

    /**
     * Generate TLVs from passed DataWrapper
     *
     * @param DataWrapper $wrapper
     */
    public function generateFromDatawrapper(DataWrapper $wrapper): void
    {
        while ($wrapper->bytesLeft()) {
            $tlv = $wrapper->readTLV();
            $this->setTLV($tlv);
        }
    }

    /**
     * Returns all the TLVs
     *
     * @return array
     */
    public function getAllTLVs(): array
    {
        return $this->tlv;
    }

    /**
     * Returns the TLV for the passed tag if exists
     *
     * @param int $tag
     *
     * @return TLV|null
     */
    public function getTLV(int $tag): ?TLV
    {
        return $this->tlv[$tag] ?? null;
    }

    /**
     * Add the passed TLV
     *
     * @param TLV $tlv
     */
    public function setTLV(TLV $tlv): void
    {
        $this->tlv[$tlv->getTag()] = $tlv;
    }
}
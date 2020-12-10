<?php

namespace edomato\Net\Smpp\Proto\DataCoding;

use edomato\Net\Smpp\Proto\Contract\DataCoding;

class UCS2 implements DataCoding
{
    public function encode(string $data): string
    {
        return iconv('UTF-8', 'UCS-2BE', $data);
    }

    public function decode(string $data): string
    {
        return iconv('UCS-2BE', 'UTF-8', $data);
    }
}

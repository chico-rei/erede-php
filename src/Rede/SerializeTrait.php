<?php

namespace Rede;

trait SerializeTrait
{
    /**
     * @return array
     */
    public function jsonSerialize(): array
    {
        return array_filter(get_object_vars($this), function ($v) {
            return $v !== null;
        });
    }
}
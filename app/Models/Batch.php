<?php

namespace CodeDay\Models;

class Batch extends ClearModel
{
    public static function current()
    {
        return new self(self::clearGet('/batches/current'));
    }

    public function starts_at()
    {
        return strtotime($this->remote_data['starts_at']);
    }

    public function ends_at()
    {
        return strtotime($this->remote_data['ends_at']);
    }
}

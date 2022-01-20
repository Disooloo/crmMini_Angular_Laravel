<?php

namespace App\Services\Status;


use App\Models\Status;

class StatusService
{

    public function getItems()
    {
        return Status::all();
    }
}

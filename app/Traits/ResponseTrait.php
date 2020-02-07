<?php

namespace App\Traits;

trait ResponseTrait
{
    public function error($message)
    {
        return response()->json([
            'message' => $message
        ])->setStatusCode(400);
    }
}

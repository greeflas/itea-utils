<?php

namespace App;

final class JsonUtil
{
    public static function encode(array $data)
    {
        $json = \json_encode($data);

        if (\json_last_error() !== \JSON_ERROR_NONE) {
            throw new \RuntimeException();
        }

        return $json;
    }
}

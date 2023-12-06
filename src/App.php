<?php

namespace Cp\Crypt;

use phpseclib3\Crypt\RSA;


class App
{
    public function encrypt($apiKey, $apiSecret)
    {
        $publicKeyContent = file_get_contents(__DIR__ . '/../public_key.pem');

        $rsa = RSA::load($publicKeyContent)->withHash('sha512')->withMGFHash('sha512');
        $curTime = round(microtime(true) * 1000);

        $tokenArray = [];
        $tokenArray['ApiKey'] = $apiKey;
        $tokenArray['ApiSecret'] = $apiSecret;
        $tokenArray['TokenCreationTime'] = $curTime;

        return base64_encode($rsa->encrypt(json_encode($tokenArray)));
    }
}

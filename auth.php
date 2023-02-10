<?php
require_once __DIR__ . '/vendor/autoload.php';

use Firebase\JWT\JWT;
use Firebase\JWT\Key;

class JwtAuth
{
    private $key;
    private $alg;

    public function __construct()
    {
        $this->key = "secret_key";
        $this->alg =  'HS512';
    }

    public function encode($payload)
    {
        $jwt = JWT::encode($payload, $this->key, $this->alg);

        return $jwt;
    }

    public function decode($token)
    {
        try {
            $decoded = JWT::decode($token, new Key($this->key, $this->alg));

            return $decoded;
        } catch (\Exception $e) {
            echo "Decoding failed";
            print_r($e);
            return false;
        }
    }
}

?>
<?php 


class KeyManager
{
    private $secretKey;

    public function __construct(string $secretKey)
    {
        $this->secretKey = $secretKey;
    }

    public function getSecretKey(): string
    {
        return $this->secretKey;
    }
}

class JwtAuth
{
    private $keyManager;

    public function __construct(KeyManager $keyManager)
    {
        $this->keyManager = $keyManager;
    }

    public function encode(array $payload): string
    {
        $secretKey = $this->keyManager->getSecretKey();
        $header = [
            'alg' => 'HS256',
            'typ' => 'JWT',
        ];

        $payload['exp'] = time() + 3600; // expires in 1 hour

        $header = base64_encode(json_encode($header));
        $payload = base64_encode(json_encode($payload));

        $signature = hash_hmac('sha256', "$header.$payload", $secretKey, true);
        $signature = base64_encode($signature);

        return "$header.$payload.$signature";
    }

    public function decode(string $token)
    {
        $secretKey = $this->keyManager->getSecretKey();

        [$headerEncoded, $payloadEncoded, $signatureEncoded] = explode('.', $token);

        $header = json_decode(base64_decode($headerEncoded), true);
        $payload = json_decode(base64_decode($payloadEncoded), true);
        $signature = base64_decode($signatureEncoded);

        $expectedSignature = hash_hmac('sha256', "$headerEncoded.$payloadEncoded", $secretKey, true);

        if ($signature !== $expectedSignature) {
            throw new Exception('Invalid signature');
        }

        if (time() > $payload['exp']) {
            throw new Exception('Token has expired');
        }

        return $payload;
    }
}


?>
# Laravel Legacy Encrypter

This encryption package provides support for the legacy Mcrypt encrypter used by Laravel 5.0 through 5.2. It is primarily intended to be used to migrate your data to the new OpenSSL based encrypter used in 5.1 through the latest release of Laravel.

#### Usage Example

    use Laravel\LegacyEncrypter\McryptEncrypter;

    $encrypter = new McryptEncrypter($encryptionKey);

    $encrypted = $encrypter->encrypt('I am encrypted!');

    $decrypted = $encrypter->decrypt($encrypted);

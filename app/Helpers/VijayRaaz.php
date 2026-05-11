<?php
use Illuminate\Support\Str;
use App\Models\Category;
use App\Models\Seminars;

if (!function_exists('generateSlug')) {
    function generateSlug(string $slug, $modelName): string
    {
        $base = Str::slug($slug);
        $slugs = $modelName::whereRaw("slug REGEXP ?",["^{$base}(-[0-9]+)?$"])->pluck('slug')->toArray();
        if (!in_array($base, $slugs)) { return $base; }
        $i = 1;
        while (in_array("{$base}-{$i}", $slugs)) {
            $i++;
        }
        return "{$base}-{$i}";
    }
}

if (!function_exists('encrypt')) {

    function encrypt($id)
    {
        $simple_id = $id;

        $ciphering = "AES-128-CTR";

        $options = 0;

        $encryption_iv = '1234567891011121';

        $encryption_key = "$2y$10\$sCCllRntt8aTf3M5lxqyXeabehx7Z5UyIHo8ENeHV2H8BumxFbdKi";

        $encryption = openssl_encrypt(
            $simple_id,
            $ciphering,
            $encryption_key,
            $options,
            $encryption_iv
        );
        return $encryption;
    }
}

if (!function_exists('decrypt')) {

    function decrypt($encryption)
    {
        $ciphering = "AES-128-CTR";

        $options = 0;

        $decryption_iv = '1234567891011121';

        $decryption_key = "$2y$10\$sCCllRntt8aTf3M5lxqyXeabehx7Z5UyIHo8ENeHV2H8BumxFbdKi";

        $decryption = openssl_decrypt(
            $encryption,
            $ciphering,
            $decryption_key,
            $options,
            $decryption_iv
        );

        return $decryption;
    }
}
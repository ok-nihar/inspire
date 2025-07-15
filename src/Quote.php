<?php

namespace Vovance\Inspire;

class Quote
{
    public static function get()
{
    $ch = curl_init('https://zenquotes.io/api/random');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);

    if (curl_errno($ch)) {
        curl_close($ch);
        return 'Could not fetch quote at this time.';
    }

    curl_close($ch);

    $data = json_decode($result, true);

    if (isset($data[0]['q']) && isset($data[0]['a'])) {
        return $data[0]['q'] . ' — ' . $data[0]['a'];
    }

    return 'Could not fetch quote at this time.';
}
}
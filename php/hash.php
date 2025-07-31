<?php
function generateHash($filePath, $algorithm = 'sha256') {
    if (!file_exists($filePath)) {
        return false;
    }

    switch (strtolower($algorithm)) {
        case 'md5':
            return md5_file($filePath);
        case 'sha256':
            return hash_file('sha256', $filePath);
        default:
            return false;
    }
}

function verifyHash($filePath, $hash, $algorithm = 'sha256') {
    $generatedHash = generateHash($filePath, $algorithm);
    return $generatedHash === $hash;
}
?>
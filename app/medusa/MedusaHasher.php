<?php

use Illuminate\Hashing\HasherInterface;

class MedusaHasher implements HasherInterface {

    public function make($value, array $options = array()) {
        return sha1($value);
    }

    public function check($value, $hashedValue, array $options = array()) {
        return $hashedValue == sha1($value);
    }

    public function needsRehash($hashedValue, array $options = array()) {
        return false;
    }

}
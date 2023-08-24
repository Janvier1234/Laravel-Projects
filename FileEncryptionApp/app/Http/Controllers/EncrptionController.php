<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class EncrptionController extends Controller
{
    public function encrypt(){
        $encrypted = Crypt::encryptString('Hello, this is a test message');
        return $encrypted;
    }
    public function decrypt(){
        $decrypt = Crypt::decryptString('eyJpdiI6Iis0bUZ6blBSbHJ6cGJMN0x4bGNjSkE9PSIsInZhbHVlIjoidDJYWjN5aWNqdmg2bzk2Tkw1SG9nbUlURjU3MHFhRmxRZWo3SjRjZDYwRT0iLCJtYWMiOiJjNTJmZjA1ZjIzYzAxNTJhNTNiNjAwNTFjMGQ4ZjkxNjM4ZDE4OGZkMDA3ZmYzNjNhZGU1M2ZkNmQ2M2NlNWI1IiwidGFnIjoiIn0'); 
        return $decrypt;
    }
}
 
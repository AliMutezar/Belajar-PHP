<?php

    class SosialMedia
    {

    }

    class Facebook extends SosialMedia
    {
        final public function login(string $username, string $password): bool
        {
            return true;
        }
    }

    // ini error, jika parent facebook-nya sudah final jadi tidak bisa diturunkan lagi
    class FakeFacebook extends Facebook
    {

        // function login error, karena login di parent sudah final dan tidak bisa di overriding di dalam child
        // public function login(string $username, string $password): bool
        // {
        //     return false;
        // }
    }


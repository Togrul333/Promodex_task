<?php

namespace App\Lib\Repositories;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CustomerRepository
{
    public function save($data)
    {
        DB::beginTransaction();
        try {
            $user = User::create([
                'first_name' => $data['firstname'],
                'last_name' => $data['lastname'],
                'name' => $data['email'],
                'email' => $data['email'],
                'password' => bcrypt($data['password']),
            ]);

            Auth::login($user);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            throw $e;
        }
        return $user;

    }

}

<?php

namespace App\Actions\Fortify;

use App\Models\User;
use App\Models\UserWallet;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Illuminate\Support\Str;
use Cookie;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        $referred_by = Cookie::get('referral');
        Validator::make($input, [
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'password' => $this->passwordRules(),
        ])->validate();

        $user =  User::create([
            'email' => $input['email'],
            'user_type' => 'Client',
            'password' => Hash::make($input['password']),
            'affiliate_id' => Str::random(10),
            'referred_by'   => $referred_by
        ]);

        Cookie::queue(Cookie::forget('referral'));
        return $user;

    }
}

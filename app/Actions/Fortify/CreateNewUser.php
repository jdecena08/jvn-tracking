<?php

namespace App\Actions\Fortify;

use App\Models\User;
use App\Models\TravelAgent;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;
use Illuminate\Support\Str;

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
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'agency' => ['required', 'string', 'max:255'],
            'agency_address' => ['required', 'string', 'max:255'],
            'personal_phone' => ['required', 'string', 'max:255'],
            'company_phone' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:16', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
        ])->validate();

        $user =  User::create([
            'username' => $input['username'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'remember_token' => Str::random(90),
        ]);

        if(! $this->createTravelAgent($user, $input)){
            abort(404);
        }

        return $user;
    }

    private function createTravelAgent(User $user, $input)
    {
        return TravelAgent::create([
            'user_id' => $user->id,
            'name' => $input['name'],
            'phone' => $input['personal_phone'],
            'agency' => $input['agency'],
            'agency_address' => $input['agency_address'],
            'agency_phone' => $input['company_phone'],
        ]);
    }
}

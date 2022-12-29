<?php

namespace App\Traits\Service;


use Hash;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

trait Authenticatable{

    /**
     * @param $email
     * @param $password
     * @return Model|Builder
     */
    public function getByCredential($email, $password): Model|Builder
    {
        $user = $this->mainInterface->query()->firstWhere('email', $email);
        if ($user && Hash::check($password, $user->password))
            return $user;

        throw new \Exception('Credential Error');
        // Define your custom methods :)
    }
}

<?php
namespace App\Repositories\User;

use App\Models\User;

/**
 * Class UserRepository
 * @package App\Repositories\User
 */
class UserRepository implements UserRepositoryContract
{
    /**
     * @param $id
     * @return mixed
     */
    public function find($id)
    {
        return User::findOrFail($id);
    }
}

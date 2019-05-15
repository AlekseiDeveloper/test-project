<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 14.05.2019
 * Time: 14:07
 */

namespace App\Repositories;

use App\User as Model;

use App\Repositories\CoreRepository;

class UserRepository extends CoreRepository
{
    protected function getModelClass()
    {
        return Model::class;
    }

    public function getOneUser($id)
    {
        return $this->startCondition()->find($id);
    }
}
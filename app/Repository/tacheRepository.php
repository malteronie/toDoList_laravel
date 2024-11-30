<?php

namespace App\Repository;

use App\Models\tache;
use App\Models\User;

class tacheRepository{

    /**
     * @var User
     */
    private $user; 
    /**
     * @var Message
     */
    private $message; 

    public function __construct(User $user, tache $tache)
    {
        $this->user = $user;
        $this->message = $tache;  
    }

    public function getTache(int $userId){
        return $this->user->newQuery()
        ->select('name', 'id')
        ->where('id', '!=', $userId)
        ->orderBy('id', 'DESC')
        ->get();
    }
}
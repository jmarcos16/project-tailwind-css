<?php

namespace App\Http\Livewire;

use App\Models\User as Users;
use Livewire\Component;
use Livewire\WithPagination;

class User extends Component
{

    use WithPagination;

    // public $users;

    public function render()
    {

        // $this->users = Users::paginate(10);

        return view(
            'livewire.user',
            ['users' => Users::paginate(8)]
        );
    }
}

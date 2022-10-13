<?php

namespace App\Http\Livewire;

use App\Models\Saving;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class ShowUsers extends Component
{
    use WithPagination;

    public $search, $user, $saving;
    public $open_show = false;

    public function show(User $user){
        $this->user = $user;
        $this->open_show = true;
    }
    
    public function updatingSearch(){ 
        $this->resetPage();
    }

    public function render()
    {
        $users = User::where('name', 'like', '%'.$this->search.'%')
                ->Orwhere('username', 'like', '%'.$this->search.'%')
                ->Orwhere('identification', 'like', '%'.$this->search.'%')
                ->Orwhere('email', 'like', '%'.$this->search.'%')
                ->paginate(20);

        return view('livewire.show-users', compact('users'));
    }
}

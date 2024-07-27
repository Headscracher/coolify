<?php

namespace App\Livewire\Team\Member;

use App\Models\Server;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class Permissions extends Component
{
    public ?Collection $servers = null;

    public function mount()
    {
        $this->servers = Server::ownedByCurrentTeam()->get();
    }

    public function render()
    {
        return view('livewire.team.member.permissions');
    }
}

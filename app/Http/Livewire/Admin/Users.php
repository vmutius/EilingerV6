<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Users extends Component
{
    use WithPagination;
    public $searchUsername;
    public $searchUserEmail;
    public $searchStatusProject;
    public $searchname_inst;

    protected $paginationTheme = 'bootstrap';

    public function mount()
    {
        $this->searchUsername = '';
        $this->searchUserEmail = '';
        $this->searchStatusProject = '';
        $this->searchname_inst = '';
    }

    public function render()
    {
        $users = User::with('sendApplications')->orderBy('lastname')
            ->when($this->searchUsername != '', function ($query) {
                $query->where('username', 'like', '%' . $this->searchUsername . '%');
            })
            ->when($this->searchUserEmail != '', function ($query) {
                $query->where('email', 'like', '%' . $this->searchUserEmail . '%');
            })
            ->when($this->searchname_inst != '', function ($query) {
                $query->where('name_inst', 'like', '%' . $this->searchname_inst . '%');
            })
        ->paginate(20);

        return view('livewire.admin.users', [
            'users' => $users,
        ])
            ->layout(\App\View\Components\Layouts\AdminDashboard::class);
    }
}

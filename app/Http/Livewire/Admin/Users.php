<?php
  
namespace App\Http\Livewire\Admin;
  
use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;
  
class Users extends Component
{
    use WithPagination;
    public $searchUsername;
    public $searchUserEmail;
    public $searchStatusProjekt;

    protected $paginationTheme = 'bootstrap';
   
    public function mount()
    {
        $this->searchUsername = '';
        $this->searchUserEmail = '';
        $this->searchStatusProjekt = '';
    }
    
    public function render()
    {
        $users = User::query()
            ->when($this->searchUsername!='', function($query){
                $query->where('username', 'like','%'.$this->searchUsername.'%');
             })    
             ->when($this->searchUserEmail!='', function($query){
                $query->where('email', 'like','%'.$this->searchUserEmail.'%');
             })  
             ->when($this->searchStatusProjekt!='', function($query){
                $query->where('email', 'like','%'.$this->searchUserEmail.'%');
             })
            ->paginate(10);
            
        return view('livewire.admin.users', [
                'users' => $users
            ])
            ->layout(\App\View\Components\Layouts\AdminDashboard::class);
    }
}
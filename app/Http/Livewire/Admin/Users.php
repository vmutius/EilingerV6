<?php
  
namespace App\Http\Livewire\Admin;
  
use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;
use Illuminate\Support\Collection;
  
class Users extends Component
{
    use WithPagination;
    public $searchUsername;
    public $searchUserEmail;
    public $searchStatusProject;


    protected $paginationTheme = 'bootstrap';
   
    public function mount()
    {
        $this->searchUsername = '';
        $this->searchUserEmail = '';
        $this->searchStatusProject = '';
    }
    
    public function render()
    {
        $users = User::with('sendApplications')
            ->when($this->searchUsername!='', function($query){
                $query->where('username', 'like','%'.$this->searchUsername.'%');
            }) 
            ->when($this->searchUserEmail!='', function($query){
                 $query->where('email', 'like','%'.$this->searchUserEmail.'%');
             })  
            ->when($this->searchStatusProject!='', function($query){
                $query->where('appl_status', 'like','%'.$this->searchStatusProject.'%');
            })
        ->paginate(20);
        
 
            
        return view('livewire.admin.users', [
                'users' => $users
            ])
            ->layout(\App\View\Components\Layouts\AdminDashboard::class);
    }

}
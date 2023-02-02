<?php
  
namespace App\Http\Livewire\Admin;
  
use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;
  
class Users extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
   
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function render()
    {
        return view('livewire.admin.users', [
                'users' => User::paginate(10)
            ])
            ->layout(\App\View\Components\Layouts\AdminDashboard::class);
    }
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        $this->title = $user->title;
        $this->body = $user->body;
  
        $this->updateMode = true;
    }
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function update()
    {
        $user = User::find($this->user_id);
        $user->update([
            'lastname' => $this->lastname,
            'firstname' => $this->firstname,
        ]);
  
        $this->updateMode = false;
  
        session()->flash('message', 'Benutzerdaten aktualisiert');
    }
   
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function delete($id)
    {
        User::find($id)->delete();
        session()->flash('message', 'User Deleted Successfully.');
    }
}
<?php
  
namespace App\Http\Livewire;
  
use Livewire\Component;
use App\Models\User;
  
class Users extends Component
{
    public $username, $salutation, $lastname, $firstname, $birthday, $nationality, $telefon, $email, $password, $password_confirmation;
    public $nameInst, $user_id, $telefonInst, $emailInst, $website, $sozVersNr, $civilStatus;
    
    public $updateMode = false;
   
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function render()
    {
        $this->Users = User::all();
        return view('livewire.users');
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
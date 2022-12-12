<?php
  
namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\User;
use App\Models\Address;
  
class Antrag extends Component
{
    public $currentStep = 1;
    public $successMessage = '';
  
    public function mount() 
    {
        $this->user=auth()->user();
    }
   
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function render()
    {
        return view('livewire.user.antrag')
            ->layout(\App\View\Components\Layouts\UserDashboard::class);
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function Step1UserSubmit()
    {
        $user = User::find($this->user_id);
        $user->update([
            'lastname' => $this->lastname,
            'firstname' => $this->firstname,
        ]);

 
        $this->currentStep = 2;
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function Step2AddressSubmit()
    {
        $address = Address::find($this->user_id);
        $address->update([
            'lastname' => $this->lastname,
            'firstname' => $this->firstname,
        ]);
  
        $this->currentStep = 3;
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function save_antrag()
    {      
        //Alle Daten müssen vorhanden sein
        //Was soll dann passieren?
        //Sicher eine Erfolgsmeldung und dann redirekt zu ??
        //$this->currentStep = 1;
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function back($step)
    {
        $this->currentStep = $step;    
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function clearForm()
    {
        $this->name = '';
        $this->amount = '';
        $this->description = '';
        $this->stock = '';
        $this->status = 1;
    }
}
<?php
  
namespace App\Http\Livewire\User;

use App\Models\Account;
use Livewire\Component;
use App\Models\User;
use App\Models\Address;
use App\Models\Application;
use App\Models\Cost;
use App\Models\Education;
use App\Models\Enclosure;
use App\Models\Financing;
use App\Models\Parents;
use App\Models\Sibling;
use App\Models\Country;
use Illuminate\Support\Collection;

class Antrag extends Component
{
    public $currentStep = 1;
    public $validationOK = false;

    protected $listeners = ['validated'=>'showValidation'];

    public function mount($application_id) 
    {
        $this->application = Application::where('user_id', auth()->user()->id)
            ->first() ?? new Application;
        session(['appl_id' => $application_id]);   
        
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
   
    
    public function SendApplication()
    {   
        
        $this->application->appl_status = 'pending';
        $this->application->save();
    }
  
    public function increaseStep()
    {
        $this->currentStep++;
    }

    public function decreaseStep()
    {
        $this->currentStep--;
    }

    public function showValidation()
    {
        $this->validationOK = true;
        $errors = $this->getErrorBag();
        dd($errors);
    }
}
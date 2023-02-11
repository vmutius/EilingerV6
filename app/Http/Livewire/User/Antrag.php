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
    public $address;

    public function mount($application_id) 
    {
        $this->application = Application::where('user_id', auth()->user()->id)
            ->first() ?? new Application;
            $this->address = Address::where('user_id', auth()->user()->id)
            ->where('isWochenaufenthalt', 0)    
            ->first();
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
        $this->validate();
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

    protected $rules = [
        'user.firstname' => 'required',
        'user.lastname' => 'required',
        'user.email' => 'required',
        'user.birthday' => 'required', 
        'user.salutation' => 'required',
        'user.nationality' => 'required',
        'user.telefon' => 'required',
        'user.mobile' => 'required',
        'user.sozVersNr' => 'required',
        'user.birthday' => 'nullable',
        'user.inCHsince' => 'nullable',
        'user.bewilligung' => 'nullable',
        'address.street' => 'required',
        'address.number' => 'required',
        'address.town' => 'required',
        'address.plz' => 'required',
        'address.country' => 'required',
    ];
}
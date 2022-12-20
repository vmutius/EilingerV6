<?php
  
namespace App\Http\Livewire\User;

use App\Models\Account;
use Livewire\Component;
use App\Models\User;
use App\Models\Address;
use App\Models\Cost;
use App\Models\Education;
use App\Models\Enclosure;
use App\Models\Financing;
use App\Models\Parents;
use App\Models\Remark;
use App\Models\Sibling;
use App\Models\Country;

class Antrag extends Component
{
    public $currentStep = 1;
    public $successMessage = '';
    public $message = '';
    public User $user;
    public Address $address;
    public Education $education;
  
    public function mount() 
    {
        $this->user = auth()->user();
        $this->address = $this->user->address->first();
    }
    
    protected $rules = [
        'user.firstname' => 'required',
        'user.lastname' => 'required',
        'user.email' => 'required',
        'user.birthday' => 'nullable', 
        'user.salutation' => 'nullable',
        'user.nationality' => 'nullable',
        'user.telefon' => 'nullable',
        'user.mobile' => 'nullable',
        'user.sozVersNr' => 'nullable',
        'address.*' => 'nullable',
        'education.*' => 'nullable',
    ];
    
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function render()
    {
        $countries = Country::all();
        $user = User::findOrfail(auth()->user()->id);

        return view('livewire.user.antrag', compact('countries', 'user'))
            ->layout(\App\View\Components\Layouts\UserDashboard::class);
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function Step1UserSubmit()
    {
        $this->user->save();
        $this->currentStep = 2;
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function Step2AddressSubmit()
    {
        $this->address->save();
        $this->currentStep = 3;
    }

    public function Step3AweichendeAddressSubmit()
    {
        $this->address->save();
        $this->currentStep = 4;
    }


    public function Step4EducationSubmit()
    {
        $this->education = Education::UpdateOrCreate([
            'user_id'   => auth()->user()->id,
        ],[
            'education' => $this->education,
        ]);
        $this->education->save();
        $this->currentStep = 5;
    }

    public function Step5AccountSubmit()
    {
        $account = Account::UpdateOrCreate([
            'user_id'   => auth()->user()->id,
        ],[
            'education' => $this->education,
        ]);

        $this->account->save();
        $this->currentStep = 6;
    }

    public function Step6ParentsSubmit()
    {
        $parent = Parent::UpdateOrCreate([
            'user_id'   => auth()->user()->id,
        ],[
            'education' => $this->education,
        ]);
        $this->parent->save();
        $this->currentStep = 7;
    }
    public function Step7SiblingSubmit()
    {
        $sibling = Sibling::UpdateOrCreate([
            'user_id'   => auth()->user()->id,
        ],[
            'education' => $this->education,
        ]);
        $this->sibling->save();
        $this->currentStep = 8;
    }

    public function Step8CostSubmit()
    {
        $cost = Cost::UpdateOrCreate([
            'user_id'   => auth()->user()->id,
        ],[
            'education' => $this->education,
        ]);
        $this->cost->save();
        $this->currentStep = 9;
    }

    public function Step9FinancingSubmit()
    {
        $financing = Financing::UpdateOrCreate([
            'user_id'   => auth()->user()->id,
        ],[
            'education' => $this->education,
        ]);
        $this->financing->save();
        $this->currentStep = 10;
    }

    public function Step10RemarkSubmit()
    {
        $remark = Remark::UpdateOrCreate([
            'user_id'   => auth()->user()->id,
        ],[
            'education' => $this->education,
        ]);
        $this->remark->save();
        $this->currentStep = 11;
    }

    public function Step11EnclosureSubmit()
    {
        $enclosure = Enclosure::UpdateOrCreate([
            'user_id'   => auth()->user()->id,
        ],[
            'education' => $this->education,
        ]);
        $this->enclosure->save();
    }

    public function SendApplication()
    {

    }
  
    public function increaseStep()
    {
        $this->currentStep++;
        $this->emit('moveNext');
    }

    public function decreaseStep()
    {
        $this->currentStep--;
        $this->emit('movePrevious');
    }

}
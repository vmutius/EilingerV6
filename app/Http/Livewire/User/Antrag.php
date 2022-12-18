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

class Antrag extends Component
{
    public $currentStep = 1;
    public $successMessage = '';
    public User $user;
    public Address $address;
    public Education $education;
  
    public function mount() 
    {
        $this->currentStep = 1;
        $this->user = auth()->user();
        $this->address = $this->user->address->first();
    }
    
    protected $rules = [
        'user.firstname' => 'required',
        'user.lastname' => 'required',
        'user.email' => 'required',
        'user.birthday' => 'nullable', 
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
        
        return view('livewire.user.antrag', ['user' => User::findOrfail(auth()->user()->id)])
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

    public function Step3EducationSubmit()
    {
        $education = Education::UpdateOrCreate([
            'user_id'   => auth()->user()->id,
        ],[
            'education' => $this->education,
        ]);
        $this->currentStep = 4;
    }

    public function Step4AccountSubmit()
    {
        $account = Account::find($this->user_id);
        $account->update([
            'street' => $this->street,
            'firstname' => $this->firstname,
        ]);
  
        $this->currentStep = 5;
    }

    public function Step5ParentsSubmit()
    {
        $parents = Parents::find($this->user_id);
        $parents->update([
            'street' => $this->street,
            'firstname' => $this->firstname,
        ]);
  
        $this->currentStep = 6;
    }
    public function Step6SiblingSubmit()
    {
        $sibling = Sibling::find($this->user_id);
        $sibling->update([
            'street' => $this->street,
            'firstname' => $this->firstname,
        ]);
  
        $this->currentStep = 7;
    }

    public function Step7CostSubmit()
    {
        $cost = Cost::find($this->user_id);
        $cost->update([
            'street' => $this->street,
            'firstname' => $this->firstname,
        ]);
  
        $this->currentStep = 8;
    }

    public function Step8FinancingSubmit()
    {
        $financing = Financing::find($this->user_id);
        $financing->update([
            'street' => $this->street,
            'firstname' => $this->firstname,
        ]);
  
        $this->currentStep = 9;
    }

    public function Step9RemarkSubmit()
    {
        $remark = Remark::find($this->user_id);
        $remark->update([
            'street' => $this->street,
            'firstname' => $this->firstname,
        ]);
  
        $this->currentStep = 10;
    }

    public function Step10EnclosureSubmit()
    {
        $enclosure = Enclosure::find($this->user_id);
        $enclosure->update([
            'street' => $this->street,
            'firstname' => $this->firstname,
        ]);
  
        $this->currentStep = 3;
    }

    public function SendApplication()
    {

    }
  
    public function increaseStep()
    {
         $this->currentStep++;
    }

    public function decreaseStep()
    {
        $this->currentStep--;
    }

}
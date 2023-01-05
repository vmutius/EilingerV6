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
use Carbon\Carbon;

class Antrag extends Component
{
    public $currentStep = 1;
    public $successMessage = '';
    public $message = '';
    public $birthday;
    public User $user;
    public Address $address;
    public Address $abweichendeAddress;
    public Education $education;
    public Account $account;
    public Parents $mother;
    public Parents $father;
    public Parents $stepmother;
    public Parents $stepfather;
    

    protected $casts = [
        'birthday' => 'date:d.m.Y',
    ];
  
    public function mount() 
    {
        $this->user = auth()->user();
        $this->address = $this->user->address->first();
        $this->abweichendeAddress = Address::firstOrNew([
            'isWochenaufenthalt' => true,
            'user_id' => $this->user->id,
        ]);
        $this->education = Education::firstOrNew([
            'user_id' => $this->user->id,
        ]);
        $this->account = Account::firstOrNew([
            'user_id' => $this->user->id,
        ]);
        $this->mother = Parents::firstOrNew([
            'user_id' => $this->user->id,
            'parent_type' => 'mother',
        ]);
        $this->father = Parents::firstOrNew([
            'user_id' => $this->user->id,
            'parent_type' => 'father',
        ]);
        $this->stepmother = Parents::firstOrNew([
            'user_id' => $this->user->id,
            'parent_type' => 'stepmother',
        ]);
        $this->stepfather = Parents::firstOrNew([
            'user_id' => $this->user->id,
            'parent_type' => 'stepfather',
        ]);

        //$this->user->birthday = Carbon::createFromFormat('Y-m-d', (auth()->user()->birthday))->format('d.m.Y');
        //$this->user->birthday = Carbon::parse((auth()->user()->birthday))->format('d.m.Y');
    }
    
    protected $rules = [
        'user.firstname' => 'required',
        'user.lastname' => 'required',
        'user.email' => 'required',
        'user.birthday' => 'sometimes', 
        'user.salutation' => 'sometimes',
        'user.nationality' => 'sometimes',
        'user.telefon' => 'sometimes',
        'user.mobile' => 'sometimes',
        'user.sozVersNr' => 'sometimes',
        'user.birthday' => 'sometimes',
        'user.inCHsince' => 'sometimes',
        'user.bewilligung' => 'sometimes',
        'address.street' => 'sometimes',
        'address.number' => 'sometimes',
        'address.town' => 'sometimes',
        'address.plz' => 'sometimes',
        'address.country' => 'sometimes',
        'abweichendeAddress.street' => 'sometimes',
        'abweichendeAddress.number' => 'sometimes',
        'abweichendeAddress.town' => 'sometimes',
        'abweichendeAddress.plz' => 'sometimes',
        'abweichendeAddress.country' => 'sometimes',
        'education.education' => 'sometimes',
        'education.name' => 'sometimes',
        'education.final' => 'sometimes',
        'education.grade' => 'sometimes',
        'education.ects-points' => 'sometimes',
        'education.time' => 'sometimes',
        'account.name_bank' => 'sometimes',
        'account.city_bank' => 'sometimes',
        'account.owner' => 'sometimes',
        'account.IBAN' => 'sometimes',
        'mother.lastname' => 'sometimes',
        'mother.firstname' => 'sometimes',
        'mother.birthday' => 'sometimes',
        'mother.address' => 'sometimes',
        'mother.plz_ort' => 'sometimes',
        'mother.since' => 'sometimes',
        'mother.job_type' => 'sometimes',
        'mother.job' => 'sometimes',
        'mother.employer' => 'sometimes',
        'mother.inCHsince' => 'sometimes',
        'mother.marriedSince' => 'sometimes',
        'mother.separatedSince' => 'sometimes',
        'mother.divorcedSince' => 'sometimes',
        'mother.death' => 'sometimes',
        'father.lastname' => 'sometimes',
        'father.firstname' => 'sometimes',
        'father.birthday' => 'sometimes',
        'father.address' => 'sometimes',
        'father.plz_ort' => 'sometimes',
        'father.since' => 'sometimes',
        'father.job_type' => 'sometimes',
        'father.job' => 'sometimes',
        'father.employer' => 'sometimes',
        'father.inCHsince' => 'sometimes',
        'father.marriedSince' => 'sometimes',
        'father.separatedSince' => 'sometimes',
        'father.divorcedSince' => 'sometimes',
        'father.death' => 'sometimes',
        'stepmother.lastname' => 'sometimes',
        'stepmother.firstname' => 'sometimes',
        'stepmother.address' => 'sometimes',
        'stepmother.plz_ort' => 'sometimes',
        'stepmother.employer' => 'sometimes',
        'stepfather.lastname' => 'sometimes',
        'stepfather.firstname' => 'sometimes',
        'stepfather.address' => 'sometimes',
        'stepfather.plz_ort' => 'sometimes',
        'stepfather.employer' => 'sometimes',

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
        $this->abweichendeAddress->user_id = auth()->user()->id;
        $this->abweichendeAddress->isWochenaufenthalt = true;
        $this->abweichendeAddress->save();
        $this->currentStep = 4;
    }


    public function Step4EducationSubmit()
    {
        $this->education->user_id = auth()->user()->id;
        $this->education->save();
        $this->currentStep = 5;
    }

    public function Step5AccountSubmit()
    {
        $this->account->user_id = auth()->user()->id;
        $this->account->save();
        $this->currentStep = 6;
    }

    public function Step6ParentsSubmit()
    {
        $this->mother->user_id = auth()->user()->id;
        $this->mother->parent_typ ='mother';
        $this->mother->save();
        $this->father->user_id = auth()->user()->id;
        $this->father->parent_typ ='father';
        $this->father->save();
        $this->stepmother->user_id = auth()->user()->id;
        $this->stepmother->parent_typ ='stepmother';
        $this->stepmother->save();
        $this->stepfather->user_id = auth()->user()->id;
        $this->stepfather->parent_typ ='stepfather';
        $this->stepfather->save();
        $this->currentStep = 7;
    }
    public function Step7SiblingSubmit()
    {
        $this->sibling->user_id = auth()->user()->id;
        $this->sibling->save();
        $this->currentStep = 8;
    }

    public function Step8CostSubmit()
    {
        $this->cost->user_id = auth()->user()->id;
        $this->cost->save();
        $this->currentStep = 9;
    }

    public function Step9FinancingSubmit()
    {
        $this->financing->user_id = auth()->user()->id;
        $this->financing->save();
        $this->currentStep = 10;
    }

    public function Step10RemarkSubmit()
    {
        $this->remark->user_id = auth()->user()->id;
        $this->remark->save();
        $this->currentStep = 11;
    }

    public function Step11EnclosureSubmit()
    {
        $this->enclosure->user_id = auth()->user()->id;
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
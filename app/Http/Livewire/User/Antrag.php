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

    public function mount($application_id) 
    {
        $this->user = auth()->user();
        $this->application = Application::where('user_id', auth()->user()->id)
            ->first() ?? new Application;
        session(['appl_id' => $application_id]);   
        $this->application->users()->attach(auth()->user()->id); 
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
        'user.sozVersNr' => 'requiredIf()',
        'user.birthday' => 'nullable',
        'user.inCHsince' => 'nullable',
        'user.bewilligung' => 'nullable',
        'address.street' => 'required',
        'address.number' => 'required',
        'address.town' => 'required',
        'address.plz' => 'required',
        'address.country' => 'required',
        'abweichendeAddress.street' => 'nullable',
        'abweichendeAddress.number' => 'nullable',
        'abweichendeAddress.town' => 'nullable',
        'abweichendeAddress.plz' => 'nullable',
        'abweichendeAddress.country' => 'nullable',
        'education.education' => 'required',
        'education.name' => 'required',
        'education.final' => 'required',
        'education.grade' => 'required',
        'education.ects-points' => 'required',
        'education.time' => 'nullable',
        'account.name_bank' => 'nullable',
        'account.city_bank' => 'nullable',
        'account.owner' => 'nullable',
        'account.IBAN' => 'nullable',
        'sibling.birth_year' => 'nullable',
        'sibling.lastname' => 'nullable',
        'sibling.firstname' => 'nullable',
        'sibling.education' => 'nullable',
        'sibling.graduation_year' => 'nullable',
        'sibling.placeOfResidence' => 'nullable',
        'sibling.getAmount' => 'nullable',
        'sibling.supportSite' => 'nullable',
        'cost.semesterFees' => 'nullable',
        'cost.fees' => 'nullable',
        'cost.educationalMaterial' => 'nullable',
        'cost.excursion' => 'nullable',
        'cost.travelExpenses' => 'nullable',
        'cost.costOfLivingWithParents' => 'nullable',
        'cost.costOfLivingAlone' => 'nullable',
        'cost.costOfLivingAlone' => 'nullable',
        'cost.costOfLivingWithPartner' => 'nullable',
        'cost.numberOfChildren' => 'nullable',
        'financing.personalContribution' => 'nullable',
        'financing.otherIncome' => 'nullable',
        'financing.incomeWhere' => 'nullable',
        'financing.incomeWho' => 'nullable',
        'financing.nettoIncome' => 'nullable',
        'financing.assets' => 'nullable',
        'financing.scholarship' => 'nullable',
        'enclosure.hasID',
        'enclosure.hasCV',
        'enclosure.hasApprenticeshipContract',
        'enclosure.hasDiploma',
        'enclosure.hasDivorce',
        'enclosure.hasRentalContract',
        'enclosure.hasCertificateOfStudy',
        'enclosure.hasTaxAssessment',
        'enclosure.hasExpenseReceipts',
        'enclosure.hasPartnerTaxAssessment',
        'enclosure.hasSupplementaryServices',
        'enclosure.hasECTSPoints',
        'enclosure.hasParentsTaxFactors'

    ];
    
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

}
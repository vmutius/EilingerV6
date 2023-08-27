<?php

namespace App\Http\Livewire\User;

use App\Enums\Form;
use App\Enums\Bereich;
use Livewire\Component;
use App\Models\Currency;
use App\Models\Application;
use Illuminate\Validation\Rules\Enum;

class Antraege extends Component
{
    public $showModal = false; 
    public $name;
    public $bereich;
    public $form;
    public $is_first;
    public $currency_id;
    public $main_application_id;
    public $first_applications;
    public $visible;
    public $main_appl_id;
    public $start_appl;
    public $end_appl;


    protected function rules() : array
    {   
        return([
            'name' => 'required',
            'bereich' => ['required',new Enum(Bereich::class)], 
            'form' => ['required',new Enum(Form::class)],
            'is_first' => 'boolean|required',
            'currency_id' => 'required',
            'main_appl_id' => 'sometimes',
            'start_appl' => 'required',
            'end_appl' => 'required',
        ]);
    }

    public function render()
    {
        $applications = Application::where('user_id', auth()->user()->id)
                        ->where('appl_status', 'not send')                
                        ->get();
        $currencies = Currency::all();

        return view('livewire.user.antraege', [
            'applications' => $applications,
            'currencies' => $currencies,
        ])
            ->layout(\App\View\Components\Layouts\UserDashboard::class);
    }

    public function addApplication()
    {
        $this->showModal = true;
    }

    public function deleteApplication($id)
    {
        Application::find($id)->delete();
        session()->flash('success', 'Antrag erfolgreich gelöscht');
    }

    public function save()
    {
        $this->validate();

        $application = Application::create([
            'name' => $this->name, 
            'bereich' => $this->bereich,
            'user_id' => auth()->user()->id,
            'form' => $this->form,
            'is_first' => $this->is_first,
            'currency_id' => $this->currency_id,
            'main_application_id' => $this->main_appl_id,
            'start_appl' => $this->start_appl,
            'end_appl' => $this->end_appl,
        ]);

        $this->name = '';
        $this->bereich = '';
        $this->form = '';
        $this->is_first = '';
        $this->currency_id ='';
        $this->main_appl_id='';
        $this->start_appl='';
        $this->end_appl='';
        
        $this->visible = false;
        $this->showModal = false;
    }

    public function close()
    {
        $this->showModal = false;
    }

    public function updatedIsFirst() 
    {
       
        if (!$this->is_first){
            $this->visible = true;
            $this->first_applications = Application::where('user_id', auth()->user()->id)
                    ->where('bereich', $this->bereich)        
                    ->where('form', $this->form)        
                    ->get();
        }
    }
}

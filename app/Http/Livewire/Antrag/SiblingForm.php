<?php

namespace App\Http\Livewire\Antrag;

use App\Enums\GetAmount;
use App\Models\Sibling;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\Rules\Enum;
use Livewire\Component;

class SiblingForm extends Component
{
    public $siblings;

    protected function rules(): array
    {
        return [
            'siblings.*.birth_year' => 'required|digits:4',
            'siblings.*.lastname' => 'required',
            'siblings.*.firstname' => 'required',
            'siblings.*.education' => 'nullable',
            'siblings.*.graduation_year' => 'nullable',
            'siblings.*.place_of_residence' => 'nullable',
            'siblings.*.get_amount' => ['nullable',new Enum(GetAmount::class)],
            'siblings.*.support_site' => [
                // Use a callback to define the condition for required_if
                function ($attribute, $value, $fail) {
                    $index = explode('.', $attribute)[1];
                    $getAmountValue = $this->siblings[$index]['get_amount'] ?? null;

                    if ($getAmountValue === GetAmount::Yes && empty($value)) {
                        $fail(__('sibling.supportedSiteNeeded'));
                    }
                },
            ],
        ];
    }

    public function mount()
    {
        $this->siblings = Sibling::where('user_id', auth()->user()->id)
            ->get() ?? new Collection;
    }

    public function render()
    {
        return view('livewire.antrag.sibling-form');
    }

    public function saveSiblings()
    {
        $this->validate();
        $this->siblings->each(function ($sibling) {
            $sibling->is_draft = false;
            $sibling->user_id = auth()->user()->id;
            $sibling->save();
        });

        session()->flash('success', __('userNotification.siblingSaved'));
    }

    public function addSibling()
    {
        $this->siblings->push(new Sibling);
    }
}

<?php

namespace App\Http\Livewire\Antrag;

use App\Enums\GetAmount;
use App\Models\Sibling;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Validation\Rules\Enum;
use Livewire\Component;

class SiblingForm extends Component
{
    public $siblings;

    protected function rules(): array
    {
        return [
            'siblings.*.birth_year' => 'sometimes|numeric|min:1910|max:3000',
            'siblings.*.lastname' => 'nullable',
            'siblings.*.firstname' => 'nullable',
            'siblings.*.education' => 'nullable',
            'siblings.*.graduation_year' => 'nullable',
            'siblings.*.place_of_residence' => 'nullable',
            'siblings.*.get_amount' => ['nullable',new Enum(GetAmount::class)],
            'siblings.*.support_site' => 'nullable',
        ];
    }

    public function attributes(): array
    {
        return [
            'siblings.*.birth_year' => __('sibling :position birth_year'),
            'siblings.*.lastname' => __('sibling :position lastname'),
            'siblings.*.firstname' => __('sibling :position firstname'),
            'siblings.*.education' => __('sibling :position education'),
            'siblings.*.graduation_year' => __('sibling :position graduation_year'),
            'siblings.*.place_of_residence' => __('sibling :position place_of_residence'),
            'siblings.*.get_amount' => __('sibling :position get_amount'),
            'siblings.*.support_site' => __('sibling :position support_site'),
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

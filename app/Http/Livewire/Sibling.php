<?php

namespace App\Http\Livewire;

use Illuminate\Support\Collection;
use Livewire\Component;

class Sibling extends Component
{
    // A collection of your models from the database
    public Collection $siblings;

    // A conditional variable that we use to show/hide the add new model inputs
    public bool $isAdding = false;

    // A variable to hold our new empty models during creation
    public Collection $addSibling;

    // Validation rules
    // These are required in order for Livewire to successfull bind to model properties using wire:model
    // Add any other validation requirements for your other model properties that you bind to
    protected $rules = [
        'siblings.*.birth_year' => ['nullable'],
        'siblings.*.lastname' => ['nullable'],
        'siblings.*.firstname' => ['nullable'],
        'siblings.*.education' => ['nullable'],
        'siblings.*.graduation_year' => ['nullable'],
        'siblings.*.place_of_residence' => ['nullable'],
        'siblings.*.get_amount' => ['nullable'],
        'siblings.*.support_site' => ['nullable'],
        'addSibling.*.birth_year' => ['nullable'],
        'addSibling.*.lastname' => ['nullable'],
        'addSibling.*.firstname' => ['nullable'],
        'addSibling.*.education' => ['nullable'],
        'addSibling.*.graduation_year' => ['nullable'],
        'addSibling.*.place_of_residence' => ['nullable'],
        'addSibling.*.get_amount' => ['nullable'],
        'addSibling.*.support_site' => ['nullable'],

    ];

    // Livewires implementation of a constructor
    public function mount()
    {
        $this->cleanUp(true);
    }

    public function hydrate()
    {
        // Get our stored Test model data from the session
        // The reason for this is explained further down
        $this->addSibling = session()->get('addSibling', collect());
    }

    public function render()
    {
        return view('livewire.sibling');
    }

    public function add()
    {
        $this->isAdding = true;

        // Push (add) a new empty Sibling model to the collection   
        $this->addSibling->push([
            'user_id' => auth()->user()->id,
        ]);  

        // Save the value of the toAdd collection to a session
        // This is required because Livewire doesnt understand how to hydrate an empty model
        // So simply adding a model results in the previous elements being converted to an array
        session()->put('addSibling', $this->addSibling);
    }

    public function save($key)
    {
        $this->addSibling->first(function ($item, $k) use ($key) {
            return $key == $k;
        })->save();

        // Remove it from the toAdd collection so that it is removed from the Add More list
        $this->addSibling->forget($key);

        // Clean things up
        $this->cleanUp(!$this->addSibling->count());
    }

    public function saveAll()
    {
        $this->addSibling->each(function ($item) {
            $item->save();
        });

        $this->cleanUp(true);
    }

    // Just a helper method for performing repeated functionality
    public function cleanUp(bool $reset = false)
    {
        // Get all the required models from the database and assign our local variable
        $this->siblings = \App\Models\Sibling::all();

        // If there are no items in the toAdd collection, do some cleanup
        // This will reset things on page refresh, although you might not want that to happen
        // If not, consider what you want to happen and change accordingly
        if ($reset) {
            $this->addSibling = collect();
            $this->isAdding = false;
            session()->forget('addSibling');
        }
    }
}

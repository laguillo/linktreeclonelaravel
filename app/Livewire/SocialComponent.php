<?php

namespace App\Livewire;

use App\Models\SocialMedia;
use Livewire\Component;

class SocialComponent extends Component
{
    public $socials;

    protected $rules = [
        'socials.*.url' => 'max:1000',
    ];

    public function mount()
    {
        $this->socials = SocialMedia::all();
    }

    public function save()
    {
        foreach ($this->socials as $social) {
            $social->save();
        }
    }

    public function render()
    {
        return view('livewire.social-component');
    }
}

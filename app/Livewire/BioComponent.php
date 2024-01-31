<?php

namespace App\Livewire;

use App\Models\Bio;
use Exception;
use Livewire\Component;
use Livewire\WithFileUploads;

class BioComponent extends Component
{
    use WithFileUploads;

    public $bio;
    public $title;
    public $description;
    public $avatar;
    public $photo;

    public function mount()
    {
        $this->bio = Bio::first();
        $this->title = $this->bio->title;
        $this->description = $this->bio->description;
        $this->avatar = $this->bio->avatar;
    }

    public function update()
    {
        // $this->validate([
        //     'title' => 'required',
        //     'description' => 'required',
        //     'avatar' => 'nullable|image|max:1024',
        // ]);

        $myBio = Bio::first();
        $myBio->title = $this->title;
        $myBio->description = $this->description;
        $myBio->save();
    }

    public function saveAvatar()
    {
        try {
            if ($this->photo) {
                $name = $this->photo->store('public');
                $myBio = Bio::first();
                if ($myBio) {
                    $myBio->avatar = '/storage/' . str_replace('public/', '', $name);
                    $myBio->save();
                    $this->avatar = $myBio->avatar;
                    $this->photo = null;
                } else {
                    // Handle the case where Bio::first() returns null
                }
            } else {
                // Handle the case where $this->photo is null
            }
        } catch (Exception $e) {
            // Handle the exception
        }
    }

    public function render()
    {
        return view('livewire.bio-component');
    }
}

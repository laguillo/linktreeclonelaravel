<?php

namespace App\Livewire;

use App\Models\Seo;
use Livewire\Component;

class SeoComponent extends Component
{
    public $seo;
    public $title;
    public $description;
    public $author;
    public $url;

    public function mount()
    {
        $this->seo = Seo::first();
        $this->title = $this->seo->title;
        $this->description = $this->seo->description;
        $this->author = $this->seo->author;
        $this->url = $this->seo->url;
    }

    public function update()
    {
        // $this->validate([
        //     'title' => 'required',
        //     'description' => 'required',
        //     'avatar' => 'nullable|image|max:1024',
        // ]);

        $seo = Seo::first();
        $seo->title = $this->title;
        $seo->description = $this->description;
        $seo->author = $this->author;
        $seo->url = $this->url;
        $seo->save();
    }


    public function render()
    {
        return view('livewire.seo-component');
    }
}

<?php

namespace App\Livewire\Pages;

use App\Models\Bio;
use App\Models\Seo;
use App\Models\SocialMedia;
use Livewire\Component;

class MyLinkTree extends Component
{
    public function render()
    {
        $bio = Bio::first();
        $socials = SocialMedia::all();
        $seo = Seo::first();

        return view('livewire.pages.my-link-tree', compact('bio', 'socials', 'seo'));
    }
}

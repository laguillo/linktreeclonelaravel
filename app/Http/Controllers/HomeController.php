<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bio;
use App\Models\SocialMedia;
use App\Models\Seo;
class HomeController extends Controller
{
    //
    public function index(){
        $bio = Bio::first();
        $socials = SocialMedia::all();
        $seo = Seo::first();
        return view('welcome',[
            'bio' => $bio,
            'socials'=>$socials,
            'seo'=>$seo,
            'avatar'=>$bio->avatar
        ]);
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('social_media', function (Blueprint $table) {
            $table->id();
            $table->string('social')->nullable();
            $table->text('icon')->nullable();
            $table->text('color')->nullable();
            $table->text('url')->nullable();
            $table->boolean('active')->default(true);
            $table->timestamps();
        });
        DB::table('social_media')->insert([
            "social" => "Youtube",
            "icon" =>'<x-fab-youtube class="w-6 h-6" />',
            "color"=>"bg-red-500",
            "active" => true
        ]);
        DB::table('social_media')->insert([
            "social" => "Instagram",
            "icon" =>'<x-fab-instagram class="w-6 h-6" />',
            "color"=>"bg-gradient-to-r from-purple-600 to-orange-500",
            "active" => true
        ]);
        DB::table('social_media')->insert([
            "social" => "X",
            "icon" =>'<x-fab-x-twitter class="w-6 h-6" />',
            "color"=>"bg-blue-400",
            "active" => true
        ]);
        DB::table('social_media')->insert([
            "social" => "Facebook",
            "icon" =>'<x-fab-facebook class="w-6 h-6" />',
            "color"=>"bg-blue-800",
            "active" => true
        ]);
        DB::table('social_media')->insert([
            "social" => "Github",
            "icon" =>'<x-fab-github class="w-6 h-6" />',
            "color"=>"bg-gray-700",
            "active" => true
        ]);
        DB::table('social_media')->insert([
            "social" => "Twitch",
            "icon" =>'<x-fab-twitch class="w-6 h-6" />',
            "color"=>"bg-purple-600",
            "active" => true
        ]);
        DB::table('social_media')->insert([
            "social" => "Discord",
            "icon" =>'<x-fab-discord class="w-6 h-6" />',
            "color"=>"bg-blue-700",
            "active" => true
        ]);
        DB::table('social_media')->insert([
            "social" => "Tiktok",
            "icon" =>'<x-fab-tiktok class="w-6 h-6" />',
            "color"=>"bg-black",
            "active" => true
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('social_media');
    }
};

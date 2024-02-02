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
        Schema::create('bios', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->string('avatar');
            $table->timestamps();
        });
        DB::table('bios')->insert([
            "title" => "Demo User",
            "description" => "demo@demo.com",
            "avatar" => "https://www.w3schools.com/howto/img_avatar.png"
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bios');
    }
};

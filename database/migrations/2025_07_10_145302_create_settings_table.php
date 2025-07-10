<?php

use App\Models\setting;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('key');
            $table->string('label');
            $table->string('value')->nullable();
            $table->string('type');
            $table->timestamps();
        });

        setting::create([
            'key' => 'site_name',
            'label' => 'Judul Situs',
            'value' => 'Laravel Website Sederhana',
            'type' => 'text',
        ]);

        setting::create([
            'key' => 'location',
            'label' => 'Alamat Kantor',
            'value' => 'Majalengka, Jawa Barat, Indonesia',
            'type' => 'text',
        ]);

        setting::create([
            'key' => 'youtube',
            'label' => 'Youtube Channel',
            'value' => 'https://www.youtube.com/@fatintsani',
            'type' => 'text',
        ]);

        setting::create([
            'key' => 'Instagram',
            'label' => 'Instagram',
            'value' => 'https://www.instagram.com/fatin_tsani',
            'type' => 'text',
        ]);

        setting::create([
            'key' => 'facebook',
            'label' => 'Facebook',
            'value' => 'https://www.facebook.com/fatintsni',
            'type' => 'text',
        ]);

        setting::create([
            'key' => 'x',
            'label' => 'X',
            'value' => 'https://x.com/fatin_tsanii',
            'type' => 'text',
        ]);

        setting::create([
            'key' => 'site_description',
            'label' => 'Site Description',
            'value' => 'Website Sederhana, dengan Admin Filament',
            'type' => 'text',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};

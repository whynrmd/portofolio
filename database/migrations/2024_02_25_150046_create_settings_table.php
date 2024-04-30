<?php

use App\Models\setting;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            'key' => '_site_name',
            'label' => 'judul situs',
            'value' => 'portofolio',
            'type' => 'text',
        ]);

        setting::create([
            'key' => '_location',
            'label' => 'alamat',
            'value' => 'Padang, Sumatera Barat, Indonesia',
            'type' => 'text',
        ]);

        setting::create([
            'key' => '_instagram',
            'label' => 'Instagram',
            'value' => 'https://www.instagram.com/weirdopsie/',
            'type' => 'text',
        ]);

        setting::create([
            'key' => '_twitter',
            'label' => 'Twitter',
            'value' => 'https://twitter.com/callacx',
            'type' => 'text',
        ]);

        setting::create([
            'key' => '_youtube',
            'label' => 'Youtube',
            'value' => 'https://www.youtube.com/channel/UCjzRbaotSZa6hTFcZv6QRMQ',
            'type' => 'text',
        ]);

        setting::create([
            'key' => '_site_description',
            'label' => 'Site Description',
            'value' => 'Portofolio Wahyuni Ramadhani',
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

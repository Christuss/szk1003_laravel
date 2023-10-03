<?php

use App\Models\Organisators;
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
        Schema::create('organisators', function (Blueprint $table) {
            $table->id('org_id');
            $table->string("name");
            $table->string("description");
            $table->timestamps();
        });

        Organisators::create(['name' => 'Alma', 'description' => 'valami valami']);
        Organisators::create(['name' => 'Alma 2', 'description' => 'valami valami 2']);
        Organisators::create(['name' => 'Alma 3', 'description' => 'valami valami 3']);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('organisators');
    }
};

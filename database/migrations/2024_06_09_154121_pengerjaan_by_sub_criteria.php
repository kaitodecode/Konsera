<?php

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
        Schema::create('PengerjaanByKriteria', function (Blueprint $table) {
            $table->foreignId("user_id")->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId("instrumen_id")->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId("sub_kriteria_id")->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId("group_id")->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->double("point");
            $table->enum("status",["rendah","sedang","tinggi"]);
            $table->double("pointMax");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('PengerjaanByKriteria');
    }
};

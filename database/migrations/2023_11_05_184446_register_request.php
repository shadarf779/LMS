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
        Schema::create('registerRequest', function (Blueprint $table) {
            $table->id();
            $table->string('userID');
            $table->string('avtivityID');
            $table->string('RequstDate');
            $table->string('status');
            $table->string('AdminAproval');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};

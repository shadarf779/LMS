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
        Schema::create('noti', function (Blueprint $table) {
            $table->id();
            $table->string('userID');
            $table->string('notificationText');
            $table->string('IsRead')->default("No");
            $table->string('RegistrationCode')->unique;
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

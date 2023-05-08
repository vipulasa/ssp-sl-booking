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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();

            // method 1 - ok but not good
            // $table->enum('role', ['admin', 'user'])->default('user');

            // method 2 - no fkin way
            // $table->string('role', 5)->default('user');

            // method 3 - perfect
            $table
                ->tinyInteger('role')
                ->default(\App\Enums\UserRole::User->value);

            // profile
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('phone', 20)->nullable();
            $table->text('address')->nullable();
            $table->string('country', 2)->nullable();
            $table->string('city')->nullable();
            $table->string('state_province')->nullable();
            $table->string('zip_code', 10)->nullable();

            // payment
            $table->string('card_number', 20)->nullable();

            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};

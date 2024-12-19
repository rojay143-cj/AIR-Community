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
            $table->id()->index('user_id');
            $table->foreignId('role_id')->nullable();
            $table->string('nickname');
            $table->string('email')->unique();
            $table->string('username')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('profile_img')->default('/assets/image/empty_image/placeholder.jpg');
            $table->enum('gender', ['Male', 'Female', 'Null']);
            $table->integer('age')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
        DB::table('users')->insert([
            [
            'role_id' => '1000',
            'nickname' => 'Admin',
            'email' => 'admin@gmail.com',
            'username' => 'admin',
            'password' => bcrypt('pop143'),
            'profile_img' => '/assets/image/login_user/admin/administrator.png',
            'age' => '00000000',
            'gender' => 'Null',
            ]
        ]);

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id',191)->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('sessions');
        Schema::dropIfExists('migrations');
    }
};

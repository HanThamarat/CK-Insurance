<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // สิ่งนี้จะสร้างฟิลด์คีย์หลักที่เพิ่มขึ้นอัตโนมัติที่เรียกว่า 'id'
            $table->string('status')->nullable(); // อนุญาตให้เป็นโมฆะ
            $table->string('name')->nullable();
            $table->string('username')->nullable();
            $table->string('password')->nullable();
            $table->string('password_token')->nullable();
            $table->string('password_teams')->nullable();
            $table->string('email')->nullable();
            $table->string('email_sending')->nullable();
            $table->string('phone')->nullable();
            $table->string('zone')->nullable();
            $table->string('branch')->nullable();
            $table->timestamp('email_verified_at')->nullable(); // สามารถเป็นค่าว่างได้ สำหรับการประทับเวลาการตรวจสอบ
            $table->string('remember_token')->nullable();
            $table->string('guard_name')->nullable();
            $table->string('status_user')->nullable();
            $table->timestamps(); // รวมถึง 'created_at', 'updated_at'
            $table->softDeletes(); // ฟังก์ชั่นการลบแบบนุ่มนวลสร้าง 'deleted_at'
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}













// use Illuminate\Database\Migrations\Migration;
// use Illuminate\Database\Schema\Blueprint;
// use Illuminate\Support\Facades\Schema;

// return new class extends Migration
// {
//     /**
//      * Run the migrations.
//      */
//     public function up(): void
//     {
//         Schema::create('users', function (Blueprint $table) {
//             $table->id();
//             $table->string('name');
//             $table->string('email')->nullable();
//             $table->string('username')->nullable();
//             $table->timestamp('email_verified_at')->nullable();
//             $table->string('password');
//             $table->rememberToken();
//             $table->foreignId('current_team_id')->nullable();
//             $table->string('profile_photo_path', 2048)->nullable();
//             $table->timestamps();
//         });

//         Schema::create('password_reset_tokens', function (Blueprint $table) {
//             $table->string('email')->primary();
//             $table->string('token');
//             $table->timestamp('created_at')->nullable();
//         });

//         Schema::create('sessions', function (Blueprint $table) {
//             $table->string('id')->primary();
//             $table->foreignId('user_id')->nullable()->index();
//             $table->string('ip_address', 45)->nullable();
//             $table->text('user_agent')->nullable();
//             $table->longText('payload');
//             $table->integer('last_activity')->index();
//         });
//     }

//     /**
//      * Reverse the migrations.
//      */
//     public function down(): void
//     {
//         Schema::dropIfExists('users');
//         Schema::dropIfExists('password_reset_tokens');
//         Schema::dropIfExists('sessions');
//     }
// };


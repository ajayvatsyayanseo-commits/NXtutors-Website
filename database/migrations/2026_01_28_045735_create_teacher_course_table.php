<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('teacher_courses', function (Blueprint $table) {
            $table->id();
            $table->string('user_id', 255)->index();   // register.user_id (uuid/string)

            // course details
            $table->string('subject', 255)->nullable();
            $table->string('board', 255)->nullable();
            $table->string('for_class', 255)->nullable();  // 6-10 etc
            $table->string('class_type', 255)->nullable(); // Home/Online/Institute

            // optional SEO/useful
            $table->string('mode', 50)->nullable(); // e.g. "Home Tuition"
            $table->enum('status', ['t','f'])->default('t');
            $table->string('date', 50)->nullable();

            // no timestamps (because your other tables also no timestamps)
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('teacher_courses');
    }
};

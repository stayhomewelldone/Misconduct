<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meldings', function (Blueprint $table) {
            $table->id();
            //hier moet nog een foreignID
            $table->foreignId("user_id")->nullable()->constrained()->nullOnDelete();
            $table->string("urgency");
            $table->string("category");
            $table->text("issue");
            $table->string("file_path")->nullable();
            $table->boolean("status")->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('melding');
    }
};

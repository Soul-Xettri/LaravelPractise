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
        Schema::create('customers', function (Blueprint $table) {
            $table->id('customer_id'); //id will be displayed as 'customer_id'
            $table->string('name',60); //name will be max 60 characters
            $table->string('email',100);
            $table->enum('gender',["M","F","Other"])->nullable(); //optional field
            $table->text("address");
            $table->date("DOB")->nullable();
            $table->string("password");
            $table->boolean("status")->default(false);
            $table->integer("points")->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};

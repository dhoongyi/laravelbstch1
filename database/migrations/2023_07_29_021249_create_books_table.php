<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments("id");
            $table->string("title");
            $table->string("authur");
            $table->tinyInteger("status")->default("1");
            $table->enum("copyright",["0","1"])->default("1");
            $table->timestamp("creaated_at")->default(DB::raw("CURRENT_TIMESTAMP")); //Not INCLUDE "S" IN timestamp
            $table->timestamp("updated_at")->default(DB::raw("CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP")); //Not Include "S" in timestamp
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};

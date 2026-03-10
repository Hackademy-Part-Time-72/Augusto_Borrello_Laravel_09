<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
{
    Schema::table('books', function (Blueprint $table) {
        $table->string('image')->nullable();
    });
}
    /**
     * Run the migrations.
     */
//   public function up()
// {
//     Schema::table('books', function (Blueprint $table) {
//         $table->string('title');
//         $table->string('author');
//         $table->integer('pages')->nullable();
//         $table->integer('year')->nullable();
//         $table->string('image')->nullable();
//     });
// }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('books', function (Blueprint $table) {
            //
        });
    }

};

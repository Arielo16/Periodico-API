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
        Schema::create('news_labels', function (Blueprint $table) {
            $table->unsignedBigInteger('id_label');
            $table->unsignedBigInteger('id_noticia');
            $table->primary(['id_label', 'id_noticia']);
            $table->foreign('id_label')->references('id_label')->on('labels')->onDelete('cascade');
            $table->foreign('id_noticia')->references('id_noticia')->on('news')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news_labels');
    }
};

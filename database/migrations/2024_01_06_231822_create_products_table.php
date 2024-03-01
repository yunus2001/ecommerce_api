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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()
                                        ->onDelete('cascade');
            $table->foreignId('category_id')->constrained()
                                        ->onDelete('cascade');
            $table->foreignId('brand_id')->constrained()
                                            ->onDelete('cascade');
            $table->string('name');
            $table->decimal('price');
            $table->integer('quantity');
            $table->integer('count')->default(0);
            $table->string('description');
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};

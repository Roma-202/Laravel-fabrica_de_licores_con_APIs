<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 100);
            $table->string('tipo', 50); 
            $table->decimal('graduacion_alcoholica', 4, 2); // Ej: 40.00
            $table->integer('capacidad_ml'); // Ej: 750, 1000
            $table->decimal('precio_unitario', 10, 2); // Hasta 99,999,999.99
            $table->integer('stock_disponible')->default(0);
            $table->date('fecha_produccion');
            $table->string('lote', 50);
            $table->enum('estado', ['Activo', 'Descontinuado', 'Agotado'])->default('Activo');
            $table->text('descripcion')->nullable();
            $table->timestamps();
            
            // indices pra mejorar consultas - Perp solo si nos alcanza tiempo
            $table->index('tipo');
            $table->index('estado');
            $table->index('lote');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}

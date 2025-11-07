<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition()
    {
        // Tipos de licores comunes
        $tipos = [
            'Ron', 'Whisky', 'Vodka', 'Tequila', 'Gin', 
            'Pisco', 'Aguardiente', 'Licor de Frutas', 
            'Brandy', 'Mezcal'
        ];

        // Nombres creativos para licores
        $nombres = [
            'Ron Añejo Premium',
            'Whisky Single Malt',
            'Vodka Cristalino',
            'Tequila Reposado',
            'Gin Artesanal',
            'Pisco Acholado',
            'Aguardiente Tradicional',
            'Licor de Café',
            'Brandy Reserva',
            'Mezcal Espadín',
            'Ron Blanco Superior',
            'Whisky de Malta',
            'Vodka Premium',
            'Tequila Añejo',
            'Gin London Dry'
        ];

        // Capacidades comunes en ml
        $capacidades = [375, 500, 750, 1000, 1750];

        // Graduaciones alcohólicas típicas por tipo
        $graduaciones = [
            'Ron' => [35.0, 40.0, 45.0],
            'Whisky' => [40.0, 43.0, 46.0],
            'Vodka' => [37.5, 40.0, 42.0],
            'Tequila' => [35.0, 38.0, 40.0],
            'Gin' => [37.5, 40.0, 47.0],
            'Pisco' => [38.0, 40.0, 42.0],
            'Aguardiente' => [29.0, 35.0, 40.0],
            'Licor de Frutas' => [15.0, 20.0, 25.0],
            'Brandy' => [36.0, 40.0, 42.0],
            'Mezcal' => [40.0, 45.0, 48.0]
        ];

        $tipo = $this->faker->randomElement($tipos);
        $capacidad = $this->faker->randomElement($capacidades);
        
        // Seleccionar graduación según el tipo
        $graduacion = $this->faker->randomElement($graduaciones[$tipo] ?? [40.0]);

        // Calcular precio base según capacidad y graduación
        $precioBase = ($capacidad / 100) * ($graduacion / 10);
        $precio = $this->faker->randomFloat(2, $precioBase * 5, $precioBase * 15);

        return [
            'nombre' => $this->faker->randomElement($nombres),
            'tipo' => $tipo,
            'graduacion_alcoholica' => $graduacion,
            'capacidad_ml' => $capacidad,
            'precio_unitario' => $precio,
            'stock_disponible' => $this->faker->numberBetween(0, 500),
            'fecha_produccion' => $this->faker->dateTimeBetween('-2 years', '-1 month'),
            'lote' => 'LOTE-' . $this->faker->year . '-' . strtoupper($this->faker->bothify('??###')),
            'estado' => $this->faker->randomElement(['Activo', 'Activo', 'Activo', 'Descontinuado', 'Agotado']), // Mayor probabilidad de "Activo"
            'descripcion' => $this->faker->optional(0.7)->sentence(15), // 70% de probabilidad de tener descripción
        ];
    }
}
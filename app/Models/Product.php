<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre',
        'tipo',
        'graduacion_alcoholica',
        'capacidad_ml',
        'precio_unitario',
        'stock_disponible',
        'fecha_produccion',
        'lote',
        'estado',
        'descripcion',
    ];

    // /**
    //  * The attributes that should be cast.
    //  *
    //  * @var array
    //  */
    // protected $casts = [
    //     'graduacion_alcoholica' => 'decimal:2',
    //     'precio_unitario' => 'decimal:2',
    //     'stock_disponible' => 'integer',
    //     'capacidad_ml' => 'integer',
    //     'fecha_produccion' => 'date',
    // ];

    // /**
    //  * Tipos de licor disponibles.
    //  *
    //  * @var array
    //  */
    // public static $tipos = [
    //     'Ron',
    //     'Vodka',
    //     'Whisky',
    //     'Ginebra',
    //     'Tequila',
    //     'Pisco',
    //     'Aguardiente',
    //     'Licor de Frutas',
    //     'Otro',
    // ];

    // /**
    //  * Estados disponibles.
    //  *
    //  * @var array
    //  */
    // public static $estados = [
    //     'Activo',
    //     'Descontinuado',
    //     'Agotado',
    // ];

    // /**
    //  * Scope para productos activos.
    //  *
    //  * @param  \Illuminate\Database\Eloquent\Builder  $query
    //  * @return \Illuminate\Database\Eloquent\Builder
    //  */
    // public function scopeActivos($query)
    // {
    //     return $query->where('estado', 'Activo');
    // }

    // /**
    //  * Scope para productos con stock disponible.
    //  *
    //  * @param  \Illuminate\Database\Eloquent\Builder  $query
    //  * @return \Illuminate\Database\Eloquent\Builder
    //  */
    // public function scopeConStock($query)
    // {
    //     return $query->where('stock_disponible', '>', 0);
    // }

    // /**
    //  * Scope para filtrar por tipo.
    //  *
    //  * @param  \Illuminate\Database\Eloquent\Builder  $query
    //  * @param  string  $tipo
    //  * @return \Illuminate\Database\Eloquent\Builder
    //  */
    // public function scopePorTipo($query, $tipo)
    // {
    //     return $query->where('tipo', $tipo);
    // }

    // /**
    //  * Accessor para mostrar el nombre completo con capacidad.
    //  *
    //  * @return string
    //  */
    // public function getNombreCompletoAttribute()
    // {
    //     return "{$this->nombre} - {$this->capacidad_ml}ml";
    // }

    // /**
    //  * Accessor para verificar si tiene stock.
    //  *
    //  * @return bool
    //  */
    // public function getTieneStockAttribute()
    // {
    //     return $this->stock_disponible > 0;
    // }

    // /**
    //  * Mutator para convertir el nombre a mayúsculas.
    //  *
    //  * @param  string  $value
    //  * @return void
    //  */
    // public function setNombreAttribute($value)
    // {
    //     $this->attributes['nombre'] = ucwords(strtolower($value));
    // }
}

<?php

use App\Models\Product;
use App\Models\Size;
//use Gloudemans\Shoppingcart\Facades\Cart;
//use PayPal\Api\Item;

/* MASTER CLASS
- HELPERS -
Los helpers, son funciones declaradas de una manera personalizada, dentro de un archivo llamado helpers

ESTOS HELPER NO FUNCIONAN HASTA QUE COMPOSER LOS RECONOSCA, ENTONCES
a)  Hay que declararlos dentro de composer.json, dependiendo de donde se localice este archivo
    esto se declara en "autoload-dev", como se muestra abajo, se inserta esta linea "files":["app\\helpers.php"]


"autoload-dev": {
    "psr-4": {
        "Tests\\": "tests/"
    },
    "files":["app\\helpers.php"]
},

b) Ahora hay que ejecutar (composer dump-autoload) para que lo reconosca y listo
*/
/*
function get_subtotal($items){

    $subtotal = 0;
    foreach($items as $item){
        $subtotal = $subtotal + ($item->price)*($item->qty);
    }

    return $subtotal;
}
*/
function get_subtotal($project){

    $subtotal = 0;

    foreach($project->sections as $section){
        foreach($section->items as $item){
            $subtotal = $subtotal + $item->price;
        }
    }
    return $subtotal;
}

/*
// Con esto se recupera el stock(quantity), segun las variantes
function quantity($product_id, $color_id = null, $size_id = null){

    $product = Product::find($product_id);

    //Solo si existe la talla
    // Caso 1
    if($size_id){
        // Cual es esa talla
        $size = Size::find($size_id);
        // Una vez encotrado la talla, ahora recuperar el color que le corresponde, y
        // obtener la varible quatity
        $quantity = $size->colors->find($color_id)->pivot->quantity;


    // Solo si existe el color
    // Caso 2
    }elseif($color_id){
        // Obtener la relacion entre product y color y mandar traer el campo quntity de la tabla pivot
        $quantity = $product->colors->find($color_id)->pivot->quantity;


    // Caso 3
    }else{
        // En el caso, que no exista, ni color y talla
        // $quantity = $product->quantity; ORIGINAL
        $quantity = 10;
    }

    return $quantity;
}
*/


// // Cantida de productos agregados a nuestro carrito de compras
// function qty_added($product_id, $color_id = null, $size_id = null){

//     // Todos los item en nuestro carrito de compras
//     $cart = Cart::content();

//     $item = $cart->where('id', $product_id)
//         ->where('option.color_id', $color_id)
//         ->where('option.size_id', $size_id)
//         ->first();


//     if($item){
//         return $item->qty;
//     }else{
//         return 0;
//     }
// }

// function qty_available($product_id, $color_id = null, $size_id = null){
//     return quantity($product_id, $color_id, $size_id) - qty_added($product_id, $color_id, $size_id);
// }



// function get_subtotal_payment($items){
//     $subtotal = 0;
//     foreach($items as $item) {
//         $subtotal = $subtotal + $item->payment;
//     }
//     return $subtotal;
// }


/*
function get_totalpayments($items){

    $totalpayments = 0;
    foreach($items as $item){
        $totalpayments = $totalpayments + ($item->payment)*($item->qty);
    }

    return $totalpayments;
}
*/
/*
function discount($item){
    // Tenemos la inf. del producto
    $product = Product::find($item->id);

    // Tenemos la cantidad disponible del mismo
    $qty_available = qty_available($item->options->product_id, $item->options->color_id = null, $item->options->size_id = null);


    // SIN TERMINAR
    if ($item->options->size_id) {
        $size = Size::find($item->options->size_id);

        $size->color()->detach($item->options->color_id);

        $size->color()->attach([
            $item->options->color_id => ['quantity' => $qty_available]
        ]);
    }elseif($item->options->color_id){
        $product->color()->detach($item->options->color_id);

        $product->color()->attach([
            $item->options->color_id => ['quantity' => $qty_available]
        ]);
    }else{
        $product->quantity = $qty_available;
        $product->save();
    }


}
*/

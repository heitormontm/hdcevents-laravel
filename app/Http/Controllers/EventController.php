<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index() {
        $nome = "Heitor"; 
        $idade = 20;
        
        $arr = [1, 2, 3, 4, 5];

        $nomes = ["Matheus", "Maria", "João", "Saulo"];

        return view('welcome', 
            [
                'nome' => $nome, 
                'idade' => $idade,
                'arr' => $arr,
                'nomes' => $nomes
            ]); 
    }

    public function create() {
         return view('events.create');
    }

    public function contact() {
        return view('contact');
    }

    public function products() {
        $busca = request('search');  
    
        return view('products', ['busca' => $busca]);
    }

    public function product_test($id = null) {
        return view('product', ['id' => $id]);
    }
}

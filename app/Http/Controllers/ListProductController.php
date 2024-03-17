<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListProductController extends Controller
{
    public function getData()
    {
        $data = [
            ["id" => 1, "produk" => "Microcontroller Boards", "gambar" => "micro.gif"],
            ["id" => 2, "produk" => "Industrial Arduino Shields", "gambar" => "arduino.jpg"],
            ["id" => 3, "produk" => "Motor Control", "gambar" => "motor.jpg"],
            ["id" => 4, "produk" => "Breakout Boards", "gambar" => "breakout.jpg"],
            ["id" => 5, "produk" => "Upgrades and Components", "gambar" => "upgrades.png"],
            ["id" => 6, "produk" => "Serial Boards", "gambar" => "serial.png"],
            ["id" => 7, "produk" => "Memory", "gambar" => "memory.jpg"],
        ];

        return $data;
    }

    public function index()
    {
        $data = $this->getData();
        return view("list_product", compact("data"));
    }
}
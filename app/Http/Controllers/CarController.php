<?php

namespace App\Http\Controllers;

use App\Models\StatCarGroup; // เปลี่ยนชื่อโมเดลให้เป็น Car ตามที่คุณต้องการ
use Illuminate\Http\Request;

class CarController extends Controller
{


    public function index()
    {
        // ดึงข้อมูลจากฐานข้อมูล
        $cars = StatCarGroup::all();

        // ตรวจสอบว่าข้อมูลถูกดึงหรือไม่
        if ($cars->isEmpty()) {
            return view('data_assets.index', ['cars' => []]); // ส่ง array ว่างไปที่ View
        }

        // ส่งข้อมูลไปที่ View modal_car.blade.php
        return view('data_assets.index', compact('cars'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use Illuminate\Routing\Controller; 

class ClientController extends Controller
{
    // عرض صفحة إدخال الموكلين
    public function create()
    {
        return view('clients.create');
    }

    // تخزين بيانات الموكل الجديد
    public function store(Request $request)
    {
        // التحقق من صحة البيانات
        $validatedData = $request->validate([
            'full_name' => 'required|unique:clients,full_name',
            'phone_number'=>'required',
            // أضف المزيد من حقول التحقق هنا إذا لزم الأمر
        ]);

        // إنشاء سجل جديد في قاعدة البيانات
        Client::create($validatedData);

        // إعادة التوجيه إلى صفحة عرض الموكلين
        return redirect()->route('clients.index')->with('success', 'تم إدخال الموكل بنجاح');
    }

    // عرض قائمة الموكلين
    public function index()
    {
        $clients = Client::all();
        return view('clients.index', compact('clients'));
    }
}

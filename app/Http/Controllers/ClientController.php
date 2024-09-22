<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use Illuminate\Routing\Controller as BaseController;

class ClientController extends BaseController
{
    // عرض صفحة إدخال الموكلين
    public function create()
    {
        return view('clients.create');
    }

    // تخزين البيانات المستلمة من الفورم
    public function store(Request $request)
    {
        // التحقق من صحة البيانات
        $validatedData = $request->validate([
            'full_name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:15',
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

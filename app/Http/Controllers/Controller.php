<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LegalCase;

class LegalCaseController extends Controller
{
    // عرض صفحة إدخال القضايا
    public function create()
    {
        return view('cases.create');
    }

    // تخزين البيانات المستلمة من الفورم
    public function store(Request $request)
    {
        // التحقق من صحة البيانات
        $validatedData = $request->validate([
            'case_number' => 'required',
            'case_type' => 'required',
            'plaintiff_name' => 'required',
            'defendant_name' => 'required',
        ]);

        // إنشاء سجل جديد في قاعدة البيانات
        LegalCase::create($validatedData);

        // إعادة التوجيه إلى صفحة عرض القضايا
        return redirect()->route('cases.index');
    }

    // عرض قائمة القضايا
    public function index()
    {
        $cases = LegalCase::all();
        return view('cases.index', compact('cases'));
    }
}

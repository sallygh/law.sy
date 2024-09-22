<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LegalCase;
use App\Models\Client;
use Illuminate\Routing\Controller as BaseController;

class LegalCaseController extends BaseController
{
    // عرض صفحة إدخال القضايا
    public function create()
    {
      

    $lastCase = LegalCase::latest('id')->first();
    $nextId = $lastCase ? $lastCase->id + 1 : 1; // إذا لم يكن هناك أي قضايا، يبدأ الترقيم من 1
    $clients = Client::all();
    return view('cases.create', compact('nextId', 'clients'));

    }

    // تخزين البيانات المستلمة من الفورم
    public function store(Request $request)
    {
        // التحقق من صحة البيانات
        $validatedData = $request->validate([
            'case_number' => 'required',
            'case_type' => 'required',
            'case_subject' => 'required',
            'plaintiff_name' => 'required',
            'defendant_name' => 'required',
           
        ]);

        // إنشاء سجل جديد في قاعدة البيانات
        $legalCase = new LegalCase();
        $legalCase->case_number = $request->case_number;
        $legalCase->case_type = $request->case_type;
        $legalCase->case_subject = $request->case_subject;
        $legalCase->plaintiff_name = $request->plaintiff_name;
        $legalCase->defendant_name = $request->defendant_name;
        $legalCase->save();

        // البحث عن العميل في جدول clients
        $client = Client::where('full_name', $request->plaintiff_name)->first();

        if ($client) {
            // إعادة التوجيه إلى صفحة عرض القضايا
            return redirect()->route('cases.index')->with('success', 'تم إدخال القضية بنجاح');
        } else {
            // إعادة التوجيه إلى صفحة إدخال الموكلين
            return redirect('http://law.test:8081/clients/create')->with('error', 'المدعي غير موجود، يرجى إدخال الموكل');
        }
    }

    // عرض قائمة القضايا
    public function index()
    {
        $cases = LegalCase::all();
        return view('cases.index', compact('cases'));
    }


    
}

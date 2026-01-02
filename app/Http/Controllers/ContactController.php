<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }

    public function store(Request $request)
    {
        // Validate form data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'nullable|email|max:255',
            'interest' => 'nullable|string',
            'message' => 'nullable|string',
        ]);

        // TODO: Lưu vào database hoặc gửi email
        // Ví dụ: Contact::create($validated);
        // hoặc: Mail::to(config('theme_data.agent.email'))->send(new ContactFormMail($validated));

        return redirect()->route('contact.index')
            ->with('success', 'Cảm ơn bạn đã liên hệ! Chúng tôi sẽ phản hồi sớm nhất có thể.');
    }
}


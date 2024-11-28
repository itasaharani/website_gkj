<?php

namespace App\Http\Controllers;
use App\Models\Feedback;

use Illuminate\Http\Request;

class FeedbackController extends Controller
{
   
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);

        Feedback::create($request->only('name', 'message'));

        return redirect()->back()->with('success', 'Feedback berhasil dikirim!');
    }

    public function index()
    {
        $feedbacks = Feedback::paginate(10); // Ganti 10 dengan jumlah item per halaman yang diinginkan

        return view('feedbackAdmin', compact('feedbacks'));
    }

    public function destroy($id)
{
    $feedback = Feedback::findOrFail($id);
    $feedback->delete();

    return redirect()->route('feedback.admin')->with('success', 'Feedback berhasil dihapus!');
}



}

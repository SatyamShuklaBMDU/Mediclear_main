<?php

namespace App\Http\Controllers;

use App\Models\CorporateID;
use App\Models\Customer;
use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{

    public function showFeedback()
    {
        $feedback = Feedback::orderBy('created_at', 'desc')
            ->get();
        $name = [];
        foreach ($feedback as $feed) {
            $user = Customer::where('user_id', $feed->user_id)->first();
            if (!$user) {
                $user = CorporateID::where('user_id', $feed->user_id)->first();
            }
            if ($user) {
                $name[] = $user->name;
            } else {
                $name[] = '';
            }
        }
        return view('dashboard.feedback', compact('feedback', 'name'));
    }
    public function filterFeedback(Request $request)
    {
        $request->validate([
            'start' => 'required|date',
            'end' => 'required|date|after_or_equal:start',
        ], [
            'start.required' => 'Start date is required.',
            'end.required' => 'End date is required.',
            'start.date' => 'Start date must be a valid date format.',
            'end.date' => 'End date must be a valid date format.',
            'end.after_or_equal' => 'End date must be equal to or after the start date.',
        ]);
        $start = $request->start;
        $end = $request->end;
        $feedback = Feedback::whereDate('created_at', '>=', $start)
            ->whereDate('created_at', '<=', $end)
            ->orderBy('created_at', 'desc')
            ->get();
            $name = [];
        foreach ($feedback as $feed) {
            $user = Customer::where('user_id', $feed->user_id)->first();
            if (!$user) {
                $user = CorporateID::where('user_id', $feed->user_id)->first();
            }
            if ($user) {
                $name[] = $user->name;
            } else {
                $name[] = '';
            }
        }
        return view('dashboard.feedback', compact('feedback', 'start', 'end','name'));
    }

    public function deleteFeedback(Request $req)
    {

        $result = Feedback::where('id', $req->id)->delete();

        if ($result) {
            return redirect()->back()->with('message', 'Delete Successfully');
        } else {
            return redirect()->back()->with('message', ' Failed');

        }

    }

    //
}

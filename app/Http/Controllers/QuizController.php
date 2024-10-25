<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\User;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function quizPage(){
        $questions = Question::inRandomOrder()->limit(5)->get();
        $question = $questions->random();

        $answers = $question->answers;

        return view('quizPage', [
            'question' => $question,
            'answers' => $answers
        ]);
    }

public function quizSubmit(Request $request, $id)
{
    $user = User::findOrFail($id);

    $valid = $request->validate([
        'level' => 'required|in:hard,medium,low',
        'answer' => 'required',
    ]);

    if (!$valid) {
        return redirect()->back()->with(['error' => 'Please enter a valid answer']);
    }

    if ($request->answer) {
        $this->addRandomScore($user, $request->level);
        return redirect()->back()->with(['success' => 'You Earned Garuda Points!']);
    } else {
        $this->subtractRandomScore($user, $request->level);
        return redirect()->back()->with(['error' => 'Try Again! Points have been deducted.']);
    }
}

private function addRandomScore(User $user, $level)
{
    $scoreIncrement = match($level) {
        'hard' => rand(80, 112),
        'medium' => rand(55, 79),
        'low' => rand(23, 54),
        default => 0
    };

    $user->update(['score' => $user->score + $scoreIncrement]);
}

private function subtractRandomScore(User $user, $level)
{
    $scoreDecrement = match($level) {
        'hard' => rand(10, 16),
        'medium' => rand(5, 9),
        'low' => rand(4, 4),
        default => 0
    };
    $newScore = max(0, $user->score - $scoreDecrement);
    $user->update(['score' => $newScore]);
}

}

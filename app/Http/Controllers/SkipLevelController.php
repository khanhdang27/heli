<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\SkipLevel;
use App\Models\StudentCourses;
use App\Models\Question;

class SkipLevelController extends Controller
{
    public function skipPrice(Request $request)
    {
        $input = $request->input();
        $level = $input['level'];

        $skip = SkipLevel::where('name', $level)->first();

        return response()->json(['token' => $skip->tokens]);
    }

    public function paymentSkipLevel(Request $request)
    {
        try {
            $input = $request->input();
            $user = User::query()
                ->where('id', \Auth::user()->id)
                ->first();
            $item = SkipLevel::where('name', $input['level'])->first();

            if ($input['level'] == 'level_60') {
                $next = '6.5';
            } elseif ($input['level'] == 'level_55') {
                $next = '6.0';
            } else {
                $next = '5.5';
            }

            $item->getAmountProduct($user);
            $user->pay($item);

            $studentCourse = StudentCourses::where('student_id', $user->id)
                ->where('course_id', $input['course_id'])
                ->first();
            switch ($input['part']) {
                case 'reading':
                    $studentCourse->update(['exam_buy_read' => $next]);
                    break;
                case 'writing':
                    $studentCourse->update(['exam_buy_write' => $next]);
                    break;
                case 'listening':
                    $studentCourse->update(['exam_buy_listen' => $next]);
                    break;
                case 'speaking':
                    $studentCourse->update(['exam_buy_speak' => $next]);
                    break;
                default:
                    // do not things
                    break;
            }
            return response()->json(['message' => 'pay success']);
        } catch (InsufficientFunds $insufficientFunds) {
            return response()->json(['error_message' => $insufficientFunds->getMessage()], 400);
        }
    }
}

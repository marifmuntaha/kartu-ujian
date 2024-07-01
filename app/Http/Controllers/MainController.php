<?php

namespace App\Http\Controllers;

use App\Http\Resources\StudentResource;
use App\Models\Student;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function studentList()
    {
        $students = Student::get();
        return view('student', ['students' => StudentResource::collection($students)]);
    }

    public function studentFind(Request $request)
    {
        try {
            $request->validate(['register' => 'required|string', 'birthdate' => 'required']);
            return ($student = Student::whereRegister($request->register)
                ->whereBirthdate(Carbon::createFromFormat('m/d/Y', $request->birthdate)
                    ->format('Y-m-d'))->first())
                ? view('studentDetail', ['student' => new StudentResource($student)])
                : throw new Exception(Carbon::createFromFormat('m/d/Y', $request->birthdate)->format('Y-m-d'));
        } catch (Exception $exception) {
            return back()->withErrors(['message' => $exception->getMessage()]);
        }
    }

    public function print(Request $request)
    {
        try {
            $student = Student::find($request->id);
            return ($card = Pdf::loadView('print', ['student' => $student]))
                ? $card->download('kartu-ujian-'.$student->register.'.pdf')
                : throw new Exception('Terjadi kesalahan server');
        } catch (Exception $exception){
            return back()->withErrors(['message' => $exception->getMessage()]);
        }
    }
}

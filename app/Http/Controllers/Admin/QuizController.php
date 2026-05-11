<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class QuizController extends Controller
{
    public function index()
    {
        $category = \DB::table('quizcategory')->orderBy('id', 'desc')->get();
        return view('admin.list.quizCategory', compact('category'));
    }

    public function edit($id)
    {
        $category = DB::table('quizcategory')->where('id', $id)->first();
        return view('admin.update.quizCategory', compact('category'));
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'        => 'required|string|max:255|unique:quizcategory,name',
            'description' => 'required',
            'status'      => 'required|integer',
        ]);

        try {
            $result = DB::table('quizcategory')->insert([
                'name'        => $validated['name'],
                'description' => $validated['description'],
                'status'      => $validated['status'],
                'slug'        => Str::slug($validated['name']),
            ]);

            return response()->json([
                'status'  => 1,
                'message' => 'Category added successfully'
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'status'  => 0,
                'message' => 'Something went wrong'
            ], 500);
        }
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'id'          => 'required|integer|exists:quizcategory,id',
            'name'        => 'required|string|max:255|unique:quizcategory,name,' . $request->id,
            'description' => 'required',
            'status'      => 'required|integer',
        ]);

        try {
            $result = DB::table('quizcategory')
                ->where('id', $validated['id'])
                ->update([
                    'name'        => $validated['name'],
                    'description' => $validated['description'],
                    'status'      => $validated['status'],
                    'slug'        => Str::slug($validated['name']),
                ]);

            if ($result) {
                return response()->json([
                    'status'  => 1,
                    'message' => 'Category updated successfully'
                ]);
            }

            return response()->json([
                'status'  => 0,
                'message' => 'No changes made'
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'status'  => 0,
                'message' => 'Something went wrong'
            ], 500);
        }
    }


    public function delete($id)
    {
        $id = decrypt($id);
        DB::table('quizcategory')->where('id', $id)->delete();
        return redirect('admin/quiz-category')->with('success', 'Category deleted successfully.');
    }

    public function quiz()
    {
        $quiz = \DB::table('quiz')->orderBy('id', 'desc')->get();
        $categories = \DB::table('quizcategory')->orderBy('id', 'desc')->get();
        return view('admin.list.quiz', compact('quiz', 'categories'));
    }

    public function editQuiz($id)
    {
        $quiz = DB::table('quiz')->where('id', $id)->first();
        $categories = \DB::table('quizcategory')->orderBy('id', 'desc')->get();
        return view('admin.update.quiz', compact('quiz', 'categories'));
    }


    public function storeQuiz(Request $request)
    {
        $validated = $request->validate([
            'categoryId' => 'required|integer|exists:quizcategory,id',
            'question' => 'required',
            'option1' => 'required',
            'option2' => 'required',
            'option3' => 'required',
            'option4' => 'required',
            'answer' => 'required',
        ]);

        try {
            $result = DB::table('quiz')->insert([
                'categoryId' => $validated['categoryId'],
                'question'   => $validated['question'],
                'option1'    => $validated['option1'],
                'option2'    => $validated['option2'],
                'option3'    => $validated['option3'],
                'option4'    => $validated['option4'],
                'answer'     => $validated['answer'],
            ]);

            return response()->json([
                'status'  => 1,
                'message' => 'Quiz added successfully'
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'status'  => 0,
                'message' => 'Something went wrong'
            ], 500);
        }
    }

    public function updateQuiz(Request $request)
    {
        $validated = $request->validate([
            'id'         => 'required|integer|exists:quiz,id',
            'categoryId' => 'required|integer|exists:quizcategory,id',
            'question'   => 'required',
            'option1'    => 'required',
            'option2'    => 'required',
            'option3'    => 'required',
            'option4'    => 'required',
            'answer'     => 'required',
        ]);

        try {
            $result = DB::table('quiz')
                ->where('id', $validated['id'])
                ->update([
                    'categoryId' => $validated['categoryId'],
                    'question'   => $validated['question'],
                    'option1'    => $validated['option1'],
                    'option2'    => $validated['option2'],
                    'option3'    => $validated['option3'],
                    'option4'    => $validated['option4'],
                    'answer'     => $validated['answer'],
                ]);

            if ($result) {
                return response()->json([
                    'status'  => 1,
                    'message' => 'Quiz updated successfully'
                ]);
            }

            return response()->json([
                'status'  => 0,
                'message' => 'No changes made'
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'status'  => 0,
                'message' => 'Something went wrong'
            ], 500);
        }
    }

    public function deleteQuiz($id)
    {
        $id = decrypt($id);
        DB::table('quiz')->where('id', $id)->delete();
        return redirect('admin/quiz')->with('success', 'Quiz deleted successfully.');
    }
    

}

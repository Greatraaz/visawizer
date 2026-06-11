<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CaseStudy;

class CaseStudyContriller extends Controller
{
    public function index()
    {
        $caseStudy = CaseStudy::latest()->get();
        return view('admin.list.caseStudy', compact('caseStudy'));
    }

    public function edit($id)
    {
        $caseStudy = CaseStudy::findOrFail($id);
        return view('admin.update.caseStudy', compact('caseStudy'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'required',
            'industry'    => 'required',
            'result'      => 'nullable',
            'status'      => 'required|integer',
            'image'       => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $validated['slug'] = generateSlug($validated['title'], \App\Models\CaseStudy::class);

        if ($request->hasFile('image')) {
            $path = public_path('assets/uploads/case-study/');
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }

            $file = $request->image;
            $fileName = $validated['slug'] . "." . $file->getClientOriginalExtension();
            $file->move($path, $fileName);
            $validated['image'] = 'assets/uploads/case-study/' . $fileName;
        }

        $result = CaseStudy::create($validated);

        if ($result) {
            return response()->json(['status' => 1, 'message' => 'Sase study added successfully']);
        } else {
            return response()->json(['status' => 0, 'message' => 'Failed to create record'], 500);
        }
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'id'          => 'required|integer|exists:case_study,id',
            'title'       => 'required|string|max:255',
            'description' => 'required',
            'industry'    => 'required',
            'result'      => 'nullable',
            'status'      => 'required|integer',
            'image'       => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $caseStudy = CaseStudy::findOrFail($validated['id']);

        if ($caseStudy->title !== $validated['title']) {
            $validated['slug'] = generateSlug($validated['title'], \App\Models\CaseStudy::class);
        } else {
            $validated['slug'] = $caseStudy->slug;
        }

        if ($request->hasFile('image')) {
            $path = public_path('assets/uploads/case-study/');

            if (!empty($caseStudy->image) && file_exists(public_path($caseStudy->image))) {
                unlink(public_path($caseStudy->image));
            }

            $file = $request->image;
            $fileName = $validated['slug'] . "." . $file->getClientOriginalExtension();
            $file->move($path, $fileName);

            $validated['image'] = 'assets/uploads/case-study/' . $fileName;
        }

        $result = $caseStudy->update($validated);

        if ($result) {
            return response()->json(['status' => 1, 'message' => 'Case study updated successfully']);
        } else {
            return response()->json(['status' => 0, 'message' => 'Failed to update case study'], 500);
        }
    }

    public function delete($id)
    {
        $caseStudy = CaseStudy::findOrFail(decrypt($id));
        if (!empty($caseStudy->image) && file_exists(public_path($caseStudy->image))) {
            unlink(public_path($caseStudy->image));
        }
        $caseStudy->delete();
        return redirect('admin/case-study')->with('success', 'caseStudy deleted successfully.');
    }

}

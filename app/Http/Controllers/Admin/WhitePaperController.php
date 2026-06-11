<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WhitePaper;

class WhitePaperController extends Controller
{
    public function index()
    {
        $whitePaper = WhitePaper::latest()->get();
        return view('admin.list.whitePaper', compact('whitePaper'));
    }

    public function edit($id)
    {
        $whitePaper = WhitePaper::findOrFail($id);
        return view('admin.update.whitePaper', compact('whitePaper'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'required',
            'status'      => 'required|integer',
            'image'       => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $validated['slug'] = generateSlug($validated['title'], WhitePaper::class);

        if ($request->hasFile('image')) {

            $path = public_path('assets/uploads/white-paper/');

            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }

            $file = $request->file('image');

            $fileName = $validated['slug'] . '.' . $file->getClientOriginalExtension();

            $file->move($path, $fileName);

            $validated['image'] = 'assets/uploads/white-paper/' . $fileName;
        }

        $result = WhitePaper::create($validated);

        if ($result) {
            return response()->json([
                'status' => 1,
                'message' => 'White paper added successfully'
            ]);
        }

        return response()->json([
            'status' => 0,
            'message' => 'Failed to create record'
        ], 500);
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'id'          => 'required|integer|exists:white_papers,id',
            'title'       => 'required|string|max:255',
            'description' => 'required',
            'status'      => 'required|integer',
            'image'       => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $whitePaper = WhitePaper::findOrFail($validated['id']);

        if ($whitePaper->title != $validated['title']) {
            $validated['slug'] = generateSlug($validated['title'], WhitePaper::class);
        } else {
            $validated['slug'] = $whitePaper->slug;
        }

        if ($request->hasFile('image')) {

            $path = public_path('assets/uploads/white-paper/');

            if (!empty($whitePaper->image) && file_exists(public_path($whitePaper->image))) {
                unlink(public_path($whitePaper->image));
            }

            $file = $request->file('image');

            $fileName = $validated['slug'] . '.' . $file->getClientOriginalExtension();

            $file->move($path, $fileName);

            $validated['image'] = 'assets/uploads/white-paper/' . $fileName;
        }

        $result = $whitePaper->update($validated);

        if ($result) {
            return response()->json([
                'status' => 1,
                'message' => 'White paper updated successfully'
            ]);
        }

        return response()->json([
            'status' => 0,
            'message' => 'Failed to update white paper'
        ], 500);
    }

    public function delete($id)
    {
        $whitePaper = WhitePaper::findOrFail(decrypt($id));

        if (!empty($whitePaper->image) && file_exists(public_path($whitePaper->image))) {
            unlink(public_path($whitePaper->image));
        }

        $whitePaper->delete();

        return redirect('admin/white-papers')
            ->with('success', 'White paper deleted successfully.');
    }
}
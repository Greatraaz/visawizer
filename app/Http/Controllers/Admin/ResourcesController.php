<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Resources;

class ResourcesController extends Controller
{
    public function index()
    {
        $resources = Resources::latest()->get();
        return view('admin.list.resources', compact('resources'));
    }

    public function edit($id)
    {
        $resources = Resources::findOrFail($id);

        return view('admin.update.resources', compact('resources'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'required',
            'status'      => 'required|integer',
            'document'    => 'required|file|max:10048',
        ]);

        if ($request->hasFile('document')) {

            $path = public_path('assets/uploads/resources/');

            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }

            $file = $request->file('document');

            $fileName = uniqid() . '.' . $file->getClientOriginalExtension();

            $file->move($path, $fileName);

            $validated['document'] = 'assets/uploads/resources/' . $fileName;
        }

        $result = Resources::create($validated);

        if ($result) {
            return response()->json([
                'status' => 1,
                'message' => 'Resource added successfully'
            ]);
        }

        return response()->json([
            'status' => 0,
            'message' => 'Failed to create resource'
        ], 500);
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'id'          => 'required|integer|exists:resources,id',
            'title'       => 'required|string|max:255',
            'description' => 'required',
            'status'      => 'required|integer',
            'document'    => 'nullable|file|max:10048',
        ]);

        $resources = Resources::findOrFail($validated['id']);

        if ($request->hasFile('document')) {

            $path = public_path('assets/uploads/resources/');

            if (!empty($resources->document) && file_exists(public_path($resources->document))) {
                unlink(public_path($resources->document));
            }

            $file = $request->file('document');

            $fileName = uniqid() . '.' . $file->getClientOriginalExtension();

            $file->move($path, $fileName);

            $validated['document'] = 'assets/uploads/resources/' . $fileName;
        }

        $result = $resources->update($validated);

        if ($result) {
            return response()->json([
                'status' => 1,
                'message' => 'Resource updated successfully'
            ]);
        }

        return response()->json([
            'status' => 0,
            'message' => 'Failed to update resource'
        ], 500);
    }

    public function delete($id)
    {
        $resources = Resources::findOrFail(decrypt($id));

        if (!empty($resources->document) && file_exists(public_path($resources->document))) {
            unlink(public_path($resources->document));
        }

        $resources->delete();

        return redirect('admin/resources')
            ->with('success', 'Resource deleted successfully.');
    }
}
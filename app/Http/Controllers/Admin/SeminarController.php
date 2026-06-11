<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Seminars;
use Illuminate\Support\Facades\DB;

class SeminarController extends Controller
{
    public function index()
    {
        $seminars = Seminars::orderBy('id', 'desc')->get();
        return view('admin.list.seminars', compact('seminars'));
    }

    public function edit($id)
    {
        $seminar = Seminars::findOrFail($id);
        return view('admin.update.seminar', compact('seminar'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'       => 'required|string|max:255',
            'speaker'     => 'required|string|max:100',
            'description' => 'required',
            'start_date'  => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'location'    => 'required',
            'type'        => 'required|in:Webinar,Seminar,Event',
            'start_time'  => 'required',
            'end_time'    => 'required',
            'status'      => 'required|integer',
            'image'       => 'required|image|mimes:jpg,jpeg,png,webp|max:1024',
        ]);
        $validated['slug'] = generateSlug($validated['title'], \App\Models\Seminars::class);
        if ($request->hasFile('image')) {
            $path = public_path('assets/uploads/seminars/');
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }
            $file = $request->image;
            $fileName = $validated['slug'] . "." . $file->getClientOriginalExtension();
            $file->move($path, $fileName);
            $validated['image'] = 'assets/uploads/seminars/' . $fileName;
        }

        $result = Seminars::create($validated);
        if ($result) {
            return response()->json(['status' => 1, 'message' => 'Record created successfully']);
        } else {
            return response()->json(['status' => 0, 'message' => 'Failed to create Record'], 500);
        }
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'id'          => 'required|integer|exists:seminars,id',
            'title'       => 'required|string|max:255',
            'speaker'     => 'required|string|max:100',
            'description' => 'required',
            'start_date'  => 'required|date',
            'end_date'    => 'required|date|after_or_equal:start_date',
            'location'    => 'required',
            'type'        => 'required|in:Webinar,Seminar,Event',
            'start_time'  => 'required',
            'end_time'    => 'required',
            'status'      => 'required|integer',
            'image'       => 'nullable|image|mimes:jpg,jpeg,png,webp|max:1024',
        ]);

        $seminar = Seminars::findOrFail($validated['id']);

        if ($seminar->title !== $validated['title']) {
            $validated['slug'] = generateSlug($validated['title'], \App\Models\Seminars::class);
        } else {
            $validated['slug'] = $seminar->slug;
        }

        if ($request->hasFile('image')) {
            $path = public_path('assets/uploads/seminars/');
            if (!empty($seminar->image) && file_exists(public_path($seminar->image))) {
                unlink(public_path($seminar->image));
            }
            $file = $request->image;
            $fileName = $validated['slug'] . '.' . $file->getClientOriginalExtension();
            $file->move($path, $fileName);
            $validated['image'] = 'assets/uploads/seminars/' . $fileName;
        }

        $result = $seminar->update($validated);
        if ($result) {
            return response()->json(['status' => 1, 'message' => 'Record updated successfully']);
        } else {
            return response()->json(['status' => 0, 'message' => 'Failed to update Record'], 500);
        }
    }

    public function delete($id)
    {
        $seminar = Seminars::findOrFail(decrypt($id));
        if (!empty($seminar->image) && file_exists(public_path($seminar->image))) {
            unlink(public_path($seminar->image));
        }
        $seminar->delete();    
        return redirect('admin/seminars')->with('success', 'Record deleted successfully.');
    }

    public function viewEnquiries($id)
    {
        $enquiries = \DB::table('eventRegistration')->where('seminarId', decrypt($id))->orderBy('id', 'desc')->get();
        $events = \DB::table('seminars')->pluck('title', 'id');
        return view('admin.list.eventEnquiries', compact('enquiries', 'events'));
    }

    public function eventEnquiries()
    {
        $enquiries = \DB::table('eventRegistration')->orderBy('id', 'desc')->get();
        $events = \DB::table('seminars')->pluck('title', 'id');
        return view('admin.list.eventEnquiries', compact('enquiries', 'events'));
    }

    public function deleteEventEnquiry($id)
    {
        \DB::table('eventRegistration')->where('id', decrypt($id))->delete();
        return redirect('admin/event-enquiries')->with('success', 'Record deleted successfully.');
    }
}

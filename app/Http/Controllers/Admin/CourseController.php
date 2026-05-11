<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Courses;
use App\Models\Order;
use App\Models\Invoice;


class CourseController extends Controller
{
    public function index()
    {
        $courses = Courses::orderBy('id', 'desc')->get();
        return view('admin.list.courses', compact('courses'));
    }

    public function edit($id)
    {
        $course = Courses::findOrFail($id);
        return view('admin.update.course', compact('course'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'required',
            'features'    => 'required',
            'duration'    => 'required|string|max:100',
            'certificate' => 'required|in:Yes,No',
            'price'       => 'nullable|integer',
            'minPrice'    => 'nullable|integer',
            'students'    => 'required|integer',
            'status'      => 'required|integer',
            'image'       => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $validated['slug'] = generateSlug($validated['title'], \App\Models\Courses::class);

        if ($request->hasFile('image')) {
            $path = public_path('assets/uploads/courses/');
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }

            $file = $request->image;
            $fileName = $validated['slug'] . "." . $file->getClientOriginalExtension();
            $file->move($path, $fileName);

            $validated['image'] = 'assets/uploads/courses/' . $fileName;
        }

        $validated['date'] = now();

        $result = Courses::create($validated);

        if ($result) {
            return response()->json(['status' => 1, 'message' => 'Course added successfully']);
        } else {
            return response()->json(['status' => 0, 'message' => 'Failed to create course'], 500);
        }
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'id'          => 'required|integer|exists:courses,id',
            'title'       => 'required|string|max:255',
            'description' => 'required',
            'features'    => 'required',
            'duration'    => 'required|string|max:100',
            'certificate' => 'required|in:Yes,No',
            'price'       => 'nullable|integer',
            'minPrice'    => 'nullable|integer',
            'students'    => 'required|integer',
            'status'      => 'required|integer',
            'image'       => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $course = Courses::findOrFail($validated['id']);

        if ($course->title !== $validated['title']) {
            $validated['slug'] = generateSlug($validated['title'], \App\Models\Courses::class);
        } else {
            $validated['slug'] = $course->slug;
        }

        if ($request->hasFile('image')) {
            $path = public_path('assets/uploads/courses/');

            if (!empty($course->image) && file_exists(public_path($course->image))) {
                unlink(public_path($course->image));
            }

            $file = $request->image;
            $fileName = $validated['slug'] . "." . $file->getClientOriginalExtension();
            $file->move($path, $fileName);

            $validated['image'] = 'assets/uploads/courses/' . $fileName;
        }

        $result = $course->update($validated);

        if ($result) {
            return response()->json(['status' => 1, 'message' => 'Course updated successfully']);
        } else {
            return response()->json(['status' => 0, 'message' => 'Failed to update course'], 500);
        }
    }

    public function viewEnquiries($name)
    {
        $enquiries = \DB::table('contactus')->where('course', $name)->orderBy('id', 'desc')->get();
        return view('admin.list.enquiries', compact('enquiries'));
    }

    public function delete($id)
    {
        $course = Courses::findOrFail(decrypt($id));
        if (!empty($course->image) && file_exists(public_path($course->image))) {
            unlink(public_path($course->image));
        }
        $course->delete();
        return redirect('admin/courses')->with('success', 'Course deleted successfully.');
    }

    public function orders()
    {
        $orders = Order::with('user')->orderBy('id', 'desc')->get();
        return view('admin.list.orders', compact('orders'));
    }

    public function viewOrder($id)
    {
        $order = Order::with(['user'])->findOrFail($id);
        return view('admin.load.order', compact('order'));
    }

    public function invoices()
    {
        $invoices = Invoice::orderBy('id', 'desc')->get();
        return view('admin.list.invoices', compact('invoices'));
    }
    
    public function viewInvoice($id)
    {
        $invoice = Invoice::with('user')->findOrFail($id);
        return view('admin.load.invoice', compact('invoice'));
    }

    public function payments()
    {
        $orders = Order::with('user')->orderBy('id', 'desc')->get();
        return view('admin.list.payments', compact('orders'));
    }

}

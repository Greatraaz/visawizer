<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Seminars;
use App\Models\CaseStudy;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Cache;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    
    public function index()
    {
        $papers = \DB::table('white_papers')->count();
        $testimonials = \DB::table('testimonials')->count();
        $resources = \DB::table('resources')->count();
        $webinars = Seminars::count();
        $caseStudy = CaseStudy::count();
        $enquiries = \DB::table('contactus')->count();
        return view('admin.index', compact('papers', 'resources', 'enquiries', 'caseStudy', 'testimonials', 'webinars'));
    }

    public function enquiries()
    {
        $enquiries = \DB::table('contactus')->orderBy('id', 'desc')->get();
        return view('admin.list.enquiries', compact('enquiries'));
    }

    public function deleteEnquiry($id)
    {
        \DB::table('contactus')->where('id', decrypt($id))->delete();
        return redirect('admin/enquiries')->with('success', 'Record deleted successfully.');
    }

    public function settings()
    {
        $settings = \DB::table('settings')->first(); 
        return view('admin.list.settings', compact('settings'));
    }

    public function saveSettings(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'phone1'    => 'nullable|string|max:15',
            'phone2'    => 'nullable|string|max:15',
            'email1'    => 'nullable|email|max:100',
            'email2'    => 'nullable|email|max:100',
            'address1'  => 'nullable|string|max:255',
            'address2'  => 'nullable|string|max:255',
            'fb'        => 'nullable|string',
            'insta'     => 'nullable|string',
            'linkedin'  => 'nullable|string',
            'youtube'   => 'nullable|string',
            'twitter'   => 'nullable|string',
            'pinterest' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        DB::table('settings')->updateOrInsert(
            ['id' => 1],
            [
                'phone1'    => $request->phone1,
                'phone2'    => $request->phone2,
                'email1'    => $request->email1,
                'email2'    => $request->email2,
                'address1'  => $request->address1,
                'address2'  => $request->address2,
                'fb'        => $request->fb,
                'insta'     => $request->insta,
                'linkedin'  => $request->linkedin,
                'youtube'   => $request->youtube,
                'twitter'   => $request->twitter,
                'pinterest' => $request->pinterest
            ]
        );

        Cache::forget('site_settings');
        return response()->json(['status' => 1, 'message' => 'Settings updated successfully']);
    }

    public function banners()
    {
        $banners = \DB::table('banners')->orderBy('orderNo', 'asc')->get();
        return view('admin.list.banners', compact('banners'));
    }

    public function editBanner($id)
    {
        $banner = DB::table('banners')->where('id', $id)->first();
        return view('admin.update.banners', compact('banner'));
    }

    public function saveBanner(Request $request)
    {
        $data = $request->validate([
            'heading'     => 'required|string|max:255',
            'description' => 'required',
            'button'      => 'required|string|max:100',
            'link'        => 'required',
            'orderNo'     => 'required',
            'status'      => 'required',
            'image'       => 'required|image|mimes:jpg,jpeg,png,webp|max:1024',
        ]);
        if ($request->hasFile('image')) {
            $path = public_path('assets/uploads/banner/');
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }
            $file = $request->image;
            $fileName = uniqid() . "." . $file->getClientOriginalExtension();
            $file->move($path, $fileName);
            $data['image'] = 'assets/uploads/banner/' . $fileName;
        }
        DB::table('banners')->insert($data);
        return response()->json(['status' => 1, 'message' => 'Banner added successfully']);
    }

    public function updateBanner(Request $request)
    {
        $data = $request->validate([
            'id'          => 'required|integer',
            'heading'     => 'required|string|max:255',
            'description' => 'required',
            'button'      => 'required|string|max:100',
            'link'        => 'required',
            'orderNo'     => 'required',
            'status'      => 'required',
            'image'       => 'nullable|image|mimes:jpg,jpeg,png,webp|max:1024',
        ]);

        $banner = DB::table('banners')->where('id', $data['id'])->first();

        if (!$banner) {
            return response()->json(['status' => 0, 'message' => 'Banner not found']);
        }

        if ($request->hasFile('image')) {
            $path = public_path('assets/uploads/banner/');
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }

            $fileName = uniqid() . '.' . $request->image->extension();
            $request->image->move($path, $fileName);
            if (!empty($banner->image) && file_exists(public_path($banner->image))) {
                unlink(public_path($banner->image));
            }
            $data['image'] = 'assets/uploads/banner/' . $fileName;
        }

        DB::table('banners')->where('id', $data['id'])->update($data);
        return response()->json(['status' => 1, 'message' => 'Banner updated successfully']);
    }

    public function deleteBanner($id)
    {
        $banner = DB::table('banners')->where('id', $id)->first();
        if (!$banner) {
            return response()->json(['status' => 0, 'message' => 'Banner not found']);
        }

        if (!empty($banner->image) && file_exists(public_path($banner->image))) {
            unlink(public_path($banner->image));
        }
        DB::table('banners')->where('id', $id)->delete(); 
        return redirect('admin/dashboard/banners')->with('success', 'Record deleted successfully.');
    }

    public function testimonials()
    {
        $testimonials = DB::table('testimonials')->orderBy('id', 'desc')->get();
        return view('admin.list.testimonials', compact('testimonials'));
    }

    public function editTestimonial($id)
    {
        $testimonial = DB::table('testimonials')->where('id', $id)->first();
        return view('admin.update.testimonials', compact('testimonial'));
    }

    public function saveTestimonial(Request $request)
    {
        $data = $request->validate([
            'name'         => 'required|string|max:255',
            'designation'  => 'nullable|string|max:255',
            'testimonial'  => 'required|string',
            'status'       => 'required',
            'image'        => 'required|image|mimes:jpg,jpeg,png,webp|max:1024',
        ]);

        if ($request->hasFile('image')) {
            $path = public_path('assets/uploads/testimonials/');
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }

            $fileName = uniqid() . '.' . $request->image->extension();
            $request->image->move($path, $fileName);

            $data['image'] = 'assets/uploads/testimonials/' . $fileName;
        }

        DB::table('testimonials')->insert($data);

        return response()->json(['status' => 1, 'message' => 'Testimonial added successfully']);
    }

    public function updateTestimonial(Request $request)
    {
        $data = $request->validate([
            'id'           => 'required|integer',
            'name'         => 'required|string|max:255',
            'designation'  => 'nullable|string|max:255',
            'testimonial'  => 'required|string',
            'status'       => 'required',
            'image'        => 'nullable|image|mimes:jpg,jpeg,png,webp|max:1024',
        ]);

        $testimonial = DB::table('testimonials')->where('id', $data['id'])->first();

        if (!$testimonial) {
            return response()->json(['status' => 0, 'message' => 'Testimonial not found']);
        }

        if ($request->hasFile('image')) {
            $path = public_path('assets/uploads/testimonials/');
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }

            $fileName = uniqid() . '.' . $request->image->extension();
            $request->image->move($path, $fileName);

            if (!empty($testimonial->image) && file_exists(public_path($testimonial->image))) {
                unlink(public_path($testimonial->image));
            }

            $data['image'] = 'assets/uploads/testimonials/' . $fileName;
        }

        DB::table('testimonials')->where('id', $data['id'])->update($data);

        return response()->json(['status' => 1, 'message' => 'Testimonial updated successfully']);
    }

    public function deleteTestimonial($id)
    {
        $testimonial = DB::table('testimonials')->where('id', $id)->first();

        if (!$testimonial) {
            return response()->json(['status' => 0, 'message' => 'Testimonial not found']);
        }

        if (!empty($testimonial->image) && file_exists(public_path($testimonial->image))) {
            unlink(public_path($testimonial->image));
        }

        DB::table('testimonials')->where('id', $id)->delete();

        return redirect('admin/dashboard/testimonials')->with('success', 'Record deleted successfully.');
    }
   
}    

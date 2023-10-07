<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Membership;

class MembershipController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $membership = Membership::all();
        return view('members.list', compact('membership'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('members.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // $validated = $request->validate([
        //     'first_name' => 'required',
        //     'surname' => 'required',
        //     'other_name' => 'nullable',
        //     'email' => 'nullable',
        //     'whatsapp' => 'nullable',
        //     'zone' => 'required',
        //     'district' => 'required',
        //     'educational_qualification' => 'required',
        //     'professional_qualification' => 'required',
        //     'profession' => 'nullable',
        //     'professional_status' => 'nullable',
        //     'college_professional_group' => 'nullable',
        //     'artisan_trade' => 'nullable',
        //     'artisan_certificate' => 'nullable',
        //     'employment_status' => 'nullable'
        // ]);

        $membership = Membership::create([
            'first_name' => $request->input('first_name'),
            'surname' => $request->input('surname'),
            'other_name' => $request->input('other_name'),
            'email' => $request->input('email'),
            'whatsapp' => $request->input('whatsapp'),
            'zone' => $request->input('zone'),
            'district' => $request->input('district'),
            'educational_qualification' => $request->input('educational_qualification'),
            'professional_qualification' => $request->input('professional_qualification'),
            'profession' => $request->input('profession'),
            'professional_status' => $request->input('professional_status'),
            'college_professional_group' => $request->input('college_professional_group'),
            'artisan_trade' => $request->input('artisan_trade'),
            'artisan_certificate' => $request->input('artisan_certificate'),
            'employment_status' => $request->input('employment_status')
            ]);

            session()->flash('success', 'Thanks for filling. Your form submitted successfully!');

            return redirect()->back();

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

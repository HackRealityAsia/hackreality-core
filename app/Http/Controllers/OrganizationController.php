<?php

namespace App\Http\Controllers;

use App\Organization;
use Hashids\Hashids;
use Illuminate\Http\Request;

class OrganizationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $organizations = Organization::all();
        return view('organizations.index', compact('organizations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('organizations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $organization = new Organization();
        $organization->save($request->all());

        // TODO: Send back output result here

        return view('organizations.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $hashids = new Hashids('', 20, env('HASHIDS_SALT'));
        $organization_id = $hashids->decode($id)[0];
        $organization = Organization::find($organization_id);
        return view('organizations.edit', compact('organization'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hashids = new Hashids('', 20, env('HASHIDS_SALT'));
        $organization_id = $hashids->decode($id)[0];
        $organization = Organization::find($organization_id);
        return view('organizations.edit', compact('organization'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $hashids = new Hashids('', 20, env('HASHIDS_SALT'));
        $organization_id = $hashids->decode($id)[0];
        $organization = Organization::find($organization_id);
        $organization->update($request->all());

        // TODO: Send back output result here

        return redirect()->route('organizations.update', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hashids = new Hashids('', 20, env('HASHIDS_SALT'));
        $organization_id = $hashids->decode($id)[0];
        $organization = Organization::destroy($organization_id);

        // TODO: Send back output result here

        return view('organizations.index');
    }
}

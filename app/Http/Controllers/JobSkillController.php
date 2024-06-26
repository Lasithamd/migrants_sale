<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreJobSkillRequest;
use App\Http\Requests\UpdateJobSkillRequest;
use App\Models\JobSkill;

class JobSkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreJobSkillRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreJobSkillRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\JobSkill  $jobSkill
     * @return \Illuminate\Http\Response
     */
    public function show(JobSkill $jobSkill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JobSkill  $jobSkill
     * @return \Illuminate\Http\Response
     */
    public function edit(JobSkill $jobSkill)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateJobSkillRequest  $request
     * @param  \App\Models\JobSkill  $jobSkill
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateJobSkillRequest $request, JobSkill $jobSkill)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JobSkill  $jobSkill
     * @return \Illuminate\Http\Response
     */
    public function destroy(JobSkill $jobSkill)
    {
        //
    }
}

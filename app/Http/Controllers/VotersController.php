<?php namespace App\Http\Controllers;

use App\Candidate;
use App\Voter;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class VotersController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @param  \App\Project $project
	 * @return Response
	 */
	public function index(Candidate $candidate)
	{
		return view('voters.index', compact('candidate'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @param  \App\Project $project
	 * @return Response
	 */
	public function create(Candidate $candidate)
	{
		return view('voters.create', compact('candidate'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \App\Project $project
	 * @return Response
	 */
	public function store(Candidate $candidate)
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Project $project
	 * @param  \App\Task    $task
	 * @return Response
	 */
	public function show(Candidate $candidate, Voter $voter)
	{
		return view('voters.show', compact('candidate', 'voter'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Project $project
	 * @param  \App\Task    $task
	 * @return Response
	 */
	public function edit(Candidate $candidate, Voter $voter)
	{
		return view('voters.edit', compact('candidate', 'voter'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \App\Project $project
	 * @param  \App\Task    $task
	 * @return Response
	 */
	public function update(Candidate $candidate, Voter $voter)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Project $project
	 * @param  \App\Task    $task
	 * @return Response
	 */
	public function destroy(Candidate $candidate, Voter $voter)
	{
		//
	}

}
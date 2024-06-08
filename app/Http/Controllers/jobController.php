<?php

namespace App\Http\Controllers;
use App\Mail\JobPosted;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\job;
use Illuminate\Support\Facades\Mail;
class jobController extends Controller
{
    public function index()
    {
        if(Auth::guest())
        {
            return redirect('/login');
        }
        
        $jobs = job::latest()->paginate(5);
        
        return view('jobs.index' , ['jobs'=>$jobs]);

    }

    public function show(Job $job)
    {

        return view('jobs.show', ['job'=>$job]);


    }

    public function destroy(Job $job)
    {

        $job->delete();

        return redirect('/job');

    }

    public function create()
    {
        return view('jobs.create');

    }
    public function store()
    {
        // dd(request()->all());
        request()->validate([
            'title' => 'required',
            'salary' => 'required',
            
        ]);

        $job = job::create([
            'title' => request('title'),
            'salary' => request('salary'),
            'employer_id' => 1,
            'user_id' => 1,
        ]);

        Mail::to($job->employer->user)->send(
            new JobPosted($job)
        );

        return redirect('/job');

    }

    public function edit(Job $job)
    {

        if(Auth::guest())
        {
           return redirect('/login');
        }

        if($job->employer->user->isNot(Auth::user()))
        {
            abort(403);
        }


        return view('jobs.edit', ['job'=>$job]);
    }

    public function update(Job $job)
    {
        
        request()->validate(['title' => 'required', 'salary']);

        $job->update([
            'title' => request('title'),
           'salary' => request('salary'),
           'employer_id' => 1,
        ]);

    }
}

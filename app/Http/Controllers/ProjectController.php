<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->get();
        return view('projects.index', compact('projects'));
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'required|string',
            'category'    => 'required|string',
            'tools'       => 'required|string',
            'github_url'  => 'nullable|url',
            'demo_url'    => 'nullable|url',
            'image'       => 'nullable|image|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('projects', 'public');
        }

        Project::create([
            'title'       => $request->title,
            'description' => $request->description,
            'category'    => $request->category,
            'tools'       => $request->tools,
            'github_url'  => $request->github_url,
            'demo_url'    => $request->demo_url,
            'image'       => $imagePath,
        ]);

        return redirect('/projects')->with('success', 'Project added successfully!');
    }

    public function show(Project $project)
    {
        return view('projects.show', compact('project'));
    }

    public function destroy(Project $project)
    {
        $project->delete();
        return redirect('/projects')->with('success', 'Project deleted!');
    }
}
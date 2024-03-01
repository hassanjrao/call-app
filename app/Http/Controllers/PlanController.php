<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    public function index()
    {
        $plans = Plan::all();
        return view('dashboard.plans.index', compact('plans'));
    }

    public function create()
    {
        return view('dashboard.plans.create');
    }

    public function store(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'duration_months' => 'required|string|max:255',
        ]);

        Plan::create($validated);

        return redirect()->route('plans.index')->with('success', 'Plan created successfully.');
    }

    public function show(Plan $plan)
    {
        return view('plans.show', compact('plan'));
    }

    public function edit(Plan $plan)
    {
        return view('dashboard.plans.edit', compact('plan'));
    }

    public function update(Request $request, Plan $plan)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'price' => 'required|numeric',
            'duration_months' => 'required|string|max:255',
        ]);

        $plan->update($request->all());

        return redirect()->route('plans.index')->with('success', 'Plan updated successfully.');
    }

    public function destroy(Plan $plan)
    {
        $plan->delete();

        return redirect()->route('plans.index')->with('success', 'Plan deleted successfully.');
    }
}

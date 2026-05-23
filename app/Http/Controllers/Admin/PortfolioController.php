<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::orderBy('created_at', 'desc')->get();
        return view('admin.portfolio.index', compact('portfolios'));
    }

    public function create()
    {
        return view('admin.portfolio.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'description' => 'required|string',
            'demo_url' => 'nullable|url|max:255',
            'technology' => 'nullable|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'is_featured' => 'boolean',
        ]);

        $validated['slug'] = Str::slug($validated['title']);
        $validated['is_featured'] = $request->has('is_featured');
        
        // Handle comma-separated technologies to array
        if ($request->has('technology')) {
            $validated['technology'] = array_map('trim', explode(',', $request->technology));
        }

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('portfolios', 'public');
            $validated['image_url'] = '/storage/' . $path;
        }

        Portfolio::create($validated);

        return redirect()->route('admin.portfolio.index')->with('success', 'Portofolio berhasil ditambahkan!');
    }

    public function edit(Portfolio $portfolio)
    {
        return view('admin.portfolio.edit', compact('portfolio'));
    }

    public function update(Request $request, Portfolio $portfolio)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'description' => 'required|string',
            'demo_url' => 'nullable|url|max:255',
            'technology' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'is_featured' => 'boolean',
        ]);

        $validated['slug'] = Str::slug($validated['title']);
        $validated['is_featured'] = $request->has('is_featured');

        // Handle comma-separated technologies to array
        if ($request->has('technology')) {
            $validated['technology'] = array_map('trim', explode(',', $request->technology));
        } else {
            $validated['technology'] = [];
        }

        if ($request->hasFile('image')) {
            // Delete old image
            if ($portfolio->image_url && Str::startsWith($portfolio->image_url, '/storage/')) {
                $oldPath = str_replace('/storage/', '', $portfolio->image_url);
                Storage::disk('public')->delete($oldPath);
            }

            $path = $request->file('image')->store('portfolios', 'public');
            $validated['image_url'] = '/storage/' . $path;
        }

        $portfolio->update($validated);

        return redirect()->route('admin.portfolio.index')->with('success', 'Portofolio berhasil diperbarui!');
    }

    public function destroy(Portfolio $portfolio)
    {
        // Delete image
        if ($portfolio->image_url && Str::startsWith($portfolio->image_url, '/storage/')) {
            $oldPath = str_replace('/storage/', '', $portfolio->image_url);
            Storage::disk('public')->delete($oldPath);
        }

        $portfolio->delete();

        return redirect()->route('admin.portfolio.index')->with('success', 'Portofolio berhasil dihapus!');
    }
}

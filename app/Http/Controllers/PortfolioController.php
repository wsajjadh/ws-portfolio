<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Inertia\Inertia;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::where('show', true)
            ->with('category', 'tags', 'images')
            ->get();

        return Inertia::render('Portfolios', [
            'portfolios' => $portfolios,
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Portfolio;
use App\PortfolioPhoto;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function uploadForm()
    {
        $portfolios = Portfolio::all()->pluck('name', 'id');
        return view('admin.portfolio.upload_form', compact('portfolios'));
    }

    public function uploadSubmit(Request $request)
    {
        $images = PortfolioPhoto::where('portfolio_id', $request->portfolio_id)->get();
        foreach($images as $image) {
            $image->delete();
        }
        $images = $request->file('images');
        foreach($images as $image) {
            $name = time() . $image->getClientOriginalName();
            $image->move('images', $name);
            PortfolioPhoto::create(['filename' => $name, 'portfolio_id' => $request->portfolio_id]);

        }
        return redirect()->back()->with('message', 'Good Job! Motherfucker.....');
    }
}

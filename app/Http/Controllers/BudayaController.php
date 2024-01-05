<?php
namespace App\Http\Controllers;

use App\Models\Budaya;
use Illuminate\Http\Request;

class BudayaController extends Controller
{
    public function index()
    {
        $budayas = Budaya::all();
        return view('budaya.index', compact('budayas'));
    }

    public function show($id)
    {
        $budaya = Budaya::find($id);
        return view('budaya.show', compact('budaya'));
    }

    public function home()
    {
        $latestBudayas = Budaya::latest()->take(3)->get();
        $firstBudaya = Budaya::inRandomOrder()->first();


        return view('index', compact('latestBudayas') , compact('firstBudaya'));
    }



}

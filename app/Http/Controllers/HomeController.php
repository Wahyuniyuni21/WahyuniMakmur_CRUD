<?php
 
namespace App\Http\Controllers;
 
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
  
    public function home(){
    	return view('home.home');
    }
    public function about(){
    	return view('home.about');
    }
    public function contact(){
    	return view('home.contact');
    }
    public function index()
    {
        
        $data = DB::table('mahasiswas')->get();
        return view('mahasiswa.index')->with('data', $data);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
        public function login(){
            return redirect('/login');
        }

        public function auth(Request $request){
            $validasi = $request->validate(rules:[
                'email' => ['required'],
                'password' => ['required'],
            ]);
            if (Auth::attempt($validasi)){
                return redirect('home')->with('pesan', 'login anda berhasil');
            }
            return redirect()->back()->with('pesan','Login anda gagal');
    
        }


        public function tampil(){
            return view('home');
        }

        public function deket(){
            return view('cafeterdekat');
        }

        public function view(){
            return view('reviewcafe');
        }

        // public function detail(){
        //     return view('detailcafe');
        // }
        public function detail()
        {
            // Data detail cafe
            $cafeDetail = [
                'name' => 'Notre Socielle',
                'location' => 'Jl. Cimulu No.32, Kab. Tasikmalaya',
                'description' => 'Cafe dengan suasana yang tenang dan nyaman, cocok untuk bekerja atau bersantai bersama teman.',
            ];
    
            // Ambil data review dari database
            $reviews = Review::all();
    
            // Kirim data cafeDetail dan reviews ke view
            return view('detailcafe', compact('cafeDetail', 'reviews'));
        }

        public function cari(){
            return view('search');
        }
         
        public function about(){
            return view('tentang');
        }
        public function tampilan(){
            return view('homeadmin');
        }
        public function detaill(){
            return view('detail2');
        }
        public function detailll(){
            return view('detail3');
        }
        public function loginn(){
            return view('login');
        }

    }  
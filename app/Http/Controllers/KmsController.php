<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use Illuminate\Http\Request;

class KmsController extends Controller
{
    public function index()
    {
        $page_title = 'Beranda';
		$action = __FUNCTION__;
        $bottom = true;
        $footer = true;
        $header = 'header';

        $blog = Blog::limit(2)->latest()->get();

        return view('index', compact('page_title', 'action', 'bottom', 'footer', 'header'), ['blog'=>$blog]);
    }

    // public function account_edit()
    // {
    //     $page_title = 'Edit Akun';
    //     $action = __FUNCTION__;
	// 	$bottom = false;
    //     $footer = false;
    //     $header = 'header-back';

    //     return view('account.edit', compact('page_title', 'action', 'bottom', 'footer', 'header'));
    // }
}

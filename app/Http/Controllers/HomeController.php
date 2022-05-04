<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }
    public function faq()
    {
        return view('faq');
    }

    public function amazonAccount()
    {
        return view('amazon-account');
    }

    public function productHunting()
    {
        return view('product-hunting');
    }

    public function categoryApproval()
    {
        return view('category-approval');
    }

    public function graphicDesigning()
    {
        return view('graphic-designing');
    }

    public function supplyChain()
    {
        return view('supply-chain');
    }

    public function amazonPpc()
    {
        return view('amazon-ppc');
    }

    public function walmartPpc()
    {
        return view('walmart-ppc');
    }
    public function ebaySeo()
    {
        return view('ebay-seo');
    }

    public function shopifyAccount()
    {
        return view('shopify-account');
    }
    public function walmartAccount()
    {
        return view('walmart-account');
    }
    public function ebayAccount()
    {
        return view('e\bay-account');
    }

    public function etsyAccount()
    {
        return view('etsy-account');
    }
    public function testimonials()
    {
        return view('testimonials');
    }
    public function appointment()
    {
        return view('appointment');
    }
}

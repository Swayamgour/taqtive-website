<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;
use Illuminate\Support\Facades\Http;


class WebsiteController extends Controller
{
    public function index()
    {
        $response = Http::get('http://localhost:5000/api/slider');
        $sliders = $response->json();

        $categoryResponse = Http::get('http://localhost:5000/api/category');
        $category = $categoryResponse->json();

        // ✅ Static services data
        $services = [
            [
                "_id" => "69f446cb0ef7523f77412c5b",
                "title" => "installection",
                "image" => "uploads/1777616587913-installation.jpg",
                "path" => "ManufacringFacility",
            ],
            [
                "_id" => "69f316b2210ef6c4125eeca3",
                "title" => "Industry Serving",
                "image" => "uploads/1777538737996-industry-serving.jpg",
                "path" => "industry",

            ],
            [
                "_id" => "69f3168d210ef6c4125eeca2",
                "title" => "Manufacturing Facility",
                "image" => "uploads/1777538701936-manufacturing-facility.jpg",
                "path" => "installation",

            ],
            [
                "_id" => "69f446cb0ef7523f77412c5b",
                "title" => "installection",
                "image" => "uploads/1777616587913-installation.jpg",
                "path" => "ManufacringFacility",
            ],
            [
                "_id" => "69f316b2210ef6c4125eeca3",
                "title" => "Industry Serving",
                "image" => "uploads/1777538737996-industry-serving.jpg",
                "path" => "industry",

            ],
            [
                "_id" => "69f3168d210ef6c4125eeca2",
                "title" => "Manufacturing Facility",
                "image" => "uploads/1777538701936-manufacturing-facility.jpg",
                "path" => "installation",

            ],
        ];

        $ProductResponse = Http::get('http://localhost:5000/api/product');
        $products = $ProductResponse->json();

        $testimonialResponse = Http::get('http://localhost:5000/api/testimonial');
        $testimonials = $testimonialResponse->json();

        return view('website.index', compact('sliders', 'services', 'products', 'testimonials', 'category'));
    }

    public function about()
    {
        $sliders = Http::get('http://localhost:5000/api/slider')->json() ?? [];

        $categoryResponse = Http::get('http://localhost:5000/api/category');
        $category = $categoryResponse->json();

        $testimonialResponse = Http::get('http://localhost:5000/api/testimonial');
        $testimonials = $testimonialResponse->json();


        return view('website.about', compact('sliders', 'category', 'testimonials'));
    }
    // public function banner()

    // {
    //     $response = Http::get('http://localhost:5000/api/slider');
    //     $sliders = $response->json();

    //     return view('website.banner',compact('sliders'));
    // }


    // use Illuminate\Support\Facades\Http;

    public function ManufacringFacility()
    {
        // slider API
        $sliders = Http::get('http://localhost:5000/api/slider')->json() ?? [];
        $categoryResponse = Http::get('http://localhost:5000/api/category');
        $category = $categoryResponse->json();

        // products / projects API
        $facilityResponse = Http::get('http://localhost:5000/api/facility');

        $facilitys = $facilityResponse->json() ?? [];

        return view('website.ManufacringFacility', compact('sliders', 'facilitys', 'category'));
    }

    public function industry()
    {
        // slider API
        $sliders = Http::get('http://localhost:5000/api/slider')->json() ?? [];

        // products / projects API
        $productsResponse = Http::get('http://localhost:5000/api/industry');

        $products = $productsResponse->json() ?? [];

        $categoryResponse = Http::get('http://localhost:5000/api/category');
        $category = $categoryResponse->json();

        return view('website.industry', compact('sliders', 'products', 'category'));
    }

    public function product($id)
    {
        try {
            $sliders = Http::get('http://localhost:5000/api/slider')->json() ?? [];

            $products = Http::get("http://localhost:5000/api/product/category/$id")->json() ?? [];

            $category = Http::get('http://localhost:5000/api/category')->json() ?? [];
        } catch (\Exception $e) {
            $sliders = [];
            $products = [];
            $category = [];
        }

        return view('website.product', compact('sliders', 'products', 'category'));
    }

    public function installation()
    {
        // slider API
        $sliders = Http::get('http://localhost:5000/api/slider')->json() ?? [];

        // products / projects API
        $installationResponse = Http::get('http://localhost:5000/api/installation');

        $installation = $installationResponse->json() ?? [];

        $categoryResponse = Http::get('http://localhost:5000/api/category');
        $category = $categoryResponse->json();

        return view('website.installation', compact('sliders', 'installation', 'category'));
    }

    public function projectsDetails($id)
    {
        // slider API
        $sliders = Http::get('http://localhost:5000/api/slider')->json() ?? [];

        // products / projects API
        // $projectsDetailsResponse = Http::get('http://localhost:5000/api/project/$id');
        $projectsDetailsResponse = Http::get("http://localhost:5000/api/product/$id");



        $product = $projectsDetailsResponse->json() ?? [];

        $categoryResponse = Http::get('http://localhost:5000/api/category');
        $category = $categoryResponse->json();

        // dd($product);

        return view('website.projectsDetails', compact('sliders', 'product', 'category'));
    }

    public function contact()
    {
        // slider API
        $sliders = Http::get('http://localhost:5000/api/slider')->json() ?? [];

        // products / projects API
        // $contactResponse = Http::g1et('http://localhost:5000/api/project/$id');
        // $contactResponse = Http::get("http://localhost:5000/api/product/$id");

        $categoryResponse = Http::get('http://localhost:5000/api/category');
        $category = $categoryResponse->json();

        // $contact = $contactResponse->json() ?? [];

        // dd($product);

        return view('website.contact', compact('sliders', 'category'));
    }
}

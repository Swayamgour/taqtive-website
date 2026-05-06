<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;
use Illuminate\Support\Facades\Http;


class WebsiteController extends Controller
{
    private $api = 'https://taqtiveadmin.amaxjobs.com/api/';
    private $imageUrl = 'https://taqtiveadmin.amaxjobs.com/';

    public function index()
    {
        $response = Http::get($this->api . 'slider');
        $sliders = $response->json();

        $categoryResponse = Http::get($this->api . 'category');
        $category = $categoryResponse->json();

        $imageUrl = $this->imageUrl;

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

        $ProductResponse = Http::get($this->api . 'product');
        $products = $ProductResponse->json();

        $testimonialResponse = Http::get($this->api . 'testimonial');
        $testimonials = $testimonialResponse->json();

        return view('website.index', compact('sliders', 'services', 'products', 'testimonials', 'category', 'imageUrl'));
    }

    public function about()
    {
        $sliders = Http::get($this->api . 'slider')->json() ?? [];

        $categoryResponse = Http::get($this->api . 'category');
        $category = $categoryResponse->json();

        $testimonialResponse = Http::get($this->api . 'testimonial');
        $testimonials = $testimonialResponse->json();

         $imageUrl = $this->imageUrl;


        return view('website.about', compact('sliders', 'category', 'testimonials', 'imageUrl'));
    }


    public function ManufacringFacility()
    {
        // slider API
        $sliders = Http::get($this->api . 'slider')->json() ?? [];
        $categoryResponse = Http::get($this->api . 'category');
        $category = $categoryResponse->json();

        // products / projects API
        $facilityResponse = Http::get($this->api . 'facility');

        $facilitys = $facilityResponse->json() ?? [];
         $imageUrl = $this->imageUrl;

        return view('website.ManufacringFacility', compact('sliders', 'facilitys', 'category', 'imageUrl'));
    }

    public function industry()
    {
        // slider API
        $sliders = Http::get($this->api . 'slider')->json() ?? [];

        // products / projects API
        $productsResponse = Http::get($this->api . 'industry');

        $products = $productsResponse->json() ?? [];

        $categoryResponse = Http::get($this->api . 'category');
        $category = $categoryResponse->json();

         $imageUrl = $this->imageUrl;

        return view('website.industry', compact('sliders', 'products', 'category', 'imageUrl'));
    }

    public function product($id)
    {
        try {
            $sliders = Http::get($this->api . 'slider')->json() ?? [];

            $products = Http::get($this->api . "product/category/$id")->json() ?? [];

            $category = Http::get($this->api . 'category')->json() ?? [];
        } catch (\Exception $e) {
            $sliders = [];
            $products = [];
            $category = [];
        }

         $imageUrl = $this->imageUrl;

        return view('website.Product', compact('sliders', 'products', 'category', 'imageUrl'));
    }

    public function installation()
    {
        // slider API
        $sliders = Http::get($this->api . 'slider')->json() ?? [];

        // products / projects API
        $installationResponse = Http::get($this->api . 'installation');

        $installation = $installationResponse->json() ?? [];

        $categoryResponse = Http::get($this->api . 'category');
        $category = $categoryResponse->json();
         $imageUrl = $this->imageUrl;

        return view('website.installation', compact('sliders', 'installation', 'category', 'imageUrl'));
    }

    public function projectsDetails($id)
    {
        // slider API
        $sliders = Http::get($this->api . 'slider')->json() ?? [];

        // products / projects API
        // $projectsDetailsResponse = Http::get($this->api . 'project/$id');
        $projectsDetailsResponse = Http::get($this->api . "product/$id");



        $product = $projectsDetailsResponse->json() ?? [];

        $categoryResponse = Http::get($this->api . 'category');
        $category = $categoryResponse->json();

         $imageUrl = $this->imageUrl;

        // dd($product);

        return view('website.projectsDetails', compact('sliders', 'product', 'category', 'imageUrl'));
    }

    public function contact()
    {
        // slider API
        $sliders = Http::get($this->api . 'slider')->json() ?? [];

        // products / projects API
        // $contactResponse = Http::g1et($this->api . 'project/$id');
        // $contactResponse = Http::get($this->api . "product/$id");

        $categoryResponse = Http::get($this->api . 'category', 'imageUrl');
        $category = $categoryResponse->json();

        // $contact = $contactResponse->json() ?? [];

        // dd($product);
         $imageUrl = $this->imageUrl;

        return view('website.contact', compact('sliders', 'category', 'imageUrl'));
    }
}

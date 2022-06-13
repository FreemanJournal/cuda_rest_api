<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    function onSelectAll(){
        $result = Testimonial::all();
        return $result;
    }
    function onSelectVideo(){
       return $result = Testimonial::select('video_links','video_titles')->get();
        
    }
    function onSelectReview(){
         return $result = Testimonial::select('reviews','review_image_links','reviewers','reviewer_designations')->get();
        
    }
}

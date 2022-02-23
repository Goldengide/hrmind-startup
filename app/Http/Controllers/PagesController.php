<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function jobSeekers() {
        return view('pages.job-seekers');
    }


    public function resources() {
        return view('pages.resources');
    }


    public function about() {
        return view('pages.about');
    }


    public function news() {
        return view('pages.news');
    }


    public function contact() {
        return view('pages.contact');
    }


    public function nurses() {
        return view('pages.nurses');
    }


    public function supportWorkers() {
        return view('pages.support-workers');
    }


    public function healthcareAssistants() {
        return view('pages.healthcare-assistants');
    }


    public function careManagers() {
        return view('pages.care-managers');
    }


    public function timesheets() {
        return view('pages.timesheets');
    }


    public function recruitmentServices() {
        return view('pages.recruitment-services');
    }


    public function policies() {
        return view('pages.policies');
    }


    public function temporaryStaff() {
        return view('pages.temporary-staff');
    }

    public function employers() {
        return view('pages.employers');
    }

}

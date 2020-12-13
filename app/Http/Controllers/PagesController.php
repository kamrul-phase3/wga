<?php
namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    public function index()
    {
        $page_title = 'Dashboard';
        $page_description = 'Some description for the page';
        return view('pages.dashboard', compact('page_title', 'page_description'));
    }
    public function companydashboard()
    {
        $page_title = 'Dashboard';
        $page_description = 'company dashboard';
        return view('pages.company_dashboard', compact('page_title', 'page_description'));
    }
    public function companydashboard2()
    {
        $page_title = 'Dashboard';
        $page_description = 'company dashboard2';
        return view('pages.company_dashboard2', compact('page_title', 'page_description'));
    }
    public function dashboardsfia()
    {
        $page_title = 'Dashboard';
        $page_description = 'dashboard sfia';
        return view('pages.dashboard_sfia', compact('page_title', 'page_description'));
    }
    public function login() {
        $page_title = 'Dashboard';
        $page_description = 'login';
        return redirect('nova');
        return view('pages.login', compact('page_title', 'page_description'));
    }
     public function biaanalysis()
    {
        $page_title = 'Dashboard';
        $page_description = 'bia analysis';
        return view('pages.bia_analysis', compact('page_title', 'page_description'));
    }
    public function biaplan()
    {
        $page_title = 'Dashboard';
        $page_description = 'bia plan';
        return view('pages.bia_plan', compact('page_title', 'page_description'));
    }
     public function biaserviceprocess()
    {
        $page_title = 'Dashboard';
        $page_description = 'bia service process';
        return view('pages.bia_service_process', compact('page_title', 'page_description'));
    }
    /**
     * Demo methods below
     */
    // Datatables
    public function datatables()
    {
        $page_title = 'Datatables';
        $page_description = 'This is datatables test page';
        return view('pages.datatables', compact('page_title', 'page_description'));
    }
    // KTDatatables
    public function ktDatatables()
    {
        $page_title = 'KTDatatables';
        $page_description = 'This is KTdatatables test page';
        return view('pages.ktdatatables', compact('page_title', 'page_description'));
    }
    // Select2
    public function select2()
    {
        $page_title = 'Select 2';
        $page_description = 'This is Select2 test page';
        return view('pages.select2', compact('page_title', 'page_description'));
    }
    // custom-icons
    public function customIcons()
    {
        $page_title = 'customIcons';
        $page_description = 'This is customIcons test page';
        return view('pages.icons.custom-icons', compact('page_title', 'page_description'));
    }
    // flaticon
    public function flaticon()
    {
        $page_title = 'flaticon';
        $page_description = 'This is flaticon test page';
        return view('pages.icons.flaticon', compact('page_title', 'page_description'));
    }
    // fontawesome
    public function fontawesome()
    {
        $page_title = 'fontawesome';
        $page_description = 'This is fontawesome test page';
        return view('pages.icons.fontawesome', compact('page_title', 'page_description'));
    }
    // lineawesome
    public function lineawesome()
    {
        $page_title = 'lineawesome';
        $page_description = 'This is lineawesome test page';
        return view('pages.icons.lineawesome', compact('page_title', 'page_description'));
    }
    // socicons
    public function socicons()
    {
        $page_title = 'socicons';
        $page_description = 'This is socicons test page';
        return view('pages.icons.socicons', compact('page_title', 'page_description'));
    }
    // svg
    public function svg()
    {
        $page_title = 'svg';
        $page_description = 'This is svg test page';
        return view('pages.icons.svg', compact('page_title', 'page_description'));
    }
    // Quicksearch Result
    public function quickSearch()
    {
        return view('layout.partials.extras._quick_search_result');
    }
}

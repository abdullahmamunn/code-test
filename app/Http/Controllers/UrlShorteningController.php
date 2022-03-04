<?php

namespace App\Http\Controllers;

use App\Models\Url;
use App\Models\Visitor;
use Carbon\Carbon;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Jenssegers\Agent\Agent;
use Stevebauman\Location\Facades\Location;
use PDF;


class UrlShorteningController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $urls = Url::latest()->get();
        return view('url.add-url',compact('urls'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $urls = Url::latest()->get();
        return view('url.add-url',compact('urls'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    //  return $request->all();
        $request->validate([
            'url' => 'required'
         ]);

        // set attempt and block time in session
        session([
            'total_attampt' => $request->attmpt,
            'block_time' => $request->block_time,
            'expire_time' => $request->expire_time,
        ]);

        $url = new Url();
        $url->user_id = Auth::user()->id;
        $url->url = $request->url;
        $url->short_url = Str::random(6);
        $url->save();
        return redirect()->back();

    }


    public function redirectUrl($url)
    {
      $data = Url::where('short_url', $url)->first();

      if(session()->has('expire_time')){
           $expire_time = session('expire_time');
           if (Carbon::now()->greaterThan($data->created_at->addMinute($expire_time))) {
            return "Sorry, You can't acess this url, It has already expired";
          }
      }

        // $ip = request()->ip();
        $ip = '117.103.84.63';
        $user_info = Location::get($ip);
        $agent = new Agent();
        $data->visitors()->create([
            'os'      => $agent->platform(),
            'ip'      => $ip,
            'device'  => $agent->device(),
            'browser' => $agent->browser(),
            'location' => $user_info->countryName,
            'lat' => $user_info->latitude,
            'lon' => $user_info->longitude
        ]);
        // dd($data);
     return redirect()->away($data->url);
    }
    public function userTrackingInfo()
    {
        $user_info = Visitor::with('urlInfo')->latest()->get();
        return view('url.all-url',compact('user_info'));
    }
    public function dailyReports()
    {
        $url_info = Url::withCount(['visitors'])
                   ->whereDate('created_at', Carbon::today())
                   ->latest()
                   ->paginate(5);
        return view('reports.daily-report',compact('url_info'));
    }
    public function weeklyReports()
    {

        $url_info = Url::withCount(['visitors'])
                ->whereBetween('created_at',[Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])
                ->latest()
                ->paginate(7);
        return view('reports.weekly-report',compact('url_info'));

    }
    public function monthlyReports()
    {

        $dt = Carbon::now();
        $url_info = Url::withCount(['visitors'])
                 ->whereMonth('created_at',$dt->month)
                 ->latest()
                 ->paginate(12);
        return view('reports.monthly-report',compact('url_info'));

    }

    public function showDetails(Url $id)
    {
        $visitors = $id->visitors()->get();

        return view('reports.details',compact('visitors'));
    }
    public function generatePDF($key)
    {
        // return $key;
        // die();

        if($key == 'daily'){
            $url_info = Url::withCount(['visitors'])
                ->whereDate('created_at', Carbon::today())
                ->latest()
                ->paginate(5)
                ->toArray();
        }else if($key == 'weekly'){
            $url_info  = Url::withCount(['visitors'])
            ->whereBetween('created_at',[Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])
            ->latest()
            ->paginate(7)
            ->toArray();
        }
        else{
            $dt = Carbon::now();
            $url_info  = Url::withCount(['visitors'])
                     ->whereMonth('created_at',$dt->month)
                     ->latest()
                     ->paginate(12)
                     ->toArray();
        }

        $pdf = PDF::loadview('reports.pdf',$url_info);
        return $pdf->download('daily.pdf');
        // return view('reports.daily-pdf',$url_info);

    }
}

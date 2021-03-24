<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\admin\Book;
use App\Models\Attachment;
use App\Models\Post;
use App\Models\admin\Chart;
use App\Models\admin\ChartFormat;
use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       //
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $chart = Chart::all();

        $max_x = DB::table('charts')->max('x');
        $max_y = DB::table('charts')->max('y');
        $name =  DB::table('charts')->max('name');

        $lables = Chart::select('created_at')->get();
//        dd($lables);
        $datasss['xaxis'] = '[';
        $datasss['yaxis'] = '[';
        $labels = '[';
        foreach ($chart as $index=>$item){
           $aa = "'".$item->name."'";   //created_at->format('M d H:m:s')
            $datasss['xaxis'] .="$item->x,";
            $datasss['yaxis'] .="$item->y,";
            $labels .="$aa,";
        }
        $datasss['yaxis'] = rtrim($datasss['yaxis'] , ",");
        $datasss['xaxis'] = rtrim($datasss['xaxis'] , ",");
        $labels = rtrim($labels , ",");
        $datasss['xaxis'] .= ']';
        $datasss['yaxis'] .= ']';
        $labels .= ']';


        $chartFormate = ChartFormat::find(1);
//        dd($chartFormate->chart);


        // dd($rows[1]);
        $datasets = "[";
        $lab = array();

        foreach($datasss as $index=>$row){
            $color ='#' . substr(str_shuffle('ABCDEF0123456789'), 0, 6);
            $datasets = $datasets."{
                        type                : 'line',
                        data                :$row ,
                        backgroundColor     : 'transparent',
                        borderColor         : '$color',
                        pointBorderColor    : '$color',
                        pointBackgroundColor: '$color',
                        fill                : true
                    },";

            if($index == 'xaxis' ){
                $lab[$index][0] = 'Threats';
                $lab[$index][1] = $color;
            }if($index == 'yaxis'){
                $lab[$index][0] = 'Rate';
                $lab[$index][1] = $color;
            }

        }
//        dd($lab);
        $datasets = $datasets.']';
//        return $datasets;
        $datass = "data   : {
                    labels  : $labels,
                    datasets:  $datasets
                    }";

        // dd($datass);
        $max = 0;
        if($max_x > $max_y){
            $max = $max_x;
        }else{
            $max = $max_y;
        }

        $ChatBlade = str_replace('datassss',"$datass","$chartFormate->chart");
        $ChatBlade = str_replace('maxValue',"$max","$ChatBlade");
//dd  ($ChatBlade);
//        dd($chartFormate->chart);


    /// ////////////////////////////////


//        $data = "{
//        labels: $labels,
//			datasets: [{
//            backgroundColor: utils.transparentize(presets.red),
//				borderColor: presets.red,
//				data: $xaxis,
//				hidden: true,
//				label: 'D0'
//			}, {
//            backgroundColor: utils.transparentize(presets.orange),
//				borderColor: presets.orange,
//				data:  $yaxis,
//				label: 'D1',
//				fill: '-1'
//			}]
//		}";
//return $data;
        $items = Post::all()->take(5);
        $books = Book::all()->take(5);

        return view('site.index' ,compact('items','books' ,'ChatBlade','lab'));

    }
    public function about()
    {
        return view('site.about.index');
    }
    public function create() // create attachment page
    {
      return view('site.attachment.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'type' => 'required',
            'description' => 'required',
            'bookFile'   => 'required|mimes:doc,pdf,docx,zip'

        ]);

        if(  $request->bookFile != Null) {

            $attch = $request->file('bookFile');
            $attch_new_name = time() . "-" .  $attch->getClientOriginalName();
            $attch->storeAs('uploads/attachment',  $attch_new_name);
            $attch->bookFile =  $attch_new_name;
        }
       Attachment::create($request->except('_token'));
        return redirect()->route('attachment.create')->with('success','the attachment uploaded successfully');
    }
    public function createContact() // create the contact form
    {
        return view('site.contact.create');
    }

}

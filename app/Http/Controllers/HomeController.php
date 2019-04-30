<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    public function dashboard()
    {
        $users = DB::table('users')->where('id',Session::get('userid'))->get();

        return view('portal/dashboard')->with('users',$users);
    }

    public function get_page_count($value='')
    {
      $test_count = DB::table('test_count')->where('id',1)->get();
      return json_encode($test_count);
    }

    public function save_page_count(Request $req){
      $data  = array('count' => 1 );

      DB::table('test_count')->where('id',1)->update($data);

      $test_count = DB::table('test_count')->where('id',1)->get();
      return json_encode($test_count);
    }

    public function settings()
    {
        $users = DB::table('users')->where('id',Session::get('userid'))->get();
        
        return view('portal/settings')->with('users',$users);
    }

    public function news_list()
    {
        $users = DB::table('users')->where('id',Session::get('userid'))->get();

        $category = DB::table('category')->where('status',1)->get();

        $news_tag = DB::table('news_tag')->where('status',1)->get();

        $live_news = DB::table('news as N')
                  ->select('N.news_id','N.news_title','N.news_thumbile')
                  ->leftjoin('users as U','U.id','=','N.created_by')
                  ->leftjoin('category as C','C.id','=','N.news_category')
                  ->where('news_status',2)->get();

        return view('portal/news_list')
                ->with('users',$users)
                ->with('category',$category)
                ->with('news_tag',$news_tag)
                ->with('live_news',$live_news);
    }

    public function advertisement()
    {
        $users = DB::table('users')->where('id',Session::get('userid'))->get();
        
        return view('portal/advertisement')->with('users',$users);
    }


    public function basic_settings(Request $req)
    {
        $check_data = DB::table('basic_settings')->count();


        $data = array(
           'owner_name' => $req->owner, 
           'site_name' => $req->site_name, 
           'site_email' => $req->company_email, 
           'logo' => $req->logo, 
           'cell' => $req->cell, 
           'aboutus' => $req->aboutus, 
           'facebook' => $req->facebook, 
           'twitter' => $req->twitter, 
           'insta' => $req->instragram
        );

        if($check_data < 1)
        {        
            DB::table('basic_settings')->insert($data);

            echo json_encode('Inserted Successfully');
        }
        else
        {
            DB::table('basic_settings')->where('settings_id',1)->update($data);
           echo json_encode('Updated Successfully');
        }

        

    }


    public function uploadfile(Request $req)
    {
        $output_dir = "uploads/";
        if(isset($_FILES["myfile"]))
        {
            $ret = array();
            
            $error =$_FILES["myfile"]["error"];
            //You need to handle  both cases
            //If Any browser does not support serializing of multiple files using FormData() 
            if(!is_array($_FILES["myfile"]["name"])) //single file
            {
                $fileName = $_FILES["myfile"]["name"];
                move_uploaded_file($_FILES["myfile"]["tmp_name"],$output_dir.$fileName);
                $ret[]= $fileName;
            }
            else  //Multiple files, file[]
            {
              $fileCount = count($_FILES["myfile"]["name"]);
              for($i=0; $i < $fileCount; $i++)
              {
                $fileName = $_FILES["myfile"]["name"][$i];
                move_uploaded_file($_FILES["myfile"]["tmp_name"][$i],$output_dir.$fileName);
                $ret[]= $fileName;
              }
            
            }
            echo json_encode($ret);
         }
    }


    public function get_basic_settings()
    {
         $basic_settings = DB::table('basic_settings')->get()->toArray();

         echo json_encode($basic_settings);
    }



    public function add_news_list(Request $req)
    {
            $news_title = $req->news_title;
            $subtitle = $req->subtitle;
            $news_url = $req->news_url;
            $ccontent = $req->ccontent;
            $news_img = $req->news_img;
            $news_cat = $req->news_cat;
            $tags1 = $req->tags1;
            $tags2 = $req->tags2;
            $tags3 = $req->tags3;



            $data = array(
                'news_title' => $news_title,
                'news_subtitle' => $subtitle,
                'news_url' => $news_url,
                'news_description' => $ccontent,
                'news_thumbile' => $news_img, 
                'news_category' => $news_cat,
                'news_tag1' => $tags1,
                'news_tag2' => $tags2,
                'news_tag3' => $tags3,
                'news_tag3' => $tags3,
                'created_by' => Session::get('userid')
            );
        DB::table('news')->insert($data);

        echo json_encode('Inserted Successfully');
    }


    public function publish_news(Request $req)
    {
      $data = array('news_status' => $req->status );

      DB::table('news')->where('news_id',$req->news_id)->update($data);

      if($req->status == 2)
      echo json_encode('Published Successfully');
      else
      echo json_encode('Removed Successfully');
    }

    public function get_live_news(Request $req)
    {
        $live_news = DB::table('news as N')
        ->select('N.news_id','N.news_title','N.news_thumbile')
        ->leftjoin('users as U','U.id','=','N.created_by')
        ->leftjoin('category as C','C.id','=','N.news_category')
        ->where('news_status',2)->get()->toArray();

        $news = '';
        if(!empty($live_news[0]))
        {
          foreach ($live_news as $key => $value) {
            $news .= '<div class="col-md-55" id="'.$value->news_id.'">
            <div class="thumbnail">
              <div class="image view view-first">
                <img style="width: 100%; display: block;" src="uploads/'.$value->news_thumbile.'" alt="image" />
                <div class="mask">
                  <div class="tools tools-bottom">
                    <a href="#"><i class="fa fa-link"></i></a>
                    <a href="#" onclick="published_news('.$value->news_id.',0)"><i class="fa fa-times"></i></a>
                  </div>
                </div>
              </div>
              <div class="caption">
                <p>'.$value->news_title.'</p>
              </div>
            </div>
          </div>';
          }
        }
        else
        {
          $news .='<div class="x_content bs-example-popovers">
          <div class="alert alert-success alert-dismissible fade in" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
            </button>
            <strong>No Active News</strong>
          </div>
        </div>';
        }
        return $news;
    }


    public function get_unpublished_news(Request $req)
    {
        $news_unpublished = DB::table('news as N')
                  ->select('N.news_id','N.news_title','N.news_thumbile','U.name')
                  ->leftjoin('users as U','U.id','=','N.created_by')
                  ->leftjoin('category as C','C.id','=','N.news_category')
                  ->where('news_status',1)->get();

        $news = '';

        if(!empty($news_unpublished[0]))
        {
          foreach ($news_unpublished as $key => $value) {
            $news .= '<div class="col-md-55" id="'.$value->news_id.'">
            <div class="thumbnail">
              <div class="image view view-first" title="Author: '.ucfirst($value->name).'">
                <img style="width: 100%; display: block;" src="uploads/'.$value->news_thumbile.'" alt="image" />
                <div class="mask">
                  <div class="tools tools-bottom">
                    <a href="#"><i class="fa fa-link"></i></a>
                    <a href="#" onclick="published_news('.$value->news_id.',2)" ><i class="fa fa-check"></i></a>
                    <a href="#" onclick="published_news('.$value->news_id.',0)"><i class="fa fa-times"></i></a>
                  </div>
                </div>
              </div>
              <div class="caption">
                <p>'.$value->news_title.'</p>
              </div>
            </div>
          </div>';
          }
        }
        else
        {
          $news .='<div class="x_content bs-example-popovers">
          <div class="alert alert-success alert-dismissible fade in" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
            </button>
            <strong>All News are Published</strong>
          </div>
        </div>';
        }
        return $news;
    }

    public function get_removed_news(Request $req)
    {
        $news_unpublished = DB::table('news as N')
                  ->select('N.news_id','N.news_title','N.news_thumbile','U.name')
                  ->leftjoin('users as U','U.id','=','N.created_by')
                  ->leftjoin('category as C','C.id','=','N.news_category')
                  ->where('news_status',0)->get();

        $news = '';

        if(!empty($news_unpublished[0]))
        {
          foreach ($news_unpublished as $key => $value) {
            $news .= '<div class="col-md-55" id="'.$value->news_id.'">
            <div class="thumbnail">
              <div class="image view view-first" title="Author: '.ucfirst($value->name).'">
                <img style="width: 100%; display: block;" src="uploads/'.$value->news_thumbile.'" alt="image" />
                <div class="mask">
                  <div class="tools tools-bottom">
                    <a href="#"><i class="fa fa-link"></i></a>
                    <a href="#" onclick="published_news('.$value->news_id.',2)" ><i class="fa fa-check"></i></a>
                  </div>
                </div>
              </div>
              <div class="caption">
                <p>'.$value->news_title.'</p>
              </div>
            </div>
          </div>';
          }
        }
        else
        {
          $news .='<div class="x_content bs-example-popovers">
          <div class="alert alert-success alert-dismissible fade in" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
            </button>
            <strong>No News Found</strong>
          </div>
        </div>';
        }
        return $news;
    }

    

     

}

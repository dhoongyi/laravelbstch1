<?php

use App\Http\Controllers\employeesController;
use App\Http\Controllers\membersController;
use App\Http\Controllers\staffsController;
use App\Http\Controllers\studentsController;
use App\Http\Controllers\dashboardsController;
use App\Models\Article;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use SebastianBergmann\CodeCoverage\Driver\Selector;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("/",function(){
    return "Welcome to Our site";
});

// Route::get("index",function(){
//     return view("index");
// });

// OR 

Route::view("index","index");

Route::get("about",function(){
    return view("about");
});

// Route::get("students/about/aboutcompany",function(){
//     return view("students/aboutcompany");
// });

// OR 

Route::view("about/aboutcompany","aboutcompany");

// Syntax 
// Route::get("uri",function(){
//     return redirect("route_name");
// });

// Redirect Basic Route 
// Route::get("contact",function(){
//     return redirect("index");
// });

Route::redirect("contact","index");

Route::get("gotogoogle",function(){
    return redirect("https://google.com");
});


// Route::get("students/",[App\Http\Controllers\studentsController::class,"index"])->name("students.index");
// Route::get("students/show",[App\Http\Controllers\studentsController::class,"show"])->name("students.show");
// Route::get("students/edit",[App\Http\Controllers\studentsController::class,"edit"])->name("students.edit");

// Route Group 
// Route::group(["prefix"=>"students"],function(){
//     Route::get("/",[App\Http\Controllers\studentsController::class,"index"])->name("students.index");
//     Route::get("/show",[App\Http\Controllers\studentsController::class,"show"])->name("students.show");
//     Route::get("/edit",[App\Http\Controllers\studentsController::class,"edit"])->name("students.edit");
// });

// Group The Route By Name 
// Route::name("students.")->group(function(){
//     Route::get("students",[App\Http\Controllers\studentsController::class,"index"])->name("index");
//     Route::get("students/show",[App\Http\Controllers\studentsController::class,"show"])->name("show");
//     Route::get("students/edit",[App\Http\Controllers\studentsController::class,"edit"])->name("edit");
// });


Route::name("students.")->group(function(){
    Route::get("students",[studentsController::class,"index"])->name("index");
    Route::get("students/show",[studentsController::class,"show"])->name("show");
    Route::get("students/edit",[studentsController::class,"edit"])->name("edit");
});


Route::get("staffs",[staffsController::class,"home"])->name("staffs.home");
Route::get("staffsparty",[staffsController::class,"staffsparty"])->name("staffs.party");
Route::get("staffsparty/{total}",[staffsController::class,"partytotal"])->name("staffs.partytotal");
Route::get("staffsparty/{total}/{status}",[staffsController::class,"partytotalconfirm"])->name("staffs.status");


Route::get("employees",[employeesController::class,"index"])->name("employees.index"); 
Route::get("employees/show",[employeesController::class,"show"])->name("employees.show");
Route::get("employees/edit",[employeesController::class,"edit"])->name("employees.edit");
Route::get("employees/update",[employeesController::class,"update"])->name("employees.update");
Route::get("/employees/passingdataone",[employeesController::class,"passingdataone"])->name("employees.passingdataone");
Route::get("/employees/passingdatatwo",[employeesController::class,"passingdatatwo"])->name("employees.passingdatatwo");
Route::get("/employees/passingdatathree",[employeesController::class,"passingdatathree"])->name("employees.passingdatathree");
Route::get("/employees/passingdatafour",[employeesController::class,"passingdatafour"])->name("employees.passingdatafour");

// yield()
Route::get("/dashboards",[dashboardsController::class,"index"])->name("dashboards.index");

Route::get("/members",[membersController::class,"index"])->name("members.index");

// Insert Data From Route 
Route::get("/types/insert",function(){
    DB::insert("INSERT INTO types(type_name) VALUE(?)",["pdf"]);
    return "Data successfully restored.";
});
Route::get("/types/read",function(){
    $results = DB::select("SELECT * FROM types WHERE id = ?",[2]);
    // return $result;
    // return var_dump($result);
    // return "<pre>".print_r($result,"true")."</pre>";

    foreach($results as $result){
        return $result->type_name."<br/>";
    }
});
Route::get("students/insert",function(){
    // DB::insert("INSERT INTO students (name,phonenumber,city) value('aung aung','091234567','Mandalay')");
    // DB::insert("INSERT INTO students (name,phonenumber,city) value(?,?,?)",["maung maung","092222222","Bago"]);
    // DB::insert("INSERT INTO students (name,phonenumber,city) value(?,?,?)",["zaw zaw","092222222","Bago"]);
    DB::insert("INSERT INTO students (name,phonenumber,city) value(?,?,?)",["Ma Ma","093333333","Bago"]);
    return "Data Inserted Successfully";
});
Route::get("types/update",function(){
    // DB::update("UPDATE types SET type_name = 'mp4' WHERE id = ?",[1]);
    DB::update("UPDATE types SET type_name = 'ebook' WHERE id = ?",["2"]);  //int datatype doesn't matter whether you use "" or not
    return "Update Data Successfully";
});
Route::get("shoppers/update",function(){
    DB::update("UPDATE shoppers SET fullname = ? , phonenumber =? ,city =? WHERE id = ?",['maung maung',"097777777","Mandalay","2"]);
    return "Update Shoppers Successfullty";
});
Route::get("shoppers/delete",function(){
    DB::delete("DELETE FROM shoppers WHERE id = ?",[2]);
    return "Deleted Data Successfully";
});
Route::get("shoppers/read",function(){
    // $results = DB::select("SELECT * FROM shoppers WHERE id = ?",[6]);
    // return "<pre>".print_r($results,"true")."</pre>";

    // $results = DB::table("shoppers")->get();

    // take columns 
    // $results = DB::table("shoppers")->get("fullname");
    // $results = DB::table("shoppers")->select("fullname")->get();
    // $results = DB::table("shoppers")->selectRaw("*")->get();

    // select(columns)
    // selectRaw(expression)
    // DB::raw(value)

    // $results = DB::table("shoppers")->select("*")->where("id",5)->get(); // take all the columns of id = 5
    // $results = DB::table("shoppers")->select("fullname")->where("id",5)->get(); // take fullname of id = 5
    // return $results;
    // return var_dump($results);


    // $results = DB::table("shoppers")->select(DB::raw("*"))->get();
    // return "<pre>".print_r($results,"true")."</pre>";
    // $results = DB::table("shoppers")->selectRaw(DB::raw("*"))->get();
    // return "<pre>".print_r($results,"true")."</pre>";

    // $results = DB::table("shoppers")->select(DB::raw("*"))->get();
    // return "<pre>".print_r($results,"true")."</pre>";
    // $results = DB::table("shoppers")->selectRaw(DB::raw("*"))->get();
    // return "<pre>".print_r($results,"true")."</pre>";
    // return $results;

    // $results = DB::table("shoppers")->select("*")->where("id",5)->get(); // take all the columns of id = 5
    // $results = DB::table("shoppers")->select("fullname","phonenumber")->where("id",5)->get(); // take fullname & phonenumber of id = 5
    // $results = DB::table("shoppers")->select("fullname","phonenumber","city")->where("id",1)->get(); 
    // $results = DB::table("shoppers")->select("fullname","phonenumber")->where("id","<>",1)->get(); // pull out fullname & phone number without id = 1
    // $results = DB::table("shoppers")->select(DB::raw("fullname,phonenumber,city"))->where("id",1)->get();
    // return $results;

    // $results = DB::table("shoppers")->selectRaw("*")->get(); // take all the columns of id = 5
    // $results = DB::table("shoppers")->selectRaw("fullname")->where("id",5)->get(); // take fullname & phonenumber of id = 5
    // $results = DB::table("shoppers")->selectRaw("fullname,fullname,city")->where("id",1)->get(); 
    // $results = DB::table("shoppers")->selectRaw("fullname,phonenumber")->where("id","<>",1)->get(); // pull out fullname & phone number without id = 1

    // $results = DB::table("shoppers")->selectRaw(DB::raw("*"))->get();
    // $results = DB::table("shoppers")->selectRaw("*")->where("id",1)->get();
    // $results = DB::table("shoppers")->selectRaw(DB::raw("fullname,phonenumber,city"))->where("id",1)->get();
    // $results = DB::table("shoppers")->selectRaw(DB::raw("fullname,phonenumber,city"))->where("id","<>",2)->get();
    // return $results;

    // $results = DB::table("shoppers")->select("count(*) AS totalshopper,city")->where("id","<>",1)->groupBy("city")->get(); // error you can't write expression in select
    // $results = DB::table("shoppers")->selectRaw("count(*) AS totalshopper,city")->where("id","<>",1)->groupBy("city")->get(); // if you want to pull the results by expression use selectRaw
    // $results = DB::table("shoppers")->select(DB::raw("count(*) AS totalshopper,city"))->where("id","<>",1)->groupBy("city")->get(); // if also you don't want to use selectRaw you can also use DB::raw in select
    // $results = DB::table("shoppers")->selectRaw(DB::raw("count(*) AS totalshopper,city"))->where("id","<>",1)->groupBy("city")->get(); // if also you don't want to use selectRaw you can also use DB::raw in selectRaw
    // return $results;

    // $results = DB::table("shoppers")->first(); // pull out the first result of the db table
    // return $results;

    // $results = DB::table("shoppers")->pluck("fullname");  // pull out all the full name of the table but here , fullname is not column will return with array type
    $results = DB::table("shoppers")->pluck("fullname","id"); //will pull out with the object type , id will be the key and fullname will be the value
    // $results = DB::table("shoppers")->pluck("fullname","id","city"); //error doesn't work with 3 parameters
    return $results;

});


// =>Database Eloquent ORM (Object-relational Mapper)
Route::get("articles/read",function(){
    // return "Hello";
    // $articles = DB::table("articles")->get(); // normal way

    // $articles = Article::all();  // take all the data from Article table
    // return $articles;
    // return "$articles";

    $articles = Article::all();
    foreach($articles as $article){
        echo $article->title."<br/>";
        echo $article->description."<br/>";
    }
});

Route::get("articles/find",function(){
    // $articles = Article::find(7);  // work with primaryKey (id column) -- takes single value(First One)
    // return $articles;

    // =>Not Found Expression 
    // $articles = Article::findOrFail(11);  // if the result not have in database will show error404
    // return $articles;

    // $article = Article::findOrFail(20);  // Ko Tha recommend findOrFail --- it will not show error code , 404notfound
    // echo $article->title."<br/>".$article->description;

    // $article = Article::findl(20);
    // echo "<pre>".print_r($article->title,true)."</pre>";  // will show error page -- not cool

    // 404not found error with custom text & custom page
    $articles = Article::findOr("1",function(){
        return "ID Not Have";
    });
    return $articles;
});


Route::get("articles/where",function(){

    // =asc 
    // $articles = Article::where("uer_id",1)->orderBy("id","asc")->get();  // default
    // return $articles;

    // =desc
    // $articles = Article::where("uer_id",1)->orderBy("id","desc")->get(); 
    // return $articles;

    // $articles = Article::where("id",2)->orderBy("title","desc")->take(3)->get();  // default  -- take 3 results
    // $articles = Article::where("uer_id",2)->take(3)->orderBy("id","desc")->get();  // default  -- take 3 results
    // return $articles;

    // $articles = Article::where("uer_id",1)->orderByDesc("id")->get();
    // return $articles;

    // $articles = Article::where("uer_id",2)->limit(3)->orderBy("id","desc")->get();  // default  -- take 3 results same to take method
    // return $articles;

    // $articles = Article::where("uer_id",2)->first();
    // return $articles;

    // $articles = Article::where("id",">",3)->get();
    // return $articles;

    // $articles = Article::where("id",2)->first();
    // $articles = Article::where("uer_id",2)->select("id","title","description")->first();  // return with object
    // return $articles;

    // $articles = Article::where("uer_id",2)->pluck("id","title","description");  //return the data with array
    // return $articles;

    // $articles = Article::firstWhere("uer_id",1);  // no need get() method -- if you use get() method it will return all results
    // return $articles;


    // $articles = Article::where("uer_id",">",5)->get();
    // $articles = Article::where("uer_id",">",50)->get();  // error page will be showed
    // return $articles;

    // Not Found Exception 
    // $articles = Article::where("id",">",5)->firstOrFail();
    // $articles = Article::where("id",">",50)->firstOrFail();  // 404NotFound will be showed
    // return $articles;
    

    // 404notfound  with custom text 
    $articles = Article::where("uer_id",3)->firstOr(function(){
        return "Result Not Found";
    });
    return $articles;
});

// Retreving Aggregate 
Route::get("articles/aggregate",function(){
    $data = [
        ["price"=>"100"],
        ["price"=>"200"],
        ["price"=>"300"],
        ["price"=>"400"],
        ["price"=>"500"]
    ];

    // var_dump($data);
    // echo "<br/>";
    // var_dump(collect($data));

    // dd(
    //     $data,
    //     collect($data)
    // );

    // return collect($data)->count();
    // return collect($data)->max();

    // return collect($data)->max(function($num){
    //     return $num["price"];
    // });

    // return collect($data)->min();

    // return collect($data)->min(function($num){
    //     return $num['price'];
    // });

    //Average
    // return collect($data)->avg(function($num){
    //     return $num["price"];
    // });

    // $result = collect($data)->average(function($num){
    //     return $num['price'];
    // });
    // return $result;


    // Sum 
    // return collect($data)->sum(function($num){
    //     return $num['price'];
    // });

    // $articles = Article::all()->count();
    // return $articles;

    // $articles = Article::where("uer_id",1)->count();
    // return $articles;

    // $articles = Article::where("uer_id",2)->max("rating");
    // return $articles;

    // $articles = Article::where("uer_id",1)->min("rating");
    // return $articles;

    // Average 
    // return Article::where("uer_id",1)->avg("rating");
    // $articles = Article::where("uer_id",1)->average("rating");
    // return $articles;

    // Sum 
    // $articles = Article::where("uer_id",2)->sum("rating");
    // return $articles;

});

// -------------------------------------------------

// Retreving Or Creating Data to Model 
Route::get("articles/create",function(){
    // $article = Article::firstOrCreate(
    //     ['title'=>'this is article 1']
    // );

    // return $article;  //{"id":1,"title":"This is article 1","description":"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's","uer_id":1,"rating":2,"created_date":"2023-08-24T12:10:57.000000Z","updated_date":"2023-08-17T12:10:57.000000Z"}

    // 
    
    // $articles = Article::firstOrCreate(
    //     [
    //     "title"=>"this is article 15",
    //     "description"=>"Lorem Ipsum is simply dummy text of printing and typesetting industry",
    //     "uer_id"=>3,
    //     "rating"=>4
    //     ]
    // );
    // // return $articles;
    // return "Data Create Or Retreve Successfully";


    $articles = Article::firstOrCreate(
        [
            "title"=>"this is article 17"
        ],

        [
        "title"=>"this is article 17",
        "description"=>"Lorem Ipsum is simply dummy text of printing and typesetting industry",
        "uer_id"=>3,
        "rating"=>4
        ]
    );
    // return $articles;
    return "Data Create Or Retreve Successfully";


});


Route::get("articles/filter",function(){
    // $article = Article::all();
    // $articles = Article::get();
    // return $articles;

    // foreach($articles as $article){
    //     echo "$article->id <br/> $article->title <br/> $article->description <br/>";
    // }

    // $articles = Article::get()->filter(function($article){
    //     echo $article->title."<br/>".$article->description."<br/>";
    // });

    $articles = Article::cursor()->filter(function($article){
        echo $article->id > 3;
    });

    foreach($articles as $article){
        echo "$article->title <br/> $article->description <br/>";
    }
});


//=> whereColumn("column1","column2") -- will take the same value both column1 and column2
Route::get("articles/wherecolumn",function(){
    // $articles = Article::whereColumn("id","uer_id")->get();
    // return $articles;

    // $articles = Article::whereColumn("created_date","updated_date")->get();
    // return $articles;

    // $articles = Article::whereColumn("updated_date",">","created_date")->get();
    // return $articles;

    // $articles = Article::whereColumn("updated_date",">","created_date")->orderBy("desc")->get();
    // return $articles;

    // for multi compare (with array)
    // $articles = Article::whereColumn(["id"=>"uer_id","created_date"=>"updated_date"])->get();
    $articles = Article::whereColumn([
        ["id","uer_id"],
        ["created_date","updated_date"]
    ])->get();
    return $articles;

});

// INSERT -- Create 
Route::get("articles/insert",function(){
    // There are two types of inserting data to database 
    // Method 1
    // the result will be duplicate when you reload the page
    // $articles = new Article;
    // $articles->title = "This is new article 18";
    // $articles->description = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Id atque maxime iure rerum fuga deserunt tenetur esse. A, rerum modi, consectetur minus, exercitationem labore quidem non quaerat veritatis id velit.";
    // $articles->uer_id = 1;
    // $articles->rating = 3;

    // $articles->save();
    
    // return "Data inserted $articles";

    // Method 2 
    // $articles = new Article;
    // $articles->create([
    //     "title"=>"This is new articles 20",
    //     "description"=> "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam at pariatur dicta quia optio! Magnam dignissimos veritatis in minima sint doloremque. Eos blanditiis labore, officia cupiditate libero vitae ab sunt!",
    //     "uer_id"=>2,
    //     "rating"=>3
    // ]);

    // return "Data inserted $articles";

    // echo now();
    // echo "<br/>";
    // var_dump(now());  //pbject 

    // echo now()->toDateTimeString();
    // var_dump(now()->toDateTimeString());  // string


    date_default_timezone_set('Asia/Bangkok');
    // $getdate = now()->toDateTimeString(); // server timezone with string
    $gettoday = now("Asia/Yangon");  // yangon timezone 
    // use Carbon\Carbon;
    $currentTime = Carbon::now();  // object

    // echo "$getdate <br/> $gettoday <br/> $currentTime <br/>";
    // echo date("Y-m-d H:i:s");  // take server timezone


    $articles = DB::table("articles")->insert(
        
        [
        "title"=>"This is new articles 23",
        "description"=> "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam at pariatur dicta quia optio! Magnam dignissimos veritatis in minima sint doloremque. Eos blanditiis labore, officia cupiditate libero vitae ab sunt!",
        "uer_id"=>2,
        "rating"=>3,
        "created_date"=>$gettoday,
        "updated_date"=> $currentTime
        ]
    );

    // return $articles;
});

Route::get("articles/subquery",function(){

});
<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRequests;
use Illuminate\Http\Request;
use App\Models\Store;

class FillController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $data = Store::all();
        return view('store', compact ('data'));
    }

    public function add(){
        return view('add');
    }

    public function insertdata(Request $request){
        // dd($request->all());
        $data = Store::create($request->all());
        return redirect('store')->with('succses', 'Data added successfully');
    }

    public function showdata($id){
        $data = Store::find($id);
        // dd($data);
        return view('show', compact('data'));
 
    }

    public function updatedata(Request $request, $id){
        $data = Store::find($id);
        $data->update($request->all());
        return redirect('store')->with('succses', 'Data successfully updated');

    }

    public function delete($id ){
        $data = Store::find($id);
        $data->delete();
        return redirect('store')->with('succsess', 'Data Successfully Deleted ');
    }




































    // public function __construct()
    // {
    //     $this->middleware('auth');
    //     // $this->middleware('verified');
    //     $this->middleware('is_admin');
    // }

    // public function index(Request $request){
    //     $fill = Store::where()->paginate(5);
    //     return view ('store.index',compact('stores'));
    // }
        
    

    // public function create()
    // {
    //     return view('store.create');
    // }

    // public function edit(){
    //     return view('store.edit');
    // }


    // // public function store(Request $request){
    // //     Store::create([
    // //         'store' => $request->store,
    // //         'user' => $request->user,
    // //     ]);
    // // }

    // public function store(Request $request)
    // {
    //     Store::create($request->all());

    //     return redirect()->route('store.index')->with('success');
    // }

    // public function show($id)
    // {
       
    //     $fill = Store::find($id);
    //     return $fill;
       
    // }




}















        // $fill = Store::paginate(4);
        // return view('store.index', [
        //     'data' =>$fill
        // ]);



//     public function create()
//     {
//         return view('store.create');
//     }

    
//     public function edit($id)
//     {
//         $fill = Store::find($id);
//         return view('store.edit', compact('stores'));
//     }

//     public function show($id){
//         $fill = Store::find($id);
//         return $fill;
//     }
    
//     public function store(Request $request){
//         // $request->validate([
//         //     // 'tasks' => ['required'],
//         //     // 'user' => ['required']
//         // ]);

//         Store::create([
//             'store' => $request->store,
//             'user' => $request->user,
//         ]);

//         return redirect('/stores');
//     }


//     public function update(Request $request, $id){
//         $fill = Store::find($id);

//         $fill->update([
//             'store' => $request->store,
//             'user' => $request->user,
//         ]);

//         return redirect('/stores');
//     }

//     public function destroy($id){
//         $fill = Store::find($id);
//         $fill->delete();

//         return redirect('/stores');

//     }
// }

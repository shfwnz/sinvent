<?php

namespace App\Http\Controllers;

//Library db builder
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

//Get Models Category
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Menguji Template bootstrap
        // return view('backend.layouts.adm_template');

        //Membuat Object untuk mengakses record
        // $category = DB::table('category')->get(); //Seluruh Record

        //return view('category.index', compact('category'));
        // return $category[0]->name;
        // $row  = $category[1];
        // return $row->id.$row->name.$row->description;

        // Mendeteksi tanpa search
        // $category = DB::table('category')->select('id','name','description','category',DB::raw('infCategory(category) as information'))->get();
        // return view('category.index', compact('category'));
        
        // Dengan Searching
        if (request('search')) {
            $category = DB::table('category')->select('id','name','description','category',DB::raw('infCategory(category) as information'))->where('id','like', $request->search)->orwhere('description','like','%'.$request->search.'%')->paginate(3);
        } else { //Tanpa searching
            $category = DB::table('category')->select('id','name','description','category',DB::raw('infCategory(category) as information'))->paginate(3);
        }

        return view('backend.category.index', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $listCategory = array(''=>'Select Category','M'=>'Modal','A'=>'Alat','BHP'=>'Bahan Habis Pakai','BHTP'=>'Bahan Tidak Habis Pakai');

        return view('backend.category.create',compact('listCategory'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name'          => 'required',
            'description'   => 'required',
            'category'      => 'required'
        ]);

        Category::create([ // Mengambil Model
            'name'          => $request->name,
            'description'   => $request->description,
            'category'      => $request->category
        ]);

        return redirect()->route('category.index')->with(['success' => 'Data berhasil disimpan!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $category = DB::table('category')
                        ->select('id','name','description','category',DB::raw('infCategory(category) as information'))
                        ->where('id',$id)
                        ->get();
        
        return view('backend.category.show',compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, string $id)
    {
        //
        $listCategory = array(''=>'Select Category','M'=>'Modal','A'=>'Alat','BHP'=>'Bahan Habis Pakai','BHTP'=>'Bahan Tidak Habis Pakai');
        $category = Category::find($id);

        return view('backend.category.edit',compact('category','listCategory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'name'          => 'required',
            'description'   => 'required',
            'category'      => 'required'
        ]);
        $rsetcategory = Category::find($id);
        $rsetcategory->update($request->all());

        return redirect()->route('category.index')->with(['success' => 'Data Berhasil diubah']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        // Mencari kategori berdasarkan ID
        $category = Category::find($id);

        // Jika kategori ditemukan, hapus data
        if ($category) {
            $category->delete(); // Menghapus kategori
            return redirect()->route('category.index')->with('success', 'Category deleted successfully');
        }

        // Jika kategori tidak ditemukan, kembalikan dengan pesan error
        return redirect()->route('category.index')->with('error', 'Category not found');
    }
}

<?php

namespace App\Http\Controllers;

use App\Dashboard;
use App\Posts;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('dashboard');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function show(Dashboard $dashboard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function edit(Dashboard $dashboard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dashboard $dashboard)
    {
        //
    }

    public function blogPosts(Request $request) {
        $allPosts = Posts::orderBy('id', 'DESC')->get();
        return view('blog-posts', compact('allPosts'));
    }

    public function createPosts(Request $request) {
        if($request->all()){

            $this->validate($request, [
                'postContent' => 'required',
                'title' => 'required',
            ]);

//            $image = $request->file('file');
////            $imageName = $image->getClientOriginalName();
//            $image->move(public_path('images'), time().'unpeep');

//            $imageUpload = new ImageUpload();
//            $imageUpload->filename = $imageName;
//            $imageUpload->save();

            $title = $request->input('title');

            $postContent = $request->input('postContent');

            $dom = new \DomDocument();

            $dom->loadHtml($postContent, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
            $images = $dom->getElementsByTagName('img');

            foreach($images as $k => $img){

                $data = $img->getAttribute('src');
                list($type, $data) = explode(';', $data);
                list(, $data)      = explode(',', $data);
                $data = base64_decode($data);
                $image_name= "/uploads/" . time().$k.'.png';
                $path = public_path() . $image_name;
                file_put_contents($path, $data);

                $img->removeAttribute('src');

                $img->setAttribute('src', $image_name);
            }

            $postContent = $dom->saveHTML();
            $blogPost = new Posts;
            $blogPost->postContent = $postContent;
            $blogPost->title = $title;
            $blogPost->save();

            return redirect()->route('blog-posts');
        }

        return view('create-posts');
    }

    public function editPosts(Request $request, $id = null)
    {
        $editPosts = Posts::where('id', '=', $id)->first();

        if($request->all()) {

            $this->validate($request, [
                'postContent' => 'required',
                'title' => 'required',
            ]);

            $title = $request->input('title');

            $postContent = $request->input('postContent');

            $dom = new \DomDocument();

            $dom->loadHtml($postContent, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
            $images = $dom->getElementsByTagName('img');

            foreach($images as $k => $img){

                $data = $img->getAttribute('src');
                list($type, $data) = explode(';', $data);
                list(, $data)      = explode(',', $data);
                $data = base64_decode($data);
                $image_name= "/uploads/" . time().$k.'.png';
                $path = public_path() . $image_name;
                file_put_contents($path, $data);

                $img->removeAttribute('src');

                $img->setAttribute('src', $image_name);
            }

            $postContent = $dom->saveHTML();

            $val = Posts::where('id', '=', $request['hiddenID'])->update([
               'title' => $title,
                'postContent' => $postContent
            ]);

            if($val) {
                echo 'success';
            } else {
                echo 'failed';
            }

            die();

            return redirect()->route('blog-posts');
        }

        return view('edit-posts', compact('editPosts'));
    }

    public function deletePosts(Request $request) {
        if($request->all()) {
            Posts::find($request['id'])->delete();

            $response = array(
                'status' => 'success',
                'msg' => 'Successful post',
            );

            return response()->json($response);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dashboard $dashboard)
    {
        //
    }
}

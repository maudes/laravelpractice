<?php

namespace App\Http\Controllers\Admin;
use App\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    //顯示建立 blog 文章列表
    public function index()
    {
        //要在上面 namespace 引用 use App\Article,才可以只打 ｍodel 名稱；
        $article= Article::all();
        return view('admin.article.index',['articles'=>$article]);
    }
    //顯示建立 blog 文章
    public function create()
    {
        return view('admin.article.create');
    }
    /**
     * 儲存一篇部落格新文章。
     *
     * @param  Request  $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
       $request->validate([
            'title' => 'required|max:255',
            'image' => 'required',
            'content' => 'required',
       ]);

        $article = new Article();
        $article->title = $request->title;
        $article->image = $request->image;
        $article->content = $request->content;
        $article->save();

        return redirect('admin/article');
    }
    public function delete($id)
    {
        $article=Article::find($id);
        $article->delete();

        return redirect('admin/article');
    }
    public function edit($id)
    {
        $article=Article::find($id);
        $article->edit();
        //return view(‘admin.article.’);

        return redirect('admin/article');
    }

}

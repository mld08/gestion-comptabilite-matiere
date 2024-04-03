<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Http\Requests\ArticleFormRequest;


class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('article.index', [
            'articles' => Article::orderBy('created_at', 'asc')->paginate(15)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $article = new Article();
        return view('article.form', [
            'article' => $article,
            'fournisseur' => Fournisseur::pluck('nom', 'id'),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ArticleFormRequest $request)
    {
        $request->validated()['fournisseur_id'] = $request->validated()['fournisseur_id'][0];
        $article = Article::create($request->validated());
        return to_route('admin.article.index')->with('success', 'L\'article a bien été créé');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        return view('article.form',[
            'article' => $article,
            'fournisseur' => Fournisseur::pluck('nom', 'id'),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ArticleFormRequest $request, Article $article)
    {
        $request->validated()['fournisseur_id'] = $request->validated()['fournisseur_id'][0];
        $article->update($request->validated());
        return to_route('admin.article.index')->with('success', 'L\'article a bien été modifié');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        if ($article->isUsed()) {
            return back()->withErrors(['Cet article est utilisé et ne peut pas être supprimé']);
        }
        $article->delete();
        return redirect()->route('admin.article.index')
                         ->with('success','L\'article a bien été supprimé');
    }
}

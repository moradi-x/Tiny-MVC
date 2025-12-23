<?php

namespace application\controllers;
use application\model\Article as ArticlieModel ;

use application\model\Category ;

class Article extends Controllers
{


    public function index()
    {
        // فقط صفحه رو نشون میده ویوو
        $article = new ArticlieModel();
        $articles = $article->all();
        return $this->View('panel.article.index',compact('articles'));

    }

    public function create()
    {
        // فقط صفحه کریت یک مقاله رو نشون میده و عملیات انحجام نمیده 
        $categoriy = new Category();
        $categories = $categoriy->all();
        return $this->View('panel.article.create',compact('categories')); 
        // دلبل کامپت چیه ؟ چون میخوایم دسته بندی هارو موقع کریت نشون بدیم 

    }
    public function store()
    {
        // عملایت اینسرت انجام میده
        $article = new ArticlieModel() ;
        $article->insert($_POST);
        return $this->redirect('article');

    }
    public function edit($id) {
        // عملیات انجام نمیده و فقط نشون میده
        $category = new Category();
        $categories = $category->all();
        $ob_article = new ArticlieModel();
        $article = $ob_article->find($id);
        return $this->View('panel.article.edit',compact('categories','article'));

    }
    public function update($id) {
        // عملیات اپدیت یا همون ادیت رو انجام میده
        $article = new ArticlieModel() ;
        $article->update($id,$_POST);
        return $this->redirect('article');
    }

    public function show($id) {}


    public function destroy($id) {
        // عملیات حذف کردن ارتیکل
        $article = new ArticlieModel() ;
        $article->delete($id);
        return $this->back();
    }
}

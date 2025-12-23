<?php 
namespace application\controllers ;

use application\model\Article;
use application\model\Category;

class Home extends Controllers{

    public function index(){
        $category = new Category();
        $categories = $category->all();
        $article = new Article();
        $articles = $article->all();
        return $this->View('app.index',compact('categories','articles'));

    }

    public function category($id){
        $ob_category = new Category();
        $categories = $ob_category->all();

        $ob_category = new Category();
        $category  = $ob_category->find($id);

        $ob_category = new Category();
        $articles = $ob_category->articles($id);

        return $this->View('app.category',compact('categories','category','articles'));

    }

    public function show($id){
        $category = new Category();
        $categories = $category->all();
        $articles = new Article();
        $article = $articles->find($id);
        return $this->View('app.show',compact('categories','article'));

    }
    
}
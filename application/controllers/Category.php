<?php

namespace application\controllers;
use application\model\Category as CategoryModel ;

class Category extends Controllers
{
    public function index()
    {
        // فقط صفحه رو نشون میده ویوو
        $categories = new CategoryModel() ;
        $category = $categories->all();
        return $this->View('panel.category.index',compact('category'));

    }

    public function create()
    {
        // فقط صفحه کریت رو نشون میده و عملیات انحجام نمیده 
        return $this->View('panel.category.create');


    }
    public function store()
    {
        // عملیات اینسرت انجام میده
        $categories = new CategoryModel();
        $categories->insert($_POST);
        return $this->redirect('category');

    }
    public function edit($id) {
        // عملیات انجام نمیده و فقط نشون میده
        $ob_categories = new CategoryModel();
        $category = $ob_categories->find($id);
        return $this->View('panel.category.edit',compact('category'));
    }
    public function update($id) {
        // عملیات هپدیت یا همون ادیت رو انجام میده
        $categories = new CategoryModel();
        $categories->update($id,$_POST);
        return $this->redirect('category');
    }

    public function show($id) {}


    public function destroy($id) {
        // عملیات حذف کردن ارتیکل
        $categories = new CategoryModel;
        $categories->delete($id);
        return $this->back();
    }
}

<?php

namespace application\model;

class Category extends Model
{

    public function all()
    {
        // تمامی دسته بندی های من در دیتابیس رو نشون بده 

        $query = "SELECT * FROM `categories` ; ";
        $result = $this->query($query)->fetchAll();
        $this->closeConnection();
        return $result;
    }

    public function articles($cat_id)
    {
        // تمامی مقاله های اون دسته بندی رو نشون بده
        $query = "SELECT * FROM `articles` 
         WHERE `cat_id` = ? ; ";
        $result = $this->query($query, [$cat_id])->fetchAll();
        $this->closeConnection();
        return $result;
    }

    public function find($id)
    {
        // میاد و ایدی رو میگیره و اون دسته بندی رو بهت میده 
        $query = "SELECT * FROM `categories` 
        WHERE `id` = ? ; ";
        $result = $this->query($query, [$id])->fetch();
        $this->closeConnection();
        return $result;

    }

    public function insert($values)
    {
        $query = "INSERT INTO `categories` (`name`,`description`,`created_at`)
                   VALUES (?,?,now()) ";
        $this->execute($query, array_values($values));
        $this->closeConnection();
    }



    public function update($id, $values)
    {
        $query = "UPDATE `categories` 
        set `name` = ? , 
        `description` = ? ,
        `update_at` = now() 
         where `id` = ?;";
         
        $this->execute($query, array_merge(array_values($values), [$id]));
        $this->closeConnection();
    }

    public function delete($id)
    {
        $query = "DELETE FROM `categories` WHERE `id` = ? ;";
        $this->execute($query, [$id]);
        $this->closeConnection();
    }
}

<?php

namespace application\model;

class Article extends Model
{

    public function all()
    {
        // تمامی مقاله در دیتابیس رو نشون میده 

        $query = "SELECT * FROM `articles` ; ";
        $result = $this->query($query)->fetchAll();
        $this->closeConnection();
        return $result;
    }

    public function find($id)
    {
        // به اون مقاله دسترسی داریم با این  مثل شوو
        $query = "SELECT *,
         (SELECT `name` FROM `categories` 
         WHERE `categories`.`id` = `articles`.`cat_id`) as `category` 
         FROM `articles` 
        WHERE id = ? ";
        $result = $this->query($query, [$id])->fetch();
        $this->closeConnection();
        return $result;
    }

    public function insert($values)
    {
        $query = "INSERT INTO `articles` (`title`,`cat_id`,`body`,`created_at`)
         VALUES (?,?,?,now()) ";
        $this->execute($query, array_values($values));
        $this->closeConnection();
    }

    public function update($id, $values)
    {
        $query = "UPDATE `articles` 
         set `title` = ? , 
         `cat_id` = ? , 
         `body` = ? , 
         `update_at` = now() 
          where `id` = ?;";
        $this->execute($query, array_merge(array_values($values), [$id]));
        $this->closeConnection();
    }

    public function delete($id)
    {
        $query = "DELETE FROM `articles` WHERE `id` = ? ;";
        $this->execute($query, [$id]);
        $this->closeConnection();
    }
}

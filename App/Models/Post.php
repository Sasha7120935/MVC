<?php


namespace App\Models;

Use PDO;
/**
 * Example user model
 *
 * PHP version 7.0
 */
class Post extends \Core\Model
{

    protected $tableName = 'post';
    public function __construct()
    {
     $this->getDB();
    }

    /**
     * Get all the users as an associative array
     *
     * @return array
     */
    public  function insert (array $postData)
    {
        $sql = "INSERT INTO {$this->tableName} (title,content) VALUES (:title, :content)";
        $sth = $this->db->prepare($sql);
        $sth->execute($postData);
        return  $this->db->lastInsertId();
    }
    public function getPost(int $id)
    {
        $sql = "SELECT * FROM {$this->tableName} WHERE id=:id";
        $sth = $this->db->prepare($sql);
        $sth->execute([':id' => $id]);
        $post = $sth->fetch(PDO::FETCH_ASSOC);

        return !empty($post) ? $post : false;
    }
}
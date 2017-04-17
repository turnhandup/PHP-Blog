<?php
interface PostDAO{
  public function insert(PostVO $post);
  public function get($id);
  public function getAll();
  public function update(PostVO $post);
  public function delete(PostVO $post);
}
 ?>

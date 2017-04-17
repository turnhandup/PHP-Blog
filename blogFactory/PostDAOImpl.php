<?php
class PostDAOImpl implements PostDAO{
  public function insert(PostVO $post)
  {
    $p=new PostVO();
    $p->post=$post->getText();
  }
  public function get($id){
    $data = 
  }
  public function getAll();
  public function update(PostVO $post);
  public function delete(PostVO $post);
}
?>

<?php
class tags extends Controller{

	function index(){
		$this->tags = get_all("SELECT tag_name, COUNT(post_id) AS count
		 FROM post_tags NATURAL JOIN tag
		 GROUP BY tag_id");
	}

	function view(){
		$tag_name = $this->params[0];
		$tag_id = get_one("SELECT tag_id FROM tag NATURAL JOIN user WHERE tag_name='$tag_name'");
		$this->posts = get_all("SELECT * FROM post_tags NATURAL JOIN post, user WHERE tag_id='$tag_id'");
        $post_id = $this->params[0];
        $this->post = get_one("SELECT * FROM post NATURAL JOIN user WHERE post_id='$post_id'");
        $this->tags = get_all("SELECT * FROM post_tags NATURAL JOIN tag WHERE post_id='$post_id'");
        $_tags = get_all("SELECT * FROM post_tags NATURAL JOIN tag");
        foreach ($_tags as $tag) {
            $this->tags[$tag['post_id']][] = $tag['tag_name'];
        }
	}
}
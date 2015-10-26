<?php

namespace Hado\App\Models;

use Hado\Core\Model;

Class ArticleModel extends Model{
	
	public function __construct(){
		parent::__construct();
		$this->table = 'article';	
	}

	public function getArticlesAndCategories(){
		return $this->sqlQuery('
			SELECT a.id, a.title, a.body, a.published_at, a.id_category, c.title as category
			FROM article as a, category as c
			WHERE a.id_category = c.id
			ORDER BY a.published_at DESC
		');
	}
}
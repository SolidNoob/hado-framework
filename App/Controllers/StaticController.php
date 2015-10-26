<?php

namespace Hado\App\Controllers;

use Hado\Core\Router;
use Hado\Core\Controller;

use Hado\App\Models\ArticleModel;

use Hado\Helpers\DateTime;
use Hado\Helpers\Session;

Class StaticController extends Controller{

	public function homeAction(){
		
		$url = Router::url('article-read', array('film', 'matrix'));

		$articlesModel = new ArticleModel();
		$articles = $articlesModel->getAll();

		Session::set('fruit', 'apple');
		/*
		$articlesModel->insert(array(
			'title' => 'Mon article inseré par requête',
			'body' => 'Lorem ipsum dolor sit amet',
			'id_category' => 1, 
			'published_at' => DateTime::now()
		));
		*/
		
		/*
		$deletedRows = $articlesModel->delete('id = 3');
		echo $deletedRows.' ligne(s) supprimée(s)'; 
		*/
	
		//$articles = $model->select('body LIKE :bind', array(':bind' => '%coucou%'));
		$articles = $articlesModel->getArticlesAndCategories();

		//echo "<a href='$url'>lien</a>";
		return $this->render("Static/index", array('name' => "Phillipe", 'articles' => $articles));
	}


	public function contactAction($name){
		echo Session::get('fruit');
		//$url = $this->router->url('homepage');
		return $this->render("Static/contact", array('name' => $name));
	}

	public function getArticlesTheAjaxWayAction(){
		if($this->isAjaxRequest()){
			header('Content-Type: application/json');
			$articlesModel = new ArticleModel();
			$articles = $articlesModel->getAll();
			$view = $this->render("Partials/articles", array('articles' => $articles));
			return json_encode($view);
		}
		header("HTTP/1.0 404 Not Found");
		$this->redirect(Router::url('homepage'));
		return false;
	}

}
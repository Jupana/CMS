<?php 
	require'init.php';

	class User_Actions{

		public function logIn($username_email,$pass){
			global $database;

			$data = $database->select("users",[
				"password"
			],[
				"OR"=> [
					"username" => $username_email,
					"email" => $username_email
				]

			]);

			$password_db = $data[0]["password"];

			if(password_verify($pass, $password_db)){
				return true;							
			}else{
				return false;
				
		    }	
		}

		public function getProfile($session){
			global $database;

			$user = $database->select("users",[
				"user_id"

			], [
				"OR" => [
					"username" => $session,
					"email" => $session
				]
			]);
			return $user;
		}


	//Para que los ususrios sean unicos y luego se registran en la siguente
		public function checkExistance($username,$email){
			global $database;

			$users = $database->count("users",[
				"OR" => [
					"username" => $username,
					"email" => $email
				]
			]);
			return $users;
		}

		public function register($name,$last_name,$username,$email,$pass){
			global $database;

			if($this->checkExistance($username, $email) == 0){
				$register = $database->insert("users",[
					"name" => htmlentities($name),
					"last_name" => htmlentities($last_name),
					"username" => htmlentities($username),
					"email" => htmlentities($email),
					"password" => password_hash($pass,PASSWORD_BCRYPT),
					"created_at" => time()
				]);
	
				return $database->id();
			}else{

				return false;
			}
		
		}

		public function getPosts(){
			global $database;

			$posts = $database->select("posts",[
				"post_id",
				"name",
				"img_post",
				"created_at",
				"body",
				"created_at"

			],[
				"ORDER" => ["posts.post_id"=>"DESC"],
			
			]);

			return $posts;
		}

		public function getRecentPosts(){
			global $database;

			$posts = $database->select("posts",[
				"post_id",
				"name",
				"img_post",
				"created_at",
				"body",
				"created_at"

			],[
				"ORDER" => ["posts.post_id"=>"DESC"],
				"LIMIT" => "8"
			]);

			return $posts;
		}

		public function getPostInfo($post_id){
			global $database;
		

			$posts = $database->select("posts",[
				"[>]categories" => ["category_id" => "category_id"],
				"[>]admins" => ["admin_id" => "admin_id"]

			],[
				"posts.name",
				"posts.body",
				"posts.img_post",
				"posts.created_at",
				"categories.category",
				"admins.username"


			],[
		
				"posts.post_id" => $post_id
			]);
		
			return $posts;

		}

		public function markAsFavorite($post_id,$user_id){
			global $database;

			$database ->insert("favorites",[
				"user_id" => $user_id,
				"post_id" => $post_id

			]);
			return $database->id();
		}

		public function deleteFavorite($favorite_id){
			global $database;

			$delete = $database->delete("favorites",[
				"favorite_id"=> $favorite_id
			]);
			 
	 		return $delete->rowCount();

		}

		public function getMyFavorites($user_id){
			global $database;

			$posts = $database->select("favorites",[
				"[>]posts" => ["post_id" => "post_id"]

			], [
				"posts.post_id",
				"posts.name",
				"posts.img_post",
				"posts.created_at",
				"posts.body",
				"favorites.favorite_id"
				
			],[
				"favorites.user_id" => $user_id,
				"ORDER" => ["favorites.favorite_id"=>"DESC"],
				
			]);

			return $posts;


		}

		public function checkFavorites($user_id,$post_id){
		global $database;

		$users = $database->count("favorites",[
			"AND" => [
				"user_id" => $user_id,
				"post_id" => $post_id
			]
			]);
			return $users;

	     }
    }


	class Admin_Actions{
		public function logIn($username_email,$pass){
			global $database;

			$data = $database->select("admins",[
				"password"
			],[
				"OR"=> [
					"username" => $username_email,
					"email" => $username_email
				]

			]);

			$password_db = $data[0]["password"];

			if(password_verify($pass, $password_db)){
				return true;							
			}else{
				return false;
				
		    }	
		}

		public function getProfile(){
			global $database;

			$admin = $database->select("admins",[
				"admin_id",
				"username"

			],[
				"email"=>$email
			]);
			return $admin;
		}

        public function getCategories(){
			global $database;

			$categories = $database->select("categories",[
				"category_id",
				"category"

			]);
			return $categories;
		}

		
		public function getPosts(){
			global $database;

			$posts = $database->select("posts",[
				"post_id",
				"name",
				"img_post",
				"created_at",
				"body",
				"created_at"

			],[
				"ORDER" => ["posts.post_id"=>"DESC"],
			
			]);

			return $posts;
		}


		public function saveCategory($category) {

			global $database;

			$database->insert("categories",[
				"category"=> htmlentities($category)
			]);
			 
			return $database->id();
		
		}

		public function deleteCategory($category_id) {

			global $database;

			$delete=$database->delete("categories",[
				"category_id"=> $category_id
			]);
			 
			return $delete->rowCount();
		
		}

		public function savePost($name,$category_id,$description,$name_img,$admin_id){
			global $database;

			$database->insert("posts",[
				"name"	=> htmlentities($name),
				"body"	=> $description,
				"img_post"      => $name_img,
				"category_id"	=> htmlentities($category_id),
				"admin_id"		=> $admin_id,
				"created_at"	=> time()

			]);	
			 
			return $database->id();

		}
		
	}

 ?>
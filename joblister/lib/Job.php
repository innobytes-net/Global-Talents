<?php
	class Job{
		private $db;

		public function __construct(){
			$this->db = new Database;
		}

		// Get All Jobs
		public function getAllJobs(){
			$this->db->query("SELECT job_post.*, category.Category AS cname 
						FROM job_post
						INNER JOIN category
						ON job_post.category_id = category.category_id 
						ORDER BY post_data DESC 
						");
			// Assign Result Set
			$results = $this->db->resultSet();

			return $results;
        }
        public function getCategories(){
			$this->db->query("SELECT * FROM category");
			// Assign Result Set
			$results = $this->db->resultSet();

			return $results;
		}

		// Get Jobs By Category
		public function getByCategory($category){
			$this->db->query("SELECT job_post.*, category.Category AS cname 
						FROM job_post
						INNER JOIN category
						ON job_post.category_id = category.category_id 
						WHERE job_post.category_id = $category
						ORDER BY post_data DESC 
						");
			// Assign Result Set
			$results = $this->db->resultSet();

			return $results;
		}

		// Get category
		public function getCategory($category_id){
			$this->db->query("SELECT * FROM category WHERE category_id = :category_id");

			$this->db->bind(':category_id', $category_id);

			// Assign Row
			$row = $this->db->single();

			return $row;
        }
        // Get Job
		public function getJob($id){
			$this->db->query("SELECT * FROM job_post WHERE job_id = :id");

			$this->db->bind(':id', $id);

			// Assign Row
			$row = $this->db->single();

			return $row;
        }
        
        // Create Job
		public function create($data){
			//Insert Query
			$this->db->query("INSERT INTO job_post (category_id, job_title, company_name, job_description, job_location, salary, contact_user, contact_email)
			VALUES (:category_id,:job_title, :company, :description, :location, :salary, :contact_user, :contact_email)");
			// Bind Data
			$this->db->bind(':category_id', $data['category_id']);
			$this->db->bind(':job_title', $data['job_title']);
			$this->db->bind(':company', $data['company_name']);
			$this->db->bind(':description', $data['job_description']);
			$this->db->bind(':location', $data['job_location']);
			$this->db->bind(':salary', $data['salary']);
			$this->db->bind(':contact_user', $data['contact_user']);
			$this->db->bind(':contact_email', $data['contact_email']);
			//Execute
			if($this->db->execute()){
				return true;
			} else {
				return false;
            }
            
            
        }
        // Delete Job
		public function delete($id){
			//Insert Query
			$this->db->query("DELETE FROM job_post WHERE job_id = $id");
			
			//Execute
			if($this->db->execute()){
				return true;
			} else {
				return false;
			}
        }
        
        // Update Job
		public function update($id, $data){
			//Insert Query
			$this->db->query("UPDATE job_post
				SET 
				category_id = :category_id,
				job_title = :job_title,
				company_name = :company,
				job_description = :description,
				job_location = :location,
				salary = :salary,
				contact_user = :contact_user,
				contact_email = :contact_email 
				WHERE job_id = $id");
			// Bind Data
			$this->db->bind(':category_id', $data['category_id']);
			$this->db->bind(':job_title', $data['job_title']);
			$this->db->bind(':company', $data['company_name']);
			$this->db->bind(':description', $data['job_description']);
			$this->db->bind(':location', $data['job_location']);
			$this->db->bind(':salary', $data['salary']);
			$this->db->bind(':contact_user', $data['contact_user']);
			$this->db->bind(':contact_email', $data['contact_email']);
			//Execute
			if($this->db->execute()){
				return true;
			} else {
				return false;
			}
		}
	}
<?php
     class Validation{

     	public function is_picture_path_valid($picture_path){


     		if(preg_match("!images!", $_FILES['picture']['type'])){
			     		return true;
			     	}
			         return false;
			     	}


		public function is_image_copied($picture_path){

			if(copy($_FILES['picture']['tmp_name'],$picture_path)){
				return true;
			}
			    return false;
		}     	

     	
     }
?>
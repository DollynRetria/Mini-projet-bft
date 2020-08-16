<?php
	class Etudiant
	{
		//objet PDO d'accès à la base de données
		private $bdd;
		
		private function connexBdd(){
			if($this->bdd==NULL){
				$this->bdd = new PDO("mysql:host=localhost; dbname=etablissement; charset=utf8", "root", "");
			}
			return $this->bdd;
		}
		
		//Execute une requete SQL éventuellement paramétré [insert, updte, delete]
		public function executerRequete($query="", $params=NULL){
			if($params==NULL){
				$resultat = $this->connexBdd()->exec($query);//execution directe
				if($resultat){
					return true;
				}
			}else{
				$resultat = $this->connexBdd()->prepare($query);//requete preparée
				$resultat->execute($params);
				if($resultat){
					return true;
				}
			}
		}
		
		public function insertData($query=""){
			$insert = $this->connexBdd()->exec($query);
			if($insert){
				//retourne l'identifiant de la dernière enregistrement
				return $this->connexBdd()->lastInsertId();
			}
		}
		
		//selection des donnése
		public function selectData($query=""){
			$select = $this->connexBdd()->query($query);
			if($select){
				//retourne la dernière id entré
				//return $this->connexBdd()->lastInsertId();
				//@return object
				return $select;
			}
		}
	}
?>
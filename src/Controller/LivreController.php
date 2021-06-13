<?php

namespace src\Controller;

use src\Model\Livre;
use src\Model\BDD;
use src\Model\User;

class LivreController extends AbstractController
{

    public function index()
    {
        //En cas de problème, on redirige vers l'accueil
        echo "Accueil du site BIBLIOTHEQUE";
    }

    public function List(){
        $livre = new Livre();
        $livreList = $livre->SQLGetAll(BDD::getInstance());

        return $this->twig->render("accueil.html.twig",[
            "livreList" => $livreList
        ]);
    }

    public function ListAdmin(){
        $livre = new Livre();
        $livreList = $livre->SQLGetAll(BDD::getInstance());

        return $this->twig->render("listAdmin.html.twig",[
            "livreList" => $livreList
        ]);
    }

    public function GetOne($id){
            $livre = new Livre();
            $livreOne = $livre->SQLGetOne(BDD::getInstance(), $id);

        return $this->twig->render("detail_livre.html.twig",[
            "livre" => $livreOne
        ]);

            if (!$livre){
                header("location:/");
            }
    }

    public function AddBook(){
//        $admin = new User();
//        if (!$admin->CheckAdminUser()){
//            header("location:/");
//        }

        if(isset($_POST["titre"]) && isset($_POST["auteur"]) && isset($_POST["editeur"]) && isset($_POST["nb_pages"]) && isset($_POST["date_publication"]) && isset($_POST["livre_image"])) {
            $livre = new Livre();
            $livre->setTitre($_POST["titre"]);
            $livre->setAuteur($_POST["auteur"]);
            $livre->setEditeur($_POST["editeur"]);
            $livre->setNbPages($_POST["nb_pages"]);
            $livre->setDatePublication($_POST["date_publication"]);
            $livre->setLivreImage($_POST["livre_image"]);

            $response = $livre->SQLAddBook(BDD::getInstance());
            if ($response[0] == true){
                  header("location:/index.php?controller=Livre&action=List");
//                header("location:/?controller=Livre&action=List");
            } else {
                echo "Une erreur c'est produite : ${response}";
            }

        } else {
            return $this->twig->render("AddBook.html.twig");
        }

    }

    public function UpdateBook($id){
//        $admin = new User();
//        if (!$admin->CheckAdminUser()){
//            header("location:/");
//        }
        $livre = new Livre();
        if(isset($_POST["titre"]) && isset($_POST["auteur"]) && isset($_POST["editeur"]) && isset($_POST["nb_pages"]) && isset($_POST["date_publication"]) && isset($_POST["livre_image"])) {

            $livre->setTitre($_POST["titre"]);
            $livre->setAuteur($_POST["auteur"]);
            $livre->setEditeur($_POST["editeur"]);
            $livre->setNbPages($_POST["nb_pages"]);
            $livre->setDatePublication($_POST["date_publication"]);
            $livre->setLivreImage($_POST["livre_image"]);

            $response = $livre->SQLUpdateBook(BDD::getInstance(), $id);
            if ($response[0]){
                echo "$response[1]";
            } else {
                echo "Une erreur c'est produite : ${response[1]}";
            }
        } else {
            $livre = $livre->SQLGetOne(BDD::getInstance(), $id);

            return $this->twig->render("updateBook.html.twig",[
                "livre" => $livre
            ]);
        }

    }

    public function DeleteBook($id){
//        $admin = new User();
//        if (!$admin->CheckAdminUser()){
//            header("location:/");

        $livre = new Livre();
        $response = $livre->SQLDeleteBook(BDD::getInstance(), $id);
        if ($response[0]){
//        echo "$response[1]";
             header("location:/index.php");

        } else {
             echo "Une erreur c'est produite : ${response[1]}";
        }
        }
        }
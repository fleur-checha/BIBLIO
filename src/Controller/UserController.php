<?php

namespace src\Controller;

use src\Model\Livre;
use src\Model\BDD;
use src\Model\User;
use Twig\Error\LoaderError;

class UserController extends AbstractController
{

    public function index()
    {
        //En cas de problème, on redirige vers l'accueil
        return $this->twig->render("accueil.html.twig");
    }

    //Fonction Login
    public function LoginUser(){
        if (isset($_POST["mail"])){
            //Si tentative de connexion
            $val = new User();
            $val->setMail($_POST["mail"]);
            $val->setPassword($_POST["password"]);

            $response = $val->SQLLoginUser(BDD::getInstance());
            if ($response[0]){
//                echo $response[0];
//                echo $response[1];
                $_SESSION["mail"] = $val->getMail();
                $_SESSION["id_user"] = $val->getIdUser();
                $_SESSION["role"] = $val->getRole();

                header("location:/");

            } else {
                echo "Une erreur c'est produite : ${response[1]}";
            }

        } elseif(isset($_SESSION["mail"]) && empty($_SESSION["mail"]) == false) {
            //Si l'utilisateur est déjà connecté, on le renvoie vers l'accueil
            try {
                //echo $this->twig->render("base.html.twig", []);
                header("location:/");
            } catch (Exception $e) {
                echo $e->getMessage();
            }
        } else {
            //Si pas connecté
            try {
                return $this->twig->render("user/connexion.html.twig", []);
            } catch (LoaderError $e) {
                return $e->getMessage();
            }
        }
    }
    //Fonction de déconnexion
    public function LogoutUser(){
        if (empty($_SESSION["mail"]) == false) {
            if (session_destroy()){
                header("location:/");
            } else {
                echo "<h1>Une erreur c'est produite lors de la déconnexion, veuillez réesayer</h1>";
            };
        } else {
            header("location:/");
        }
    }

    //Fonction Ajout
    public function AddUser(){
        //On vérifie si l'utilisateur est déjà connecté, si c'est le cas, on le redirige vers l'accueil
        if (isset($_SESSION["id"])){
            header("location:/");
        }

        //Si l'utilisateur à envoyer le formulaire
        if (isset($_POST["mail"]) && isset($_POST["password"])) {
            //On défini le nom d'utilisateur et le mail
            $val = new User();
            $val->setMail($_POST["mail"]);
            $val->setPassword($_POST["password"]);

            //Verifie si les passwords sont bien identiques
            if ($_POST["password"] != $_POST["passwordCheck"]){
                echo '<script> alert("Les mots de passe ne correspondent pas !") </script>';
                return $this->twig->render("user/inscription.html.twig");
                exit();
            }

            //Vérifie si les mails sont bien identiques
            if ($_POST["mail"] != $_POST["mailCheck"]) {
                echo '<script> alert("Les adresses mails ne correspondent pas !") </script>';
                return $this->twig->render("user/inscription.html.twig");
                exit();
            }
//            header("location:/index.php");TODO // FAIRE LA REDIRECTION

            //Si toutes les vérifications sont OK
            $val->setPassword(password_hash($_POST["password"], PASSWORD_BCRYPT, ["cost" => 10]));
            $val->setMail($_POST["mail"]);

            $response = $val->SQLAddUser(BDD::getInstance());
            if ($response[0]) {
//                echo "Inscription réussi";
//                header("location:/");
                return $this->twig->render("accueil.html.twig");
            } else {
                echo "Une erreur c'est produite : ${response}";
            }
        } else {
            return $this->twig->render("user/inscription.html.twig");
        }
    }

//
//                //Paramètres du send mail
//                $to_email= $val->getUserMAIL();
//                $subject = "Bienvenue sur DevFlix !";
//                $body = "<html>
//                            <body>
//                                <h1>Toutes l'équipe de DevFlix vous souhaite la bienvenue sur notre site !</h1>
//                                Vous pouvez à présent commenter, noter et partager vos films préférés. <br><br>
//                                Retrouvez nous vite sur notre site <a href='http://devflix.local'>DevFlix</a>
//                            </body>
//                        </html>";
//                $headers = "From: devflix.cesi@gmail.com\r\n";
//                $headers .= "MINE-Version: 1.0\r\n";
//                $headers .= "Content-Type: text/html; charset=utf-8\r\n";
//
//                //Envoi du mail de bienvenue
//                $this->sendmail($to_email, $subject, $body, $headers);
//
//                header("location:/");
//
//            } else if($response[1] == "PSEUDO_DOUBLON"){
//                try {
//                    echo $this->twig->render("User/AddUser.html.twig", [
//                        "Email" => $_POST["Email"]
//                    ]);
//                } catch (LoaderError $e) {
//                    echo $e->getMessage();
//                }
//
//                echo '<script > alert("le nom d\'utilisateur est déjà utilisé") </script>';
//
//            } else if($response[1] == "MAIL_DOUBLON"){
//                try {
//                    echo $this->twig->render("User/AddUser.html.twig", [
//                        "Pseudo"=> $_POST["Pseudo"]
//                    ]);
//                } catch (LoaderError $e) {
//                    echo $e->getMessage();
//                }
//                echo '<script > alert("L\'email est déjà utilisée") </script>';
//
//            } else {
//                echo "Une erreur c'est produite : ${response[1]}";
//                try {
//                    echo $this->twig->render("User/AddUser.html.twig", [
//                        "Pseudo"=> $_POST["Pseudo"]
//                    ]);
//                } catch (LoaderError $e) {
//                    echo $e->getMessage();
//                }
//            }
//        } else {
//            try {
//                echo $this->twig->render("User/AddUser.html.twig", []);
//
//            } catch (LoaderError $e) {
//                echo $e->getMessage();
//            }
        }


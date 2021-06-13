<?php


namespace src\Model;


class User
{
    //Variables
    private string $id_user;
    private string $mail;
    private string $password;
    private string $role;

//    //Fonction qui vérifie si l'utilisateur est administrateur
//    public function CheckAdminUser() : bool{
//        if (isset($_SESSION["role"]) AND ($_SESSION["role"])){
//            return true;
//        } else return false;
//    }
//Fonction SQLAjout
    public function SQLAddUser(\PDO $bdd) : array{
        try{
//            $requetedoublon = $bdd->prepare("SELECT mail, password FROM t_user WHERE mail=:mail);
//            $requetedoublon->execute([
//                "mail" => $this->getMail()
//            ]);
//
//            $data = $requetedoublon->fetch(\PDO::FETCH_ASSOC);
//            if (empty($data) == false && $data["mail"] == $this->getMail()){
//                return [false, "MAIL_DOUBLON"];
//
//            } else {
                $requete = $bdd->prepare("INSERT INTO t_user (mail, password) VALUES (:mail, :password)");
                $requete->execute([
                    "mail" => $this->getMail(),
                    "password" => $this->getPassword(),
                ]);

                return [true,"Inscription réussie !"];
//            }

        } catch (\Exception $e) {
            return [false,$e->getMessage()];
        }
    }

    //Fonction SQLLogin
    public function SQLLoginUser(\PDO $bdd) : array{
        try{
            sleep(1);

            $requete = $bdd->prepare("SELECT * FROM t_user WHERE mail=:mail");
            $requete->execute([
                "mail" => $this->getMail()
            ]);

            $data = $requete->fetch(\PDO::FETCH_ASSOC);

            if (password_verify($this->getPassword(),trim($data["password"]))){
                //Si tous se passe bien return True
                $this->setIdUser($data["id_user"]);
                if ($data["role"] == "1"){
                    $this->setRole(true);
                } else {
                    $this->setRole(false);
                }
                return [true,"Connexion réussie !"];

            } else {
                return [false,"Utilisateur ou mot de passe incorrect"];
            }

        }catch (\Exception $e){
            return [false,"Une erreur c'est produite : ".$e->getMessage()];
        }
    }


    /**
     * @return string
     */
    public function getIdUser(): string
    {
        return $this->id_user;
    }

    /**
     * @param string $id_user
     */
    public function setIdUser(string $id_user): void
    {
        $this->id_user = $id_user;
    }

    /**
     * @return string
     */
    public function getMail(): string
    {
        return $this->mail;
    }

    /**
     * @param string $mail
     */
    public function setMail(string $mail): void
    {
        $this->mail = $mail;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getRole(): string
    {
        return $this->role;
    }

    /**
     * @param string $role
     */
    public function setRole(string $role): void
    {
        $this->role = $role;
    }



}
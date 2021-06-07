<?php


namespace src\Model;


class Livre
{
    private Int $id;
    private String $Titre;
    private String $Auteur;
    private String $Editeur;
    private Int $Nb_pages;
    private String $Date_publication; //Datetime
    private String $Livre_image;

    public function SQLGetAll(\PDO $bdd)
    {
        $requete = $bdd->prepare("SELECT * FROM t_livres");
        $requete->execute();
        return $requete->fetchAll(\PDO::FETCH_CLASS, "src\Model\Livre");
    }

    public function SQLGetOne(\PDO $bdd, $id) {
        $requete = $bdd->prepare("SELECT * FROM t_livres WHERE id=:ID");
        $requete->execute([
            "ID" => $id
        ]);
        return $requete->fetch();
    }

    public function SQLAddBook(\PDO $bdd) : array{

        try{
            $requete = $bdd->prepare("INSERT INTO t_livres (titre, auteur, editeur, nb_pages, date_publication, livre_image) VALUES(:titre, :auteur, :editeur, :nb_pages, :date_publication, :livre_image)");
            $requete->execute([
                "titre" => $this->getTitre(),
                "auteur" => $this->getAuteur(),
                "editeur" => $this->getEditeur(),
                "nb_pages" => $this->getNbPages(),
                "date_publication" => $this->getDatePublication(),
                "livre_image" => $this->getLivreImage()
            ]);

            //Si tous se passe bien return True
            return [true,"Ajout de votre livre effectué"];

        } catch (\Exception $e) {
            return [false,$e->getMessage()];
        }
    }
    public function SQLUpdateBook(\PDO $bdd, $id) : array
    {
        try{
            $requete = $bdd->prepare("UPDATE t_livres SET titre=:titre, auteur=:auteur, editeur=:editeur, nb_pages=:nb_pages, date_publication=:date_publication, livre_image=:livre_image WHERE id=:ID");

            $reponse = $requete->execute([
                "ID" => $id,
                "titre" => $this->getTitre(),
                "auteur" => $this->getAuteur(),
                "editeur" => $this->getEditeur(),
                "nb_pages" => $this->getNbPages(),
                "date_publication" => $this->getDatePublication(),
                "livre_image" => $this->getLivreImage(),
            ]);
            //Si tous se passe bien return True
            return [true,"Modification du livre réussie !"];

        } catch (\Exception $e) {
            return [false,$e->getMessage()];
        }
    }
    public function SQLDeleteBook(\PDO $bdd, $id) : array
    {
        try{
            $requete = $bdd->prepare("DELETE FROM t_livres WHERE id=:ID");
            $requete->execute([
                "ID" => $id,
            ]);
            //Si tous se passe bien return True
            return [true,"Supression réalisée avec succès !"];

        } catch (\Exception $e) {
            return [false,$e->getMessage()];
        }
    }

    /**
     * @return Int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param Int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return String
     */
    public function getTitre(): string
    {
        return $this->Titre;
    }

    /**
     * @param String $Titre
     */
    public function setTitre(string $Titre): void
    {
        $this->Titre = $Titre;
    }

    /**
     * @return String
     */
    public function getAuteur(): string
    {
        return $this->Auteur;
    }

    /**
     * @param String $Auteur
     */
    public function setAuteur(string $Auteur): void
    {
        $this->Auteur = $Auteur;
    }

    /**
     * @return String
     */
    public function getEditeur(): string
    {
        return $this->Editeur;
    }

    /**
     * @param String $Editeur
     */
    public function setEditeur(string $Editeur): void
    {
        $this->Editeur = $Editeur;
    }

    /**
     * @return Int
     */
    public function getNbPages(): int
    {
        return $this->Nb_pages;
    }

    /**
     * @param Int $Nb_pages
     */
    public function setNbPages(int $Nb_pages): void
    {
        $this->Nb_pages = $Nb_pages;
    }

    /**
     * @return String
     */
    public function getDatePublication(): string
    {
        return $this->Date_publication;
    }

    /**
     * @param String $Date_publication
     */
    public function setDatePublication(string $Date_publication): void
    {
        $this->Date_publication = $Date_publication;
    }

    /**
     * @return String
     */
    public function getLivreImage(): string
    {
        return $this->Livre_image;
    }

    /**
     * @param String $Livre_image
     */
    public function setLivreImage(string $Livre_image): void
    {
        $this->Livre_image = $Livre_image;
    }

}
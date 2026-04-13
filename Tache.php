<?php
 
class Tache {
    private int $id;
    private string $titre;
    private string $description;
    private bool $estFait;
    private DateTime $dateLimite;

    public function getId():int
    {
        return $this->id;
    }

    public function getTitre():string
    {
        return $this->titre;
    }
    public function setTitre(string $titre):void
    {
        $this->titre = $titre;
    }

    public function getDescription():string
    {
        return $this->description;
    }
    public function setDescription(string $description):void
    {
        $this->description = $description;
    }

    public function getEstFait():bool
    {
        return $this->estFait;
    }
    public function setEstFait():void
    {
        $this->estFait = true;
    }

    public function getDateLimite():DateTime
    {
        return $this->dateLimite;
    }
    public function setDateLimite(DateTime $dateLimite)
    {
        $this->dateLimite = $dateLimite;
    }

    public function __construct(int $id, string $titre, string $description, DateTime $dateLimite)
    {
        $this->id = $id;
        $this->titre = $titre;
        $this->description = $description;
        $this->dateLimite = $dateLimite;
        $this->estFait = false;  // false par défaut
    }

}
?>
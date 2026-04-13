<?php 
require_once "Tache.php";

class Gestionnaire
{
    // Liste pour la classe Tache
    private array $mesTaches = [];
    private int $idIncrement = 1;

    public function getMesTaches():array
    {
        return $this->mesTaches;
    }

    public function creerTache(string $titre, string $description, DateTime $dateLimite):void
    {
        $maTache = new Tache($this->idIncrement++, $titre, $description, $dateLimite);
        $this->mesTaches[] = $maTache;
    }

    public function supprimerTache(int $id):void
    {
        foreach ($this->mesTaches as $k => $tache)
        {
            if ($tache->getId() === $id)
            {
                unset($this->mesTaches[$k]);
                $this->mesTaches = array_values($this->mesTaches); // Pour remettre les indexes dans l'ordre après l'utilisation de unset()

                return;
            }
        }
    }

    public function tacheFaite(int $id):bool
    {
        foreach ($this->mesTaches as $tache)
        {
            if ($tache->getId() === $id)
            {
                $tache->setEstFait();
                return true;
            }
        }
        return false;
    }
    
}
?>
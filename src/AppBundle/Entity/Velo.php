<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Velo
 *
 * @ORM\Table(name="velo")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\VeloRepository")
 */
class Velo
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="proprio_id", type="integer")
     */
    private $proprioId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="marque", type="string", length=50, nullable=true)
     */
    private $marque;

    /**
     * @var string|null
     *
     * @ORM\Column(name="modele", type="string", length=50, nullable=true)
     */
    private $modele;

    /**
     * @var int|null
     *
     * @ORM\Column(name="type_velo_id", type="integer", nullable=true)
     */
    private $typeVeloId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="couleur_id", type="integer", nullable=true)
     */
    private $couleurId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="titre", type="string", length=35, nullable=true)
     */
    private $titre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var int|null
     *
     * @ORM\Column(name="etat_velo_id", type="integer", nullable=true)
     */
    private $etatVeloId;

    /**
     * @var bool
     *
     * @ORM\Column(name="neuf", type="boolean")
     */
    private $neuf;

    /**
     * @var string|null
     *
     * @ORM\Column(name="num_facture", type="string", length=255, nullable=true)
     */
    private $numFacture;

    /**
     * @var string|null
     *
     * @ORM\Column(name="magasin", type="string", length=255, nullable=true)
     */
    private $magasin;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_achat", type="date", nullable=true)
     */
    private $dateAchat;

    /**
     * @var int
     *
     * @ORM\Column(name="antivol_key", type="integer")
     */
    private $antivolKey;

    /**
     * @var int
     *
     * @ORM\Column(name="antivol_code", type="integer")
     */
    private $antivolCode;

    /**
     * @var int|null
     *
     * @ORM\Column(name="bicycode", type="integer", nullable=true)
     */
    private $bicycode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="adresse_velo", type="string", length=255, nullable=true)
     */
    private $adresseVelo;

    /**
     * @var int|null
     *
     * @ORM\Column(name="caution", type="integer", nullable=true)
     */
    private $caution;

    /**
     * @var bool
     *
     * @ORM\Column(name="assur_oblig", type="boolean")
     */
    private $assurOblig;

    /**
     * @var int
     *
     * @ORM\Column(name="cout_pts", type="integer")
     */
    private $coutPts;

    /**
     * @var bool
     *
     * @ORM\Column(name="dispo_totale", type="boolean")
     */
    private $dispoTotale;


    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set proprioId.
     *
     * @param int $proprioId
     *
     * @return Velo
     */
    public function setProprioId($proprioId)
    {
        $this->proprioId = $proprioId;

        return $this;
    }

    /**
     * Get proprioId.
     *
     * @return int
     */
    public function getProprioId()
    {
        return $this->proprioId;
    }

    /**
     * Set marque.
     *
     * @param string $marque
     *
     * @return Velo
     */
    public function setMarque($marque)
    {
        $this->marque = $marque;

        return $this;
    }

    /**
     * Get marque.
     *
     * @return string
     */
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * Set modele.
     *
     * @param string|null $modele
     *
     * @return Velo
     */
    public function setModele($modele = null)
    {
        $this->modele = $modele;

        return $this;
    }

    /**
     * Get modele.
     *
     * @return string|null
     */
    public function getModele()
    {
        return $this->modele;
    }

    /**
     * Set typeVeloId.
     *
     * @param int|null $typeVeloId
     *
     * @return Velo
     */
    public function setTypeVeloId($typeVeloId = null)
    {
        $this->typeVeloId = $typeVeloId;

        return $this;
    }

    /**
     * Get typeVeloId.
     *
     * @return int|null
     */
    public function getTypeVeloId()
    {
        return $this->typeVeloId;
    }

    /**
     * Set couleurId.
     *
     * @param int|null $couleurId
     *
     * @return Velo
     */
    public function setCouleurId($couleurId = null)
    {
        $this->couleurId = $couleurId;

        return $this;
    }

    /**
     * Get couleurId.
     *
     * @return int|null
     */
    public function getCouleurId()
    {
        return $this->couleurId;
    }

    /**
     * Set titre.
     *
     * @param string|null $titre
     *
     * @return Velo
     */
    public function setTitre($titre = null)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre.
     *
     * @return string|null
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set description.
     *
     * @param string|null $description
     *
     * @return Velo
     */
    public function setDescription($description = null)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description.
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set etatVeloId.
     *
     * @param int|null $etatVeloId
     *
     * @return Velo
     */
    public function setEtatVeloId($etatVeloId = null)
    {
        $this->etatVeloId = $etatVeloId;

        return $this;
    }

    /**
     * Get etatVeloId.
     *
     * @return int|null
     */
    public function getEtatVeloId()
    {
        return $this->etatVeloId;
    }

    /**
     * Set neuf.
     *
     * @param bool $neuf
     *
     * @return Velo
     */
    public function setNeuf($neuf)
    {
        $this->neuf = $neuf;

        return $this;
    }

    /**
     * Get neuf.
     *
     * @return bool
     */
    public function getNeuf()
    {
        return $this->neuf;
    }

    /**
     * Set numFacture.
     *
     * @param string|null $numFacture
     *
     * @return Velo
     */
    public function setNumFacture($numFacture = null)
    {
        $this->numFacture = $numFacture;

        return $this;
    }

    /**
     * Get numFacture.
     *
     * @return string|null
     */
    public function getNumFacture()
    {
        return $this->numFacture;
    }

    /**
     * Set magasin.
     *
     * @param string|null $magasin
     *
     * @return Velo
     */
    public function setMagasin($magasin = null)
    {
        $this->magasin = $magasin;

        return $this;
    }

    /**
     * Get magasin.
     *
     * @return string|null
     */
    public function getMagasin()
    {
        return $this->magasin;
    }

    /**
     * Set dateAchat.
     *
     * @param \DateTime|null $dateAchat
     *
     * @return Velo
     */
    public function setDateAchat($dateAchat = null)
    {
        $this->dateAchat = $dateAchat;

        return $this;
    }

    /**
     * Get dateAchat.
     *
     * @return \DateTime|null
     */
    public function getDateAchat()
    {
        return $this->dateAchat;
    }

    /**
     * Set antivolKey.
     *
     * @param int $antivolKey
     *
     * @return Velo
     */
    public function setAntivolKey($antivolKey)
    {
        $this->antivolKey = $antivolKey;

        return $this;
    }

    /**
     * Get antivolKey.
     *
     * @return int
     */
    public function getAntivolKey()
    {
        return $this->antivolKey;
    }

    /**
     * Set antivolCode.
     *
     * @param int $antivolCode
     *
     * @return Velo
     */
    public function setAntivolCode($antivolCode)
    {
        $this->antivolCode = $antivolCode;

        return $this;
    }

    /**
     * Get antivolCode.
     *
     * @return int
     */
    public function getAntivolCode()
    {
        return $this->antivolCode;
    }

    /**
     * Set bicycode.
     *
     * @param int|null $bicycode
     *
     * @return Velo
     */
    public function setBicycode($bicycode = null)
    {
        $this->bicycode = $bicycode;

        return $this;
    }

    /**
     * Get bicycode.
     *
     * @return int|null
     */
    public function getBicycode()
    {
        return $this->bicycode;
    }

    /**
     * Set adresseVelo.
     *
     * @param string|null $adresseVelo
     *
     * @return Velo
     */
    public function setAdresseVelo($adresseVelo = null)
    {
        $this->adresseVelo = $adresseVelo;

        return $this;
    }

    /**
     * Get adresseVelo.
     *
     * @return string|null
     */
    public function getAdresseVelo()
    {
        return $this->adresseVelo;
    }

    /**
     * Set caution.
     *
     * @param int|null $caution
     *
     * @return Velo
     */
    public function setCaution($caution = null)
    {
        $this->caution = $caution;

        return $this;
    }

    /**
     * Get caution.
     *
     * @return int|null
     */
    public function getCaution()
    {
        return $this->caution;
    }

    /**
     * Set assurOblig.
     *
     * @param bool $assurOblig
     *
     * @return Velo
     */
    public function setAssurOblig($assurOblig)
    {
        $this->assurOblig = $assurOblig;

        return $this;
    }

    /**
     * Get assurOblig.
     *
     * @return bool
     */
    public function getAssurOblig()
    {
        return $this->assurOblig;
    }

    /**
     * Set coutPts.
     *
     * @param int $coutPts
     *
     * @return Velo
     */
    public function setCoutPts($coutPts)
    {
        $this->coutPts = $coutPts;

        return $this;
    }

    /**
     * Get coutPts.
     *
     * @return int
     */
    public function getCoutPts()
    {
        return $this->coutPts;
    }

    /**
     * Set dispoTotale.
     *
     * @param bool $dispoTotale
     *
     * @return Velo
     */
    public function setDispoTotale($dispoTotale)
    {
        $this->dispoTotale = $dispoTotale;

        return $this;
    }

    /**
     * Get dispoTotale.
     *
     * @return bool
     */
    public function getDispoTotale()
    {
        return $this->dispoTotale;
    }
}
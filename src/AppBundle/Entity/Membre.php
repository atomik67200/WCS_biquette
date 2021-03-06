<?php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\File;

/**
 * membre
 * @Vich\Uploadable
 * @ORM\Table(name="membre")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MembreRepository")
 */
class Membre extends BaseUser
{

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;


    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Velo", mappedBy="proprio",cascade={"persist", "remove"})
     */
    private $velos;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $image;

    /**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     *
     * @Vich\UploadableField(mapping="velo_image", fileNameProperty="image")
     *
     * @var File
     * @Assert\File(
     *     maxSize = "5M",
     *     maxSizeMessage="Votre fichier est trop volumineux, veuillez charger un fichier plus petit",
     *     mimeTypes = {"image/jpg", "image/jpeg", "image/png"},
     *     mimeTypesMessage = "Veuillez télécharger un fichier au format .jpg ou .png"
     * )
     *
     */
    protected $imageFile;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     * @var \DateTime
     */
    private $updatedAt;


    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Reservation", mappedBy="locataire",cascade={"persist", "remove"})
     */
    private $reservations;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_mangopay", type="integer", nullable=true)
     */
    private $idMangopay;

    /**
     * @var string|null
     *
     * @ORM\Column(name="id_bankaccount", type="string", nullable=true)
     */
    private $idBankAccount;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_wallet", type="integer", nullable=true)
     */
    private $idWallet;

    /**
     * @var string|null
     *
     * @ORM\Column(name="id_facebook", type="string", length=255, nullable=true)
     */
    private $idFacebook;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=45, nullable=true)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=70, nullable=true)
     */
    private $nom;

//    /**
//     * @var string
//     *
//     * @ORM\Column(name="password", type="string", length=255, nullable=true)
//     */
//    protected $password;
//
//    /**
//     * @var string
//     *
//     * @ORM\Column(name="email", type="string", length=255)
//     */
//    protected $email;

    /**
     * @var int|null
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Genre")
     * @ORM\JoinColumn(nullable=true)
     */
    private $genre;



    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_inscription", type="datetime", options={"default"="CURRENT_TIMESTAMP"})
     */
    private $dateInscription;

    /**
     * @var int
     *
     * @ORM\Column(name="nb_velo_emprunte", type="integer", options={"default"=0})
     */
    private $nbVeloEmprunte=0;

    /**
     * @var int
     *
     * @ORM\Column(name="nb_velo_prete", type="integer", options={"default"=0})
     */
    private $nbVeloPrete=0;

    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Pays")
     * @ORM\JoinColumn(nullable=true)
     */
    private $pays;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=255, nullable=true)
     */
    private $ville;

    /**
     * @var int|0
     *
     * @ORM\Column(name="code_postal", type="integer",nullable=true)
     */
    private $codePostal;

    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\LocTel")
     * @ORM\JoinColumn(nullable=true)
     */
    private $indicTel;

    /**
     * @var int
     *
     * @ORM\Column(name="tel", type="integer", nullable=true)
     * @Assert\Regex(pattern="/[1-9][0-9]{8}/", match=true, message="Veuillez rentrer un numéro au format 10000000000")
     */
    private $tel;

    /**
     * @var bool
     *
     * @ORM\Column(name="tel_public", type="boolean", options={"default"=0})
     */
    private $telPublic=0;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_naissance", type="date", nullable=true)
     */
    private $dateNaissance;

    /**
     * @var bool|false
     *
     * @ORM\Column(name="membre_verifie", type="boolean", options={"default"=0})
     */
        private $membreVerifie=0;

    /**
     * @var string
     *
     * @ORM\Column(name="key_mdp", type="string", length=255, nullable = true)
     */
    private $keyMdp;

    /**
     * @var int
     *
     * @ORM\Column(name="points", type="integer", options={"default"=0})
     */
    private $points=0;

    /**
     * @var bool
     *
     * @ORM\Column(name="profil_completed", type="boolean", options={"default"=0})
     */
    private $profilCompleted = 0;

    /**
     * @var bool
     *
     * @ORM\Column(name="first_velo_completed", type="boolean", options={"default"=0})
     */
    private $firstVeloCompleted = 0;


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
     * Set idMangopay.
     *
     * @param int|null $idMangopay
     *
     * @return Membre
     */
    public function setIdMangopay($idMangopay = null)
    {
        $this->idMangopay = $idMangopay;

        return $this;
    }

    /**
     * Get idMangopay.
     *
     * @return int|null
     */
    public function getIdMangopay()
    {
        return $this->idMangopay;
    }

    /**
     * Set idWallet.
     *
     * @param int|null $idWallet
     *
     * @return Membre
     */
    public function setIdWallet($idWallet = null)
    {
        $this->idWallet = $idWallet;

        return $this;
    }

    /**
     * Get idWallet.
     *
     * @return int|null
     */
    public function getIdWallet()
    {
        return $this->idWallet;
    }

    /**
     * Set idFacebook.
     *
     * @param int|null $idFacebook
     *
     * @return Membre
     */
    public function setIdFacebook($idFacebook = null)
    {
        $this->idFacebook = $idFacebook;

        return $this;
    }

    /**
     * Get idFacebook.
     *
     * @return int|null
     */
    public function getIdFacebook()
    {
        return $this->idFacebook;
    }


    /**
     * @return File
     */
    public function getImageFile ()
    {
        return $this->imageFile;
    }

    /**
     * @param File $imageFile
     */
    public function setImageFile ($imageFile)
    {
        $this->imageFile = $imageFile;

        // VERY IMPORTANT:
        // It is required that at least one field changes if you are using Doctrine,
        // otherwise the event listeners won't be called and the file is lost
        if ($imageFile) {
            // if 'updatedAt' is not defined in your entity, use another property
            $this->updatedAt = new \DateTime('now');
        }
    }


    /**
     * Set prenom.
     *
     * @param string $prenom
     *
     * @return Membre
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom.
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set nom.
     *
     * @param string $nom
     *
     * @return Membre
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom.
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set password.
     *
     * @param string $password
     *
     * @return Membre
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password.
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set email.
     *
     * @param string $email
     *
     * @return Membre
     */
    public function setEmail($email)
    {
        $this->email = $email;
        $this->username = $email;
        $this->usernameCanonical = $email;
        $this->emailCanonical = $email;

        return $this;
    }

    /**
     * Get email.
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set genreId.
     *x
     * @param int|null $genre
     *
     * @return Membre
     */
    public function setGenre($genre = null)
    {
        $this->genre = $genre;

        return $this;
    }

    /**
     * Get genreId.
     *
     * @return int|null
     */
    public function getGenre()
    {
        return $this->genre;
    }



    /**
     * Set dateInscription.
     *
     * @param \DateTime $dateInscription
     *
     * @return Membre
     */
    public function setDateInscription($dateInscription)
    {
        $this->dateInscription = $dateInscription;

        return $this;
    }

    /**
     * Get dateInscription.
     *
     * @return \DateTime
     */
    public function getDateInscription()
    {
        return $this->dateInscription;
    }

    /**
     * Set nbVeloEmprunte.
     *
     * @param int $nbVeloEmprunte
     *
     * @return Membre
     */
    public function setNbVeloEmprunte($nbVeloEmprunte)
    {
        $this->nbVeloEmprunte = $nbVeloEmprunte;

        return $this;
    }

    /**
     * Get nbVeloEmprunte.
     *
     * @return int
     */
    public function getNbVeloEmprunte()
    {
        return $this->nbVeloEmprunte;
    }

    /**
     * Set nbVeloPrete.
     *
     * @param int $nbVeloPrete
     *
     * @return Membre
     */
    public function setNbVeloPrete($nbVeloPrete)
    {
        $this->nbVeloPrete = $nbVeloPrete;

        return $this;
    }

    /**
     * Get nbVeloPrete.
     *
     * @return int
     */
    public function getNbVeloPrete()
    {
        return $this->nbVeloPrete;
    }

    /**
     * Set paysId.
     *
     * @param int $pays
     *
     * @return Membre
     */
    public function setPays($pays)
    {
        $this->pays = $pays;

        return $this;
    }

    /**
     * Get paysId.
     *
     * @return int
     */
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * Set ville.
     *
     * @param string $ville
     *
     * @return Membre
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville.
     *
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set coedPostal.
     *
     * @param string $codePostal
     *
     * @return Membre
     */
    public function setCodePostal($codePostal)
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    /**
     * Get coedPostal.
     *
     * @return string
     */
    public function getCodePostal()
    {
        return $this->codePostal;
    }

    /**
     * Set tel.
     *
     * @param int $tel
     *
     * @return Membre
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel.
     *
     * @return int
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set telPublic.
     *
     * @param bool $telPublic
     *
     * @return Membre
     */
    public function setTelPublic($telPublic)
    {
        $this->telPublic = $telPublic;

        return $this;
    }

    /**
     * Get telPublic.
     *
     * @return bool
     */
    public function getTelPublic()
    {
        return $this->telPublic;
    }

    /**
     * Set dateNaissance.
     *
     * @param \DateTime $dateNaissance
     *
     * @return Membre
     */
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    /**
     * Get dateNaissance.
     *
     * @return \DateTime
     */
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    /**
     * Set membreVerifie.
     *
     * @param bool $membreVerifie
     *
     * @return Membre
     */
    public function setMembreVerifie($membreVerifie)
    {
        $this->membreVerifie = $membreVerifie;

        return $this;
    }

    /**
     * Get membreVerifie.
     *
     * @return bool
     */
    public function getMembreVerifie()
    {
        return $this->membreVerifie;
    }

    /**
     * Set keyMdp.
     *
     * @param string $keyMdp
     *
     * @return Membre
     */
    public function setKeyMdp($keyMdp)
    {
        $this->keyMdp = $keyMdp;

        return $this;
    }

    /**
     * Get keyMdp.
     *
     * @return string
     */
    public function getKeyMdp()
    {
        return $this->keyMdp;
    }

    /**
     * Set points.
     *
     * @param int $points
     *
     * @return Membre
     */
    public function setPoints($points)
    {
        $this->points = $points;

        return $this;
    }

    /**
     * Get points.
     *
     * @return int
     */
    public function getPoints()
    {
        return $this->points;
    }

    /**
     * Set indicTel.
     *
     * @param \AppBundle\Entity\LocTel $indicTel
     *
     * @return Membre
     */
    public function setIndicTel(\AppBundle\Entity\LocTel $indicTel)
    {
        $this->indicTel = $indicTel;

        return $this;
    }

    /**
     * Get indicTel.
     *
     * @return \AppBundle\Entity\LocTel
     */
    public function getIndicTel()
    {
        return $this->indicTel;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->dateInscription = new \DateTime();
        $this->velos = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add velo.
     *
     * @param \AppBundle\Entity\Velo $velo
     *
     * @return Membre
     */
    public function addVelo(\AppBundle\Entity\Velo $velo)
    {
        $this->velos[] = $velo;

        return $this;
    }

    /**
     * Remove velo.
     *
     * @param \AppBundle\Entity\Velo $velo
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeVelo(\AppBundle\Entity\Velo $velo)
    {
        return $this->velos->removeElement($velo);
    }

    /**
     * Get velos.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getVelos()
    {
        return $this->velos;
    }

    public function afficheTel(){
        return "(".$this->getIndicTel()->getIndice().")".$this->tel;
    }

    /**
     * Add reservation.
     *
     * @param \AppBundle\Entity\Reservation $reservation
     *
     * @return Membre
     */
    public function addReservation(\AppBundle\Entity\Reservation $reservation)
    {
        $this->reservations[] = $reservation;

        return $this;
    }

    /**
     * Remove reservation.
     *
     * @param \AppBundle\Entity\Reservation $reservation
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeReservation(\AppBundle\Entity\Reservation $reservation)
    {
        return $this->reservations->removeElement($reservation);
    }

    /**
     * Get reservations.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getReservations()
    {
        return $this->reservations;
    }

    /**
     * Set profifCompleted.
     *
     * @param bool $profifCompleted
     *
     * @return Membre
     */
    public function setProfifCompleted($profifCompleted)
    {
        $this->profifCompleted = $profifCompleted;

        return $this;
    }

    /**
     * Get profifCompleted.
     *
     * @return bool
     */
    public function getProfifCompleted()
    {
        return $this->profifCompleted;
    }

    /**
     * Set firstVeloCompleted.
     *
     * @param bool $firstVeloCompleted
     *
     * @return Membre
     */
    public function setFirstVeloCompleted($firstVeloCompleted)
    {
        $this->firstVeloCompleted = $firstVeloCompleted;

        return $this;
    }

    /**
     * Get firstVeloCompleted.
     *
     * @return bool
     */
    public function getFirstVeloCompleted()
    {
        return $this->firstVeloCompleted;
    }

    /**
     * Set profilCompleted.
     *
     * @param bool $profilCompleted
     *
     * @return Membre
     */
    public function setProfilCompleted($profilCompleted)
    {
        $this->profilCompleted = $profilCompleted;

        return $this;
    }

    /**
     * Get profilCompleted.
     *
     * @return bool
     */
    public function getProfilCompleted()
    {
        return $this->profilCompleted;
    }

    /**
     * Set idBankAccount.
     *
     * @param int|null $idBankAccount
     *
     * @return Membre
     */
    public function setIdBankAccount($idBankAccount = null)
    {
        $this->idBankAccount = $idBankAccount;

        return $this;
    }

    /**
     * Get idBankAccount.
     *
     * @return int|null
     */
    public function getIdBankAccount()
    {
        return $this->idBankAccount;
    }

    /**
     * Set image.
     *
     * @param string|null $image
     *
     * @return Membre
     */
    public function setImage($image = null)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image.
     *
     * @return string|null
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set updatedAt.
     *
     * @param \DateTime|null $updatedAt
     *
     * @return Membre
     */
    public function setUpdatedAt($updatedAt = null)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt.
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }
}

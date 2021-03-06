<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EtatVelo
 *
 * @ORM\Table(name="etat_velo")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EtatVeloRepository")
 */
class EtatVelo
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
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=20)
     */
    private $etat;

    /**
     * @ORM\Column(name="coeff", type="float")
     */
    private $coeff;


    /**
     * @ORM\Column(name="coeffCaution", type="float")
     */
    private $coeffCaution;

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
     * Set etat.
     *
     * @param string $etat
     *
     * @return EtatVelo
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat.
     *
     * @return string
     */
    public function getEtat()
    {
        return $this->etat;
    }

    public function __toString()
    {
        return $this->etat;
    }

    /**
     * Set coeff.
     *
     * @param float $coeff
     *
     * @return EtatVelo
     */
    public function setCoeff($coeff)
    {
        $this->coeff = $coeff;

        return $this;
    }

    /**
     * Get coeff.
     *
     * @return float
     */
    public function getCoeff()
    {
        return $this->coeff;
    }

    /**
     * Set coeffCaution
     *
     * @param float $coeffCaution
     *
     * @return EtatVelo
     */
    public function setCoeffCaution($coeffCaution)
    {
        $this->coeffCaution = $coeffCaution;

        return $this;
    }

    /**
     * Get coeffCaution
     *
     * @return float
     */
    public function getCoeffCaution()
    {
        return $this->coeffCaution;
    }

}

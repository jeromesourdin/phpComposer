<?php
namespace FormationPHP\model;

class User
{
    private $id;
    private $email;
    private $identifiant;
    private $motdepasse;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     *
     * @return self
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdentifiant() : string
    {
        return $this->identifiant;
    }

    /**
     * @param mixed $identifiant
     *
     * @return self
     */
    public function setIdentifiant(string $identifiant)
    {
        $this->identifiant = $identifiant;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMotdepasse()
    {
        return $this->motdepasse;
    }

    /**
     * @param mixed $motdepasse
     *
     * @return self
     */
    public function setMotdepasse($motdepasse)
    {
        $this->motdepasse = $motdepasse;

        return $this;
    }
}
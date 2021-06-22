<?php

class User
{
    //! Properties

    /**
     * First Name of user.
     *
     * @var string
     */
    protected $firstName;
    /**
     * Last Name of user.
     *
     * @var string
     */
    protected $lastName;

    /**
     * Email of user.
     *
     * @var string
     */
    protected $email;

    /**
     * Password of user.
     *
     * @var string
     */
    protected $password;

    /**
     * Phone Number of user.
     *
     * @var string
     */
    protected $phoneNumber;

    //! Magic Methods

    public function __construct($firstName, $lastName, $email, $password, $phoneNumber)
    {
        $this->setFirstName($firstName);
        $this->setLastName($lastName);
        $this->setEmail($email);
        $this->setPassword($password);
        $this->setPhoneNumber($phoneNumber);
    }

    public function __toString()
    {

        return $this->getFullName();
    }

    //! Getters & Setters

    /**
     * Get first Name of user.
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    /**
     * Set first Name of user.
     *
     * @param string $firstName First Name of user
     */
    public function setFirstName(?string $firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get last Name of user.
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set last Name of user.
     *
     * @param string $lastName Last Name of user
     *
     * @return self
     */
    public function setLastName(?string $lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get email of user.
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set email of user.
     *
     * @param string $email Email of user
     *
     * @return self
     */
    public function setEmail(?string $email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get password of user.
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set password of user.
     *
     * @param string $password Password of user
     *
     * @return self
     */
    public function setPassword(?string $password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get phone Number of user.
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Set phone Number of user.
     *
     * @param string $phoneNumber Phone Number of user
     *
     * @return self
     */
    public function setPhoneNumber(?string $phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    //! Custom Methods

    public function getFullName()
    {
        return "{$this->firstName} {$this->lastName}";
    }

    public function identify()
    {
        $allInfos = "User is named {$this->getFullName()} , his email is {$this->email} and phone number is {$this->phoneNumber}";

        return $allInfos;
    }
}

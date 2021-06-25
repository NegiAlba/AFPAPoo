<?php

class User
{

    /**
     * Id of user in DB
     *
     * @var Int
     */
    private $id;

    /**
     * Email for user.
     *
     * @var string
     */
    private $email;

    /**
     * Password for user - hashed.
     *
     * @var string
     */
    private $password;

    /**
     * Nickname for user.
     *
     * @var string
     */
    private $username;

    public function __construct(array $data)
    {
        $this->hydrate($data);
    }

    public function hydrate(array $dataForObj)
    {
        foreach ($dataForObj as $key => $value) {
            $method = 'set'.ucfirst($key);

            if (method_exists($this, $method)) {
                $this->{$method}($value);
            }
        }
    }

    /**
     * Get email for user.
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * Set email for user.
     *
     * @param string $email Email for user
     *
     * @return self
     */
    public function setEmail(string $email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get password for user - hashed.
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set password for user - hashed.
     *
     * @param string $password Password for user - hashed
     *
     * @return self
     */
    public function setPassword(string $password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get nickname for user.
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set nickname for user.
     *
     * @param string $username Nickname for user
     *
     * @return self
     */
    public function setUsername(string $username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get id of user in DB
     *
     * @return  Int
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set id of user in DB
     *
     * @param  Int  $id  Id of user in DB
     *
     * @return  self
     */ 
    public function setId(Int $id)
    {
        $this->id = $id;

        return $this;
    }
}

<?php

class Admin extends User
{
    /**
     * Nick for admin users.
     *
     * @var string
     */
    private $nickname;

    /**
     * Get nick for admin users.
     *
     * @return string
     */
    public function getNickname()
    {
        return $this->nickname;
    }

    /**
     * Set nick for admin users.
     *
     * @param string $nickname Nick for admin users
     *
     * @return self
     */
    public function setNickname(string $nickname)
    {
        $this->nickname = $nickname;

        return $this;
    }

    public function identify()
    {
        $allInfos = "User is named {$this->getFullName()} , his email is {$this->email} and phone number is {$this->phoneNumber}";
        $adminInfos = 'User is an admin';

        // $allInfos = parent::identify();

        return "$allInfos $adminInfos";
    }
}

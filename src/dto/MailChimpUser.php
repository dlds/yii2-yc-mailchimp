<?php

namespace dlds\mailchimp\dto;

class MailChimpUser extends MailChimpBasicUser implements MailChimpUserInterface
{
    private $firstName;
    private $lastName;
    private $language;
    private $membershipGroups;

    public function __construct($email, $firstName, $lastName, $language, array $membershipGroups = null)
    {
        parent::__construct($email);
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->language = $language;
        $this->membershipGroups = $membershipGroups;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    public function getLanguage()
    {
        return $this->language;
    }

    public function setLanguage($language)
    {
        $this->language = $language;
    }

    public function getMembershipGroups()
    {
        return $this->membershipGroups;
    }

    public function setMembershipGroups(array $membershipGroups)
    {
        $this->membershipGroups = $membershipGroups;
    }
}

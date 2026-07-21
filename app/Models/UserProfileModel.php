<?php

class UserProfileModel extends z_model
{
    public function getProfiles(): array
    {
        $sql = "SELECT * FROM `userprofile`";

        return $this->exec($sql)->resultToArray();
    }
}

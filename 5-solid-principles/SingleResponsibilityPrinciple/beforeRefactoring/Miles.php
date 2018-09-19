<?php

/**
 * User: junade
 * Date: 19/02/2017
 * Time: 16:26
 */
class Miles
{
    public function render(): string
    {
        if (isset($_POST['distance'])) {
            return $this->getMiles();
        }

        return $this->getForm();
    }

    public function calculateMiles(int $distance, bool $businessClass, bool $flyingClubMember): int
    {
        $multiplier = 1;

        if ($businessClass === true) {
            $multiplier *= 2;
        }

        if ($flyingClubMember === true) {
            $multiplier *= 2;
        }

        return $distance * $multiplier;
    }

    private function getMiles(): string
    {
        $miles = $this->calculateMiles(
            $_POST['distance'],
            isset($_POST['businessclass']),
            isset($_POST['flyingclubmember'])
        );

        return $this->loadPage('<p>You have: <b>' . $miles . ' miles</b>.</p>');
    }

    private function getForm(): string
    {
        return $this->loadPage('
<form action="" method="POST">
  Distance:
  <input type="number" name="distance" min="0" step="1" />
  <br>
  Business Class Flyer:
  <input type="checkbox" name="businessclass"><br>
  Flying Club Member:
  <input type="checkbox" name="flyingclubmember">
  <br><br>
  <input type="submit" value="Submit">
</form>
        ');
    }

    private function loadPage(string $html): string
    {
        return '
<!DOCTYPE html>
<html>
  <body>
    ' . $html . '
  </body>
</html>
        ';
    }
}
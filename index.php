<?php
declare(strict_types=1);

class color
{
    private $red;
    private $green;
    private $blue;

    public function __construct(int $red, int $green, int $blue)
    {
        $this->red = $red;
        $this->green = $green;
        $this->blue = $blue;
    }

    public function getRed(): int
    {
        return $this->red;
    }

    public function getGreen(): int
    {
        return $this->green;
    }

    public function getBlue(): int
    {
        return $this->blue;
    }

    private function setRed(int $red): void
    {
        if ($red < 0 || $red > 255) {
            throw new Exception('Red is not correct');
        }

        $this->red = $red;
    }

    private function setBlue(int $blue): void
    {
        if ($blue < 0 || $blue > 255) {
            throw new Exception('Blue is npt correct');
        }

        $this->blue = $blue;
    }

    private function setGreen(int $green): void
    {
        if ($green < 0 || $green > 255) {
            throw new Exception('Green is not correct');
        }

        $this->green = $green;
    }

    public function mix(color $color)
    {
        return new color(($this->red + $color->getRed()) / 2, ($this->green + $color->getGreen()) / 2, ($this->blue + $color->getBlue()) / 2);
    }

    public static function rand(): color
    {
        return new color(rand(0, 255), rand(0, 255), rand(0, 255));
    }

    public function equals(color $color)
    {
        return $this->red === $color->getRed();
        return $this->blue === $color->getBlue();
        return $this->green === $color->getGreen();
    }
}

$color = new Color(200, 200, 200);
$mixedColor = $color->mix(new Color(100, 100, 100));
$mixedColor->getRed();
$mixedColor->getGreen();
$mixedColor->getBlue();

if (!$color->equals($mixedColor)) {
    echo 'Цвета не равны';
} else {
    echo 'Цвета равны';
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="background-color: rgb(<?= $mixedColor->getRed(); ?>,<?= $mixedColor->getBlue(); ?>, <?= $mixedColor->getGreen(); ?>)">

</body>
</html>

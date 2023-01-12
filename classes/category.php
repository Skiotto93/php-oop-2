<?php
require_once __DIR__ . "/../traits/nameItem.php";
class category {
    use nameItem;
    private $icon;

    public function __construct(string $name, string $icon)
    {
        $this->name = $name;
        $this->icon = $icon;
    }

    public function getIcon() {
        return $this->icon;
    }
}
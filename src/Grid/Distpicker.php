<?php

namespace luochuan\DcatDistpicker\Grid;

use Dcat\Admin\Grid\Displayers\AbstractDisplayer;
use luochuan\DcatDistpicker\DcatDistpickerHelper;

class Distpicker extends AbstractDisplayer
{
    public function display()
    {
        return DcatDistpickerHelper::getAreaName($this->value);
    }
}

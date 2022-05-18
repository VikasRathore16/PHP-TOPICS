<?php

namespace App\AbstractClasses;

use App\AbstractClasses\AbstractClass;

class Audi extends AbstractClass
{
  public function intro(): string
  {
    return "Choose German quality! I'm an $this->name!";
  }
}

<?php
namespace Clang;

class EmailBlockContainer {
  public $id; // long
  public $name; // string
  public $type; // string
  public $defaultBlockId; // long
  public $blocks; // ArrayOfEmailBlock
}

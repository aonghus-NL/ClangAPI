<?php
namespace Clang;

class SmsBlockContainer {
  public $id; // long
  public $name; // string
  public $type; // string
  public $defaultBlockId; // long
  public $blocks; // ArrayOfSmsBlock
}

<?php
namespace Clang;

class EmailBlockContainer {
  public int $id; // long
  public string $name; // string
  public string $type; // string
  public int $defaultBlockId; // long

  /**
   * @var EmailBlock[]
   */
  public array $blocks; // ArrayOfEmailBlock
}

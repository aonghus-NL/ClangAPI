<?php
namespace Clang;

class SmsBlockContainer {
  public int $id; // long
  public string $name; // string
  public string $type; // string
  public int $defaultBlockId; // long

  /**
   * @var SmsBlock[]
   */
  public array $blocks; // ArrayOfSmsBlock
}

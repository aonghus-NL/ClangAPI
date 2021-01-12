<?php
namespace Clang;

class EmailBlockContainer {

  /**
   * @var int
   */
  public $id;

  /**
   * @var string
   */
  public $name;

  /**
   * @var string
   */
  public string $type;

  /**
   * @var int
   */
  public $defaultBlockId;

  /**
   * @var EmailBlock[]
   */
  public $blocks;

}

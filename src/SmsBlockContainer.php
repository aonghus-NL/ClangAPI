<?php
namespace Clang;

class SmsBlockContainer {

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
  public $type;

  /**
   * @var int
   */
  public $defaultBlockId;

  /**
   * @var SmsBlock[]
   */
  public $blocks;

}

<?php
namespace Clang;

class Bounce {
  public int $id; // long
  public int $customerId; // long
  public int $mailingId; // long
  public string $bouncedAt; // string
  public string $rule; // string
  public string $category; // string
}

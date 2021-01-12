<?php
namespace Clang;

class Group {
  public int $id; // long
  public int $parentId; // long
  public string $name; // string
  public string $description; // string
  public string $createdBy; // string
  public string $createdAt; // string
  public string $modifiedBy; // string
  public string $modifiedAt; // string
  public string $countDate; // string
  public int $customerCountRecursive; // long
  public int $customerCount; // long
}

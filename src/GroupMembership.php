<?php
namespace Clang;

class GroupMembership {
  public int $groupId; // long
  public int $customerId; // long
  public bool $isMember; // boolean
  public string $startedAt; // string
}

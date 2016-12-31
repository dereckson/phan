<?php
/** @param iterable $p */
function f($p) {}
$traversable = new \ArrayIterator();
f($traversable);

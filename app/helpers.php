<?php



function unsetByKeys($keys, $fromArray)
{
  foreach ($keys as $key ) {
    unset($fromArray[$key]);
  }

  return $fromArray;
}

<?php

/**
 * Debug in Drupal is a pain in the ass.
 *
 * @see: http://code.google.com/p/phpquery/
 * @see: https://github.com/TobiaszCudnik/phpquery
 */

// This can be download at: http://code.google.com/p/phpquery/downloads/list
require_once 'phpQuery-onefile.php';

$markup = <<<EOT
<p>This is the 1st paragraph. It may be HTML.</p>
<hr/>
<p>This is the 2nd paragraph. It may be HTML.</p>
<hr/>
<p>This is the 3rd paragraph. It may be HTML.</p>
<hr/>
<p>This is the 4th paragraph. It may be HTML.</p>
<hr/>
<p>This is the 5th paragraph. It may be HTML.</p>
<hr/>
<p>This is the 6th paragraph. It may be HTML.</p>
<hr/>
<p>This is the 7th paragraph. It may be HTML.</p>
<hr/>
<p>This is the 8th paragraph. It may be HTML.</p>
EOT;

$pq = phpQuery::newDocument($markup);

// Get the totoal number of direct <p> elements
$p_el_num = count($pq['> p']->elements);

// Get all direct children
$children = $pq['> *'];

// Remove all the <hr> elements
foreach($children as $child) {
  if ($child->tagName == 'hr') {
    pq($child)->remove();
    continue;
  }
}

// Rebuild new markup
// $outter_div = phpQuery::newDocument('<div/>');
// $outter_div['div']->addClass('columns')->addClass($p_el_num . '-columns');


// Wrap all the <p> elements
$pq['> p']->wrapAll('<div class="columns '. $p_el_num .'-columns" />');

// Wrap each single <p> element


$i = 1;
foreach($pq['div > p'] as $child) {
  pq($child)->wrap('<div class="column column-' . $i .'" />');
  $i++;
}


print 'The result:' . "\n";
print '----------------------------------------------------------------' . "\n";
print $pq->htmlOuter();

This module provide an simple input filter (for Drupal 7) to help generate more theming friendly markup with less lines.

### Usage:

#### The input
```
<p>This is the first paragraph. It may be HTML.</p>
<hr/>
<p>This is the second paragraph. It may be HTML.</p>
```

### The output:
```
<div class="columns 2-columns">
  <div class="column column-1">
  <p>This is the first paragraph. It may be HTML.</p>
  </div>
  <div class="column column-2">
    <p>This is the second paragraph. It may be HTML.</p>
  </div>
</div>
```
<?php print "<?xml"; ?> version="1.0" encoding="utf-8" <?php print "?>"; ?>

<rss version="2.0" <?php print $variables['namespaces']; ?>>
  <channel>
    <?php print $variables['channel']; ?>
    <?php print $variables['rows']; ?>
  </channel>
</rss>
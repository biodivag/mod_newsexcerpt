<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_latest
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
defined('_JEXEC') or die;
?>
<ul class="newsexcerpt<?php echo $moduleclass_sfx; ?>">
    <?php foreach ($list as $item) : ?>
        <li itemscope itemtype="http://schema.org/Article">
                <?php echo $item->introtext; ?>
                <a href="<?php echo $item->link; ?>" itemprop="url">
                                <span itemprop="name">[mehr]</span></a>
        </li>

    <?php endforeach; ?>
</ul>

<?php namespace Anomaly\SeoBlockExtension;

use Anomaly\BlocksModule\Block\BlockExtension;
use Anomaly\Streams\Platform\Addon\Extension\Extension;

/**
 * Class SeoBlockExtension
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class SeoBlockExtension extends BlockExtension
{

    /**
     * This extension provides an SEO
     * block for the blocks module.
     *
     * @var null|string
     */
    protected $provides = 'anomaly.module.blocks::block.seo';

}

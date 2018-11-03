<?php namespace Anomaly\SeoBlockExtension;

use Anomaly\SeoBlockExtension\Listener\IncludeSeo;
use Anomaly\Streams\Platform\Addon\AddonServiceProvider;
use Anomaly\Streams\Platform\Event\Ready;
use Anomaly\Streams\Platform\Event\Response;
use Anomaly\Streams\Platform\View\Event\ViewComposed;
use Anomaly\Streams\Platform\View\ViewComposer;
use Anomaly\Streams\Platform\View\ViewIncludes;

/**
 * Class SeoBlockExtensionServiceProvider
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class SeoBlockExtensionServiceProvider extends AddonServiceProvider
{

    /**
     * Register the addon.
     *
     * @param ViewIncludes $includes
     */
    public function register(ViewIncludes $includes)
    {
        $includes->add('head', 'anomaly.extension.seo_block::facebook');
    }

}

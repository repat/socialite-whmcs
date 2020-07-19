<?php

namespace Repat\Whmcs;

use SocialiteProviders\Manager\SocialiteWasCalled;

class WhmcsExtendSocialite
{
    /**
     * Execute the provider.
     *
     * @param \SocialiteProviders\Manager\SocialiteWasCalled $socialiteWasCalled
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('whmcs', __NAMESPACE__.'\Provider');
    }
}

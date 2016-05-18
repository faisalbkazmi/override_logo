<?php
/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Excellence\Logo\Model;

interface ScopeInterface
{
    /**#@+
     * Scope types
     */
    const SCOPE_STORES = 'stores';

    const SCOPE_WEBSITES = 'websites';

    const SCOPE_STORE   = 'store';
    const SCOPE_GROUP   = 'group';
    const SCOPE_WEBSITE = 'website';
    /**#@-*/
}

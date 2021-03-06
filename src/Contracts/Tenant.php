<?php

namespace RomegaDigital\Multitenancy\Contracts;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;

interface Tenant
{
    /**
     * A Tenant belongs to many users.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function users(): BelongsToMany;

    /**
     * Find a Tenant by its domain.
     *
     * @param string $domain
     * @return Tenant
     *
     * @throws \RomegaDigital\Multitenancy\Exceptions\TenantDoesNotExist
     */
    public static function findByDomain(string $domain): self;
}

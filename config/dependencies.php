<?php

namespace ConductorSymfony4PlatformSupport;

return [
    'aliases' => [
        \ConductorAppOrchestration\Deploy\CodeDeploymentStateInterface::class => Deploy\CodeDeploymentState::class,
        # There seems to be no common maintenance strategy for Symfony 4
        # \ConductorAppOrchestration\Maintenance\MaintenanceStrategyInterface::class => AppMaintenanceStrategy::class,
    ],
];

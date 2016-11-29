<?php
/**
 * service('queues') : default handle for queue name phpfox in database.
 */
namespace Neutron\Messaging;

use Neutron\Log\LogContainerFactory;

return [
    'log.container' => [
        'jobs.log' => [
            [
                'driver'   => 'filesystem',
                'filename' => 'jobs.log',
            ],
        ],
    ],
    'job.handlers'  => [
        // class map
        'sample' => SampleJobHandler::class,
    ],
    'services'      => [
        'log.jobs'  => [LogContainerFactory::class, null,],
        'queues'    => [null, 'LocalQueueClass', 'queues'],
        'queues.01' => [null, 'AwsSQS', 'queue.01'],
    ],
];


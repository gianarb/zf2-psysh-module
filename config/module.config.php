<?php
return array(
    'psysh' => array(
        'enable' => true,
        'options' => array(
            'pager' => 'more',
            'historySize' => 0,
            'eraseDuplicates' => false,
            'usePcntl' => false,
            'useReadline' => false,
            'requireSemicolons' => false,
        )
    ),
    "service_manager" => array(
        "factories" => array(
            "psysh" => "PsyshModule\Service\PsyshServiceFactory"
        )
    )
);

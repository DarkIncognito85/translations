<?php
/**$
    Proxmox - en_GB
    CLIENTXCMS Translator system - Exported on 2023-06-27 01:56:52
    If you want to help you translate into your language, you can contact us via our support.
*/
return [
  'proxmox' => [
    'os' => 'Os',
    'template' => 'Template',
    'offline' => 'Offline',
    'online' => 'Online',
    'format' => 'Disk format',
    'size' => 'Disk size',
    'hostname' => 'Host',
    'memory' => 'Memory',
    'bwlimit' => 'Bandwidth',
    'console' => 'Console',
    'disk' => 'Disk space',
    'cores' => 'Cores',
    'cpuunits' => 'CPU',
    'net' => 'Net',
    'tasks' => 'Tasks',
    'uptime' => 'Uptime',
    'cpu' => 'CPU',
    'button' => 'Connection',
    'informations' => 'Information',
    'start' => 'Start',
    'stop' => 'Stop',
    'shutdown' => 'Power stop',
    'choosehostname' => 'Choose a custom hostname',
    'graph' => 'Graphics',
    'unlimited' => 'Unlimited',
    'panel' => [
      'problem' => 'You have a problem with the hosting ?',
      'openticket' => 'Open ticket!',
    ],
    'network' => [
      'title' => 'Network',
      'gw' => 'Gateway',
      'gw6' => 'v6 Gateway',
      'ip' => 'IP Address',
      'firewall' => 'Firewall',
      'mtu' => 'Maximum transfer unit of the interface',
      'ip6' => 'v6 IP Address',
      'name' => 'Name',
      'bridge' => 'Bridge',
      'hwaddr' => 'Mac Address',
      'type' => 'Type',
      'rate' => 'Rate',
      'link_down' => 'Disconnect',
      'virtio' => 'Virtio',
    ],
    'reboot' => 'Restart',
    'snapshots' => [
      'title' => 'Snapshots',
      'remaining' => 'You have %remaining% allowed snapshots.',
      'limit' => 'You have reached the maximum number of snapshots allowed.',
      'unauthorized' => 'You cannot make a snapshot',
      'success' => 'Snapshot saved.',
      'success2' => 'Snapshot deleted.',
      'success3' => 'Snapshot rollback.',
    ],
    'reinstall' => [
      'title' => 'Reinstall',
      'remaining' => 'You have %remaining% allowed reinstall.',
      'limit' => 'You have reached the maximum number of reinstall allowed.',
      'success' => 'Reinstall in progress.',
    ],
    'backups' => [
      'title' => 'Backups',
      'remaining' => 'You have %remaining% allowed backups.',
      'limit' => 'You have reached the maximum number of backup allowed.',
      'success' => 'Backup in progress.',
      'success2' => 'Backup deleted.',
      'success3' => 'Backup restored.',
      'unauthorized' => 'You cannot make a backup',
    ],
    'config' => [
      'title' => 'Proxmox',
      'subtitle' => 'Configure your proxmox offer here',
    ],
    'form' => [
      'title' => 'Proxmox Configuration',
      'block' => 'IP Block (ex: 123.223.134.XX/24)',
      'importertitle' => 'Block Importer',
      'range' => 'Range IP (Ex: 1-16)',
      'btn' => 'Import easily',
      'global' => [
        'title' => 'Global information',
      ],
      'restrictions' => [
        'title' => 'Restrictions',
        'snapshot' => 'Number of snapshots allowed',
        'reinstall' => 'Number of reinstall allowed',
        'backup' => 'Number of backups allowed',
        'nolimit' => '0 for unlimited',
        'unauthorized' => '0 to deactivate',
      ],
      'converter' => [
        'title' => 'Converter',
        'mb' => 'Enter your number in MB',
        'gb' => 'Enter your number in GB',
      ],
    ],
    'settings' => [
      'password' => 'Set random root password and send it on delivery',
      'lxcparams' => 'Add parameters on when adding networks to a CT',
      'lxcparamshelp' => 'Example : bridge=vmbr0,',
      'sshcommand' => 'Command executed when installing a VPS',
      'sshexecutehelp' => 'Variables are available. More information on our <a href="%link%">documentation</a>',
      'sshexecutehelp2' => 'If this command is empty, the configured command <a href="/admin/settings#proxmox">here</a> will be executed.',
    ],
    'admin' => [
      'ipaddress' => [
        'title' => 'IP configuration',
        'subtitle' => 'Manage the different IP addresses.',
        'used' => 'Used ?',
      ],
      'templates' => [
        'title' => 'Templates',
        'subtitle' => 'Manage the Proxmox templates',
      ],
      'oses' => [
        'title' => 'Oses',
        'subtitle' => 'Manage the Proxmox oses',
      ],
      'title' => 'Promox Configuration',
      'subtitle' => 'Manager offers configurations.',
      'productname' => 'Product name',
      'type' => 'Type',
    ],
  ],
];
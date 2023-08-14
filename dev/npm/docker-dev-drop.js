const fs = require('fs');
const ccr = require('./lib/command-chain-runner');

const package_json = JSON.parse(fs.readFileSync('package.json','utf8'));

const command_chain = [
    {
        // docker exec webserver /bin/bash -c "php -f /var/www/html/dev/docker/webserver/drop.php"
        command: 'docker',
        args: ['exec',package_json['docker-dev-container-prefix']+'webserver','/bin/bash','-c','"php -f /var/www/dev/docker/webserver/drop.php"']
    }
];

ccr.spawn(command_chain,0);

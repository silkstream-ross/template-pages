const fs = require('fs');
const ccr = require('./lib/command-chain-runner');

const package_json = JSON.parse(fs.readFileSync('package.json','utf8'));

const command_chain = [
    {
        // docker-compose down
        command: 'docker-compose',
        args: ['down']
    },
    {
        // docker-compose up --build -d
        command: 'docker-compose',
        args: ['up','--build','-d']
    },
    {
        // Windows: timeout /t 10
        // Linux/Mac: sleep 10
        command: 'sleep',
        args: 10000
    },
    {
        // docker exec webserver /bin/bash -c "setfacl -Rdm u:www-data:rwx,g:www-data:rwx /var/www"
        command: 'docker',
        args: ['exec',package_json['docker-dev-container-prefix']+'webserver','/bin/bash','-c','"setfacl -Rdm u:www-data:rwx,g:www-data:rwx /var/www"']
    },
    {
        // docker exec webserver /bin/bash -c "php -f /var/www/dev/docker/webserver/setup.php"
        command: 'docker',
        args: ['exec',package_json['docker-dev-container-prefix']+'webserver','/bin/bash','-c','"php -f /var/www/dev/docker/webserver/setup.php"']
    },
];

ccr.spawn(command_chain,0);

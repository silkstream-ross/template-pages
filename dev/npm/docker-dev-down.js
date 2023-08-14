const ccr = require('./lib/command-chain-runner');

const command_chain = [
    {
        // docker-machine stop
        command: 'docker-compose',
        args: ['down']
    }
];

ccr.spawn(command_chain,0);

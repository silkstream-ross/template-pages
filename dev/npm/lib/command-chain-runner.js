const { spawn } = require('child_process');
const { sleep } = require('./sleep');

module.exports.spawn = function(command_chain,command_key) {
    if (command_chain[command_key]) {
        if (command_chain[command_key].command === 'sleep') {
            console.log("Waiting for "+command_chain[command_key].args+"ms\n");
            sleep(command_chain[command_key].args).then(() => {
                command_key++;
                module.exports.spawn(command_chain,command_key);
            });
        } else {
            let child = spawn(command_chain[command_key].command,command_chain[command_key].args,{shell:true});
            child.stdout.pipe(process.stdout);

            let error = false;

            child.on('error', (err) => {
                error = true;
            });

            child.on('exit', (code) => {
                if (!error) {
                    command_key++;
                    module.exports.spawn(command_chain,command_key);
                }
            });
        }
    }
};

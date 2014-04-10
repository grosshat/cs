// Example of stack pile, with two functions calling each other and producing an
// out of stack space.

function ping() {
    return pong();
}

function pong() {
    return ping;
}

ping();

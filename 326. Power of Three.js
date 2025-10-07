/**
 * @param {number} n
 * @return {boolean}
 */
var isPowerOfThree = function(n) {
    if (n < 1) return false;

    let num = 1;
    while (num < n) {
        num *= 3;
    }
    if (num <= n) return true;
    return false
};
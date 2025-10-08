/**
 * @param {number} n
 * @return {boolean}
 */
var isPowerOfFour = function(n) {
    if (n == 0) return false;
    let num = n;
    while (num % 4 == 0){
        num /= 4;
    }
    return num == 1;
};
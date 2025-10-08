/**
 * @param {character[]} s
 * @return {void} Do not return anything, modify s in-place instead.
 */
var reverseString = function(s) {
    let len = s.length;
    let idx = len - 1;

    for (let i = 0; i < len/2; i++, idx--) {
        let temp = s[i];
        s[i] = s[idx];
        s[idx] = temp;
    }
};
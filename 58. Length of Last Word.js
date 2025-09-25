/**
 * @param {string} s
 * @return {number}
 */
var lengthOfLastWord = function(s) {
    s = s.trim()
    let count = 0
    let flag = 0
    for (let i = 0; i < s.length; i++) {
        if (count >= 1 && s[i] == ' ' && flag) {
            count = 0
            flag = 0
            continue
        }
        else if (s[i] != ' '){
            count++
            flag = 1
        }
        else continue
    }
    return count
};
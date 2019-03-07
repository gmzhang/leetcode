function reverseInteger(num) {
    let ans = 0
    while (num) {
        ans = ans * 10 + num % 10
        num = ~~(num / 10)
    }

    if (ans >= (Math.pow(2,31) - 1) || ans <= -Math.pow(2,31)) {
        return 0
    }
    return ans
}
def reverse(num):
    """

    :param num: int
    :return: int
    """
    sign = -1 if num < 0 else 1
    num = abs(num)
    ans = 0
    while num:
        # ans = ans * 10 + num % 10
        # num /= 10
        num, mod = divmod(num, 10)
        ans = ans * 10 + mod

    return sign * ans if ans <= 0x7fffffff else 0

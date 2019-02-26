def twoSum(nums, target):
    """
    :param nums:
    :param target:
    :return:
    """
    indexDict = {}
    for key, val in enumerate(nums):
        another = target - val
        if another in indexDict:
            return [indexDict[another], key]
        indexDict[val] = key
    return None
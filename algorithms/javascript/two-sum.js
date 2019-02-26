function twoSum(nums,target){
    const indexMap = new Map()
    for (let i = 0; i < nums.length; i++) {
        if (indexMap.get(nums[i]) !== undefined) return [indexMap.get(nums[i]), i]
        indexMap.set(target - nums[i], i)
    }
    return []
}

console.log(twoSum([2, 7, 11, 15],9))